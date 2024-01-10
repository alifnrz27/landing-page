<?php

namespace App\Http\Livewire\Owner;

use App\Models\Brand;
use App\Models\Claim;
use App\Models\Promotion;
use App\Models\ClaimStore;
use App\Models\PromotionStore;
use App\Models\Store as ModelsStore;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Store extends Component
{
    use WithFileUploads;
    protected $listeners = ['processCroppedImage' => 'processCroppedImage'];
    public
    $name,
    $username,
    $password,
    $passwordConfirmation,
    $address,
    $province,
    $city,
    $subdistrict,
    $urban_village,
    $postal_code,

    $search = '',
    $errorMessages = [],
    $store_image,

    $stores,
    $update_data,
    $isUpdate = false;

    public function mount(){

    }
    public function render()
    {
        $brand = Brand::where(['user_id' => auth()->user()->id])->first();
        $nameStore = $this->search;
        $this->stores = ModelsStore::where([
        ['brand_id', '=', $brand->id],
        ['name', 'like', '%'.$this->search.'%']
        ])->get();
        return view('livewire.owner.store');
    }

    public function submitStore(){
        $customMessages = [
            'name.required' => 'Name is required.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Minimum password 8 characters.',
            'password.same' => 'Password confirmation don\'t match.',
            'address.required' => 'Address is required.',
            'province.required' => 'Province is required.',
            'city.required' => 'City / district is required.',
            'subdistrict.required' => 'Subdistrict is required.',
            'urban_village.required' => 'Kelurahan is required.',
            'postal_code.required' => 'Postal code is required.',
            'store_image.required' => 'Store image is required.',
        ];

        try {
            $this->validate([
                'name' => ['required'],
                'store_image' => ['required'],
                'username' => ['required', 'unique:users'],
                'password' => ['required', 'min:8', 'same:passwordConfirmation'],
                'address' => ['required'],
                'province' => ['required'],
                'city' => ['required'],
                'subdistrict' => ['required'],
                'urban_village' => ['required'],
                'postal_code' => ['required'],
            ], $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            $this->errorMessages = [];
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        $user = User::create([
            'name' => "Admin " . $this->name,
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => 3,
            'username' => $this->username,
            'password'=> bcrypt($this->password),
        ]);

        $brand = Brand::where(['user_id' => auth()->user()->id])->first();

        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->store_image));
        $pathToSave = storage_path('app/public/imagesStore'); // Ganti dengan direktori yang sesuai
        $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
        $imagePath = $pathToSave . '/' . $imageName;
        $path = "imagesStore/".$imageName;
        file_put_contents($imagePath, $imageData);

        $store = ModelsStore::create([
            'user_id' => $user->id ,
            'brand_id' => $brand->id ,
            'store_image' => $path,
            'name' => $this->name ,
            'address' => $this->address ,
            'province' => $this->province ,
            'city' => $this->city ,
            'subdistrict' => $this->subdistrict ,
            'urban_village' => $this->urban_village ,
            'postal_code' => $this->postal_code ,
        ]);

        $allStoreClaim = Claim::where(['is_all_stores' => true, 'brand_id' => $brand->id])->get();
        $allStorePromotion = Promotion::where(['is_all_stores' => true, 'brand_id' => $brand->id])->get();

        $listClaim = [];
        foreach($allStoreClaim as $claim){
            $listClaim[] = [
                'claim_id' => $claim->id,
                'store_id' => $store['id'],
            ];
        }

        ClaimStore::insert($listClaim);
        $listPromotion = [];
        foreach($allStorePromotion as $promotion){
            $listPromotion[] = [
                'promotion_id' => $promotion->id,
                'store_id' => $store['id'],
            ];
        }

        PromotionStore::insert($listPromotion);

        $this->cancelStore();

        $this->mount();
        $this->emit('closeLoader', false);
        $this->emit('showNotification', true);
    }

    public function updateData($id){
        $store = ModelsStore::where(['id' => $id])->with(['user'])->first();
        $customMessages = [
            'name.required' => 'Name is required.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Minimum password 8 characters.',
            'password.same' => 'Password confirmation don\'t match.',
            'address.required' => 'Address is required.',
            'province.required' => 'Province is required.',
            'city.required' => 'City / district is required.',
            'subdistrict.required' => 'Subdistrict is required.',
            'urban_village.required' => 'Kelurahan is required.',
            'postal_code.required' => 'Postal code is required.',
        ];
        $validated = [
            'name' => ['required'],
            'store_image' => ['required'],
            'address' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'subdistrict' => ['required'],
            'urban_village' => ['required'],
            'postal_code' => ['required'],
        ];
        if($this->username != $store->user->username){
            $validated = [
                ...$validated,
                'username' => ['required', 'unique:users'],
            ];
        }
        if($this->password){
            $validated = [
                ...$validated,
                'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            ];
        }

        try {
            $this->validate($validated, $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            $this->errorMessages = [];
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        if($this->username != $store->user->username){
            User::where(['id' => $store->user->id])->update([
                'username' => $this->username,
            ]);
        }
        if($this->password){
            User::where(['id' => $store->user->id])->update([
                'password' => bcrypt($this->password),
            ]);
        }

        $dataSubmit = [
            'name' => $this->name ,
            'address' => $this->address ,
            'province' => $this->province ,
            'city' => $this->city ,
            'subdistrict' => $this->subdistrict ,
            'urban_village' => $this->urban_village ,
            'postal_code' => $this->postal_code ,
        ];

        if(substr($this->store_image, 0, 4) == "data"){
            // Simpan gambar ke folder imagesPromotion dalam direktori storage
            // Simpan gambar ke folder imagesPromotion dalam direktori storage
            // $path = $this->store_image->store('imagesClaim', 'public');
            // $this->store_image = null;
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->store_image));
            $pathToSave = storage_path('app/public/imagesStore'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesStore/".$imageName;
            file_put_contents($imagePath, $imageData);
            $dataSubmit = [
                ...$dataSubmit,
                'store_image' => $path,
            ];
            if (File::exists(public_path('storage/'.$this->store_image))) {
                File::delete(public_path('storage/'.$this->store_image));
            }
        }

        ModelsStore::where(['id' => $id])->update($dataSubmit);

        $this->cancelStore();

        $this->mount();
        $this->emit('closeLoader', false);
        $this->emit('showNotification', true);
    }

    public function updateStore($id){
        $this->update_data = ModelsStore::where([
            'id' => $id
        ])->first();
        $user = User::where(['id' => $this->update_data['user_id']])->first();
        $this->isUpdate = true;

        $this->store_image = $this->update_data['store_image'];
        $this->name = $this->update_data['name'];
        $this->username = $user->username;
        $this->address = $this->update_data['address'];
        $this->province = $this->update_data['province'];
        $this->city = $this->update_data['city'];
        $this->subdistrict = $this->update_data['subdistrict'];
        $this->urban_village = $this->update_data['urban_village'];
        $this->postal_code = $this->update_data['postal_code'];
        $this->emit('updateOpen', $this->isUpdate);
    }

    public function cancelStore(){
        $this->isUpdate = false;
        $this->update_data = '';

        $this->store_image = '';
        $this->name = '';
        $this->username = '';
        $this->password = '';
        $this->passwordConfirmation = '';
        $this->address = '';
        $this->province = '';
        $this->city = '';
        $this->subdistrict = '';
        $this->urban_village = '';
        $this->postal_code = '';

        $this->errorMessages = [];

        $this->emit('updateOpen', $this->isUpdate);
    }

    public function processCroppedImage($data){
        $this->store_image = $data;
    }

    public function removeImage(){
        $this->store_image = null;
    }
}
