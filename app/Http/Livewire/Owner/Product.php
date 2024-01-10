<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Brand;
use App\Models\Product as ModelsProduct;
use App\Models\Store;
use App\Models\ProductStore;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Product extends Component
{
    use WithFileUploads;
    protected $listeners = ['updateStoreId' => 'updateStoreIdMethod', 'processCroppedImage' => 'processCroppedImage'];
    public
    $brand,
    $products = [],
    $isShow = false,
    $isShowUpdate=false,
    $search='',

    $brand_id = '',
    $title = '',
    $code = '',
    $stock = "",
    $price = '',
    $description = '',
    $end_date = '',
    $thumbnail='',
    $thumbnail_image = '',

    $stores =[],
    $store_id='0',
    $show_data = '',
    $errorMessages = [];

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

    public function submitProduct(){
        $customMessages = [
            'title.required' => 'Title is required.',
            'price.numeric' => 'Price must numeric.',
            'price.required' => 'Price is required.',
            'stock.numeric' => 'Stock must numeric.',
            'stock.required' => 'Stock is required.',
            'code.required' => 'Code is required.',
            'code.unique' => 'Code already used.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File maximum 8MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'code' => ['required', 'unique:products'],
            'stock' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'end_date' => ['required'],
        ];

        if($this->thumbnail != null) {
            $validated = [
                ...$validated,
                'thumbnail' => ['required'],
            ];
        }

        $this->errorMessages = [];

        try {
            $this->validate($validated, $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        $dataSubmit = [
            'brand_id' => $this->brand['id'],
            'title' => $this->title,
            'code' => $this->code,
            'price' => $this->price,
            'stock' => $this->stock,
            'description' =>$this->description,
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
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
            $pathToSave = storage_path('app/public/imagesProduct'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesProduct/".$imageName;
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
        $product = ModelsProduct::create($dataSubmit);
        $productStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $productStore[] =[
                    'product_id' => $product->id,
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $productStore[] =[
                    'product_id' => $product->id,
                    'store_id' => $array_store_id[$i]
                ];
            }
        }
        ProductStore::insert($productStore);


        $this->clearForm();
        $this->emit('showNotification', true);
        $this->emit('formOpen', false);
    }

    public function updateProduct($id){
        $customMessages = [
            'title.required' => 'Title is required.',
            'price.numeric' => 'Price must numeric.',
            'price.required' => 'Price is required.',
            'stock.numeric' => 'Stock must numeric.',
            'stock.required' => 'Stock is required.',
            'code.required' => 'Code is required.',
            'code.unique' => 'Code already used.',
            'store_id.required' => 'Store is required.',
            'description.required' => 'Description is required.',
            'end_date.required' => 'End date is required.',
            'thumbnail.max' => 'File maximum 8MB',
        ];
        $validated = [
            'title' => ['required'],
            'store_id' => ['required'],
            'description' => ['required'],
            'stock' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'end_date' => ['required'],
        ];

        if($this->show_data['code'] != $this->code){
            $validated['code'] = ['required', 'unique:products'];
        }else{
            $validated['code'] = ['required'];
        }

        if($this->thumbnail != null) {
            $validated = [
                ...$validated,
                'thumbnail' => ['required'],
            ];
        }

        $this->errorMessages = [];

        try {
            $this->validate($validated, $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            return;
        }

        $dataSubmit = [
            'brand_id' => $this->brand['id'],
            'title' => $this->title,
            'stock' => $this->stock,
            'price' => $this->price,
            'code' => $this->code,
            'description' =>$this->description,
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
                // Simpan gambar ke folder imagesPromotion dalam direktori storage
                // $path = $this->thumbnail->store('imagesClaim', 'public');
                // $this->thumbnail = null;
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->thumbnail));
                $pathToSave = storage_path('app/public/imagesClaim'); // Ganti dengan direktori yang sesuai
                $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
                $imagePath = $pathToSave . '/' . $imageName;
                $path = "imagesClaim/".$imageName;
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

        ModelsProduct::where('id', $id)->update($dataSubmit);
        ProductStore::where('product_id', $this->show_data['id'])->delete();
        $productStore =[];
        if($this->store_id == 0){
            foreach ($this->stores as $index => $store) {
                $productStore[] =[
                    'product_id' => $this->show_data['id'],
                    'store_id' => $store["id"]
                ];
            }
        }else{
            $array_store_id = explode(",", $this->store_id);
            for($i = 0; $i < count($array_store_id); $i++){
                $productStore[] =[
                    'product_id' => $this->show_data['id'],
                    'store_id' => $array_store_id[$i]
                ];
            }
        }

        ProductStore::insert($productStore);


        $this->clearForm();
        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Berhasil simpan data',
            'text'=>'',
        ]);
        $this->emit('formOpen', false);
        $this->emit('showNotification', true);
    }

    public function showUpdateProduct($id){
        $this->isShowUpdate = true;
        $store_id = ProductStore::select('store_id')->where(['product_id' => $id])->pluck('store_id')->toArray();
        if($this->show_data['is_all_stores']){
            $this->store_id = 0;
        }else{
            $this->store_id = implode(',', $store_id);
        }
        $this->emit('formOpen', $this->isShowUpdate);
        $this->thumbnail = $this->show_data['thumbnail_path'];
    }

    public function showProduct($id){
        $this->show_data = ModelsProduct::where([
            'id' => $id
        ])->with(['ProductStores'])->first();
        $this->isShow = true;

        $this->status = $this->show_data['status'];
        $this->end_date = $this->show_data['end_date'];
        $this->code = $this->show_data['code'];
        $this->stock = $this->show_data['stock'];
        $this->price = $this->show_data['price'];
        $this->thumbnail_image = $this->show_data['thumbnail_path'];
        $this->title = $this->show_data['title'];
        $this->description = $this->show_data['description'];
        $this->is_all_stores = $this->show_data['is_all_stores'];
    }

    public function updateStoreIdMethod($storeId){
        $this->store_id = $storeId;
    }

    public function processCroppedImage($data){
        $this->thumbnail = $data;
        $this->emit('closeLoader', false);
    }

    public function removeThumbnail(){
        $this->thumbnail = null;
    }

    public function changeStatus(){
        ModelsProduct::where([
            'id' => $this->show_data['id']
        ])->update([
            'status' => !$this->status
        ]);
        $this->status = !$this->status;
        $this->render();
    }

    public function deleteShow(){
        $this->isShow = false;
        $this->isShowUpdate = false;
        $this->show_data = '';
    }

    public function clearForm(){
        $this->isShow = false;
        $this->title = '';
        $this->code = '';
        $this->stock = '';
        $this->price = '';
        $this->description = '';
        $this->end_date = '';
        $this->thumbnail='';
        $this->thumbnail_image = '';
    }

    public function render()
    {
        $this->products = ModelsProduct::where([
            ['brand_id' , '=', $this->brand['id']],
            ['title', 'like', '%' . $this->search . '%']
        ])
        ->with(['productStores'])
        ->get();

        return view('livewire.owner.product');
    }
}
