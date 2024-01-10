<?php

namespace App\Http\Livewire\Owner;

use App\Models\Brand;
use App\Models\Promotion;
use App\Models\PromotionStore;
use App\Models\Store;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Promo extends Component
{
    use WithFileUploads;
    protected $listeners = ['updateStoreId' => 'updateStoreIdMethod', 'processCroppedImage' => 'processCroppedImage'];

    public $thumbnail, $thumbnail_image, $stores, $brand, $promotions, $show_data ,$isShow=false, $isShowUpdate=false, $is_all_stores = false, $search="";
    public
    $title,
    $status,
    $store_id=0,
    $description,
    $limit,
    $start_date,
    $end_date,
    $perPage = 10,
    $errorMessages=[];

    public function gotoPage($page){
        $this->promotions = Promotion::where([
            ['brand_id' , '=', $this->brand['id']],
            ])->with(['promotionStores'])->paginate($this->perPage, ['*'], 'page', $page);
    }

    public function mount(){
        if(auth()->user()->role_id == 2){
            $this->brand = Brand::where(['user_id' => auth()->user()->id])->first();
        }else{
            $store = Store::where(['user_id' => auth()->user()->id])->first();
            $this->brand = Brand::where(['id' =>$store->brand_id])->first();
        }

        $this->stores = Store::where([
            ['brand_id' , '=', $this->brand['id']]
        ])->get();
    }

    public function updateStoreIdMethod($storeId){
            $this->store_id = $storeId;
    }

    public function changeStatus(){
        Promotion::where([
            'id' => $this->show_data['id']
        ])->update([
            'status' => !$this->status
        ]);
        $this->status = !$this->status;
    }

    public function processCroppedImage($data){
        $this->thumbnail = $data;
        $this->emit('closeLoader', false);
    }

    public function render()
    {
        $this->promotions = Promotion::where([
            ['brand_id' , '=', $this->brand['id']],
            ['title', 'like', '%' . $this->search . '%']
            ])->with(['promotionStores'])->latest()->get();
        return view('livewire.owner.promo');
    }

    public function removeThumbnail(){
        $this->thumbnail = null;
    }


    public function submitPromo(){
        $customMessages = [
            'title.required' => 'Title is required.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'limit.required' => 'Limit is required.',
            'start_date.required' => 'Start date is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File size maximum 8 MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'limit' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],

        ];

        if($this->thumbnail != null) {
            $validated = [
                ...$validated,
                'thumbnail' => ['required'],
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


        $dataSubmit = [
            'brand_id' => $this->brand['id'],
            'title' => $this->title,
            'description' =>$this->description,
            'limit' =>$this->limit,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ];

        if($this->store_id == 0) {
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => true,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => false,
            ];
        }

        if($this->thumbnail != null) {
            // Simpan gambar ke folder imagesPromotion dalam direktori storage
            // $path = $this->thumbnail->store('imagesPromotion', 'public');
            // $this->thumbnail = null;
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
            $pathToSave = storage_path('app/public/imagesPromotion'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesPromotion/".$imageName;
            file_put_contents($imagePath, $imageData);
            $dataSubmit = [
                ...$dataSubmit,
                'thumbnail_path' => $path,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'thumbnail_path' => '',
            ];
        }

        $promo = Promotion::create($dataSubmit);
        $promotionStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $promotionStore[] =[
                    'promotion_id' => $promo->id,
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $promotionStore[] =[
                    'promotion_id' => $promo->id,
                    'store_id' => $array_store_id[$i]
                ];
            }
        }
        PromotionStore::insert($promotionStore);

        $this->mount();
        $this->title = '';
        $this->store_id = '';
        $this->description = '';
        $this->limit = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->emit('updateOpen', false);
        $this->emit('showNotification', true);
        $this->emit('closeLoader', false);
    }

    public function updatePromo($id){
        $customMessages = [
            'title.required' => 'Title is required.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'limit.required' => 'Limit is required.',
            'start_date.required' => 'Start date is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File size maximum 8 MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'limit' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],

        ];

        if($this->thumbnail != null) {
            if(!is_string($this->thumbnail)){
                $validated = [
                    ...$validated,
                    'thumbnail' => ['required'],
                ];
            }
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

        $dataSubmit = [
            'brand_id' => $this->brand['id'],
            'title' => $this->title,
            'description' =>$this->description,
            'limit' =>$this->limit,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ];

        if($this->store_id == 0) {
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => true,
            ];
        }
        else{
            $dataSubmit = [
                ...$dataSubmit,
                'is_all_stores' => false,
            ];
        }

        if($this->thumbnail != null) {
            if(substr($this->thumbnail, 0, 4) == "data"){

                // Simpan gambar ke folder imagesPromotion dalam direktori storage
                // $path = $this->thumbnail->store('imagesPromotion', 'public');
                // $this->thumbnail = null;
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
                $pathToSave = storage_path('app/public/imagesPromotion'); // Ganti dengan direktori yang sesuai
                $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
                $imagePath = $pathToSave . '/' . $imageName;
                $path = "imagesPromotion/".$imageName;
                file_put_contents($imagePath, $imageData);
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $path,
                ];
                if (File::exists(public_path('storage/'.$this->thumbnail_image))) {
                    File::delete(public_path('storage/'.$this->thumbnail_image));
                }
            }
            else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $this->thumbnail_image,
                ];
            }
        }
        else{
            if (Storage::exists($this->thumbnail_image)) {
                Storage::delete($this->thumbnail_image);

                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => '',
                ];
            }else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'thumbnail_path' => $this->thumbnail_image,
                ];
            }
        }

        Promotion::where(['id' => $id])->update($dataSubmit);
        PromotionStore::where(['promotion_id' => $id])->delete();
        $promotionStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $promotionStore[] =[
                    'promotion_id' => $id,
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $promotionStore[] =[
                    'promotion_id' => $id,
                    'store_id' => $array_store_id[$i]
                ];
            }
        }
        PromotionStore::insert($promotionStore);

        $this->mount();
        $this->clearForm();
        $this->emit('updateOpen', false);
        $this->emit('showNotification', true);
        $this->emit('closeLoader', false);
    }

    public function showPromotion($id){
        $this->show_data = Promotion::where([
            'id' => $id
        ])->with(['promotionStores'])->first();
        $this->isShow = true;

        $this->status = $this->show_data['status'];
        $this->start_date = $this->show_data['start_date'];
        $this->end_date = $this->show_data['end_date'];
        $this->limit = $this->show_data['limit'];
        $this->thumbnail_image = $this->show_data['thumbnail_path'];
        $this->title = $this->show_data['title'];
        $this->description = $this->show_data['description'];
        $this->is_all_stores = $this->show_data['is_all_stores'];

        $this->emit('showOpen', $this->isShow);
    }

    public function deleteShow(){
        $this->isShow = false;

        $this->show_data = "";
        $this->status = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->limit = '';
        $this->thumbnail_image = '';
        $this->title = '';
        $this->description = '';
        $this->emit('showOpen', $this->isShow);
    }

    public function showUpdatePromotion($id){
        $this->isShowUpdate = true;
        $store_id = PromotionStore::select('store_id')->where(['promotion_id' => $id])->pluck('store_id')->toArray();
        if($this->show_data['is_all_stores']){
            $this->store_id = 0;
        }else{
            $this->store_id = implode(',', $store_id);
        }
        $this->emit('updateOpen', $this->isShowUpdate);
        $this->thumbnail = $this->show_data['thumbnail_path'];
    }

    public function clearForm(){
        $this->deleteShow();
        $this->errorMessages = [];
        $this->isShowUpdate = false;
        $this->store_id = 0;
        $this->emit('updateOpen', $this->isShowUpdate);
        $this->thumbnail = "";
    }
}
