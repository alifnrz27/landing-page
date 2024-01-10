<?php

namespace App\Http\Livewire\Owner;

use App\Models\Brand;
use App\Models\HistoryCustomerPoint;
use App\Models\Point as ModelsPoint;
use App\Models\Store;
use App\Models\User;
use App\Models\MaxPointBussiness;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class Point extends Component
{
    use WithFileUploads;
    protected $listeners = ['processCroppedImage' => 'processCroppedImage'];

    public $customers = [],
    $errorMessages = [],
    $brand = "",
    $detailCustomer = "",
    $note = "",
    $image = "",
    $nominal = "",
    $th = 10000,
    $points = [],
    $orderDetail = 'desc',
    $storeDetail = 0,
    $listStores = [],
    $scanBarcode,
    $totalPointUser,
    $maxPoint,
    $submitButtonStatus=false,
    $point=0,
    $showImage,
    $search = "";
    public function mount(){
        $bussinessOwner = User::where(['subdomain_id'=> auth()->user()->subdomain_id, 'role_id' => 2])->first();
        $this->brand = Brand::where('user_id', $bussinessOwner->id)->first();
        $this->listStores = Store::where([
            'brand_id' => $this->brand['id']
        ])->get();

        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['scanBarcode'])){
                $this->scanBarcode = $data['scanBarcode'];
                $this->openCustomer($data['id_user']);
            }

        }
    }

    public function removeImage(){
        $this->nominal = $this->nominal ? $this->nominal : 0;
        $this->point = intval(preg_replace('/[^0-9]/', '', $this->nominal)/($this->brand['total_shopping']/$this->brand['point']));
        $this->image = null;
        $this->emit('showAddPoint', false);
    }

    public function getPoint(){
        $this->point = intval(preg_replace('/[^0-9]/', '', $this->nominal)/($this->brand['total_shopping']/$this->brand['point']));
        if($this->maxPoint['max_point'] < 0){
            $this->submitButtonStatus = true;
        }else{
            if($this->point + $this->totalPointUser <= $this->maxPoint['max_point']){
                $this->submitButtonStatus = true;
            }else{
                $this->submitButtonStatus = false;
            }
        }
        $this->emit('updatePoint', $this->point);
    }

    public function showImage($path){
        $this->showImage = $path;
    }

    public function deleteShowImage(){
        $this->showImage = null;
    }

    public function processCroppedImage($data){
        $this->image = $data;
        $this->point = intval(intval(preg_replace('/[^0-9]/', '', $this->nominal))/($this->brand['total_shopping']/$this->brand['point']));
        $this->emit('showAddPoint', false);
    }

    // public function submitPoint(){
    //     $customMessages = [
    //         'note.required' => 'Catatan harus diisi.',
    //         'nominal.required' => 'Nominal harus diisi.',
    //         'image.required' => 'Gambar harus diisi.',
    //         'image.max' => 'Max 8 MB.',
    //     ];
    //     $validated = [
    //         'note' => ['required'],
    //         'nominal' => ['required'],
    //         'image' => ['required', 'max:8192'],
    //     ];

    //     try {
    //         $this->validate($validated, $customMessages);
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         // Get the validation errors and emit them as an event
    //         $errorMessages = $e->validator->getMessageBag();
    //         $this->errorMessages = [];
    //         foreach ($errorMessages->toArray() as $key => $messages) {
    //             $this->errorMessages[$key] = $messages;
    //         }
    //         $this->emit('showLoader', false);
    //         return;
    //     }

    //     $path = $this->image->store('imagesPoint', 'public');


    //     // jika yg input admin utama
    //     if(auth()->user()->role_id == 2){
    //         $store['id'] = 0;
    //         $sales['id'] = 0;
    //     }elseif(auth()->user()->role_id == 3){
    //         $store = Store::where('user_id', auth()->user()->id)->first();
    //         $sales['id'] = 0;
    //     }else{
    //         $store['id'] = 0;
    //         $sales['id'] = auth()->user()->id;
    //     }
    //     $point = ModelsPoint::create([
    //         'brand_id' => $this->brand['id'],
    //         'user_id' => $this->detailCustomer['id'],
    //         'store_id' => $store['id'],
    //         'sales_id' => $sales['id'],
    //         'nominal' => $this->nominal,
    //         'point' => $this->point,
    //         'note' => $this->note,
    //         'image' => $path,
    //         'status' => 0,
    //     ]);

    //     $this->emit('showLoader', false);
    //     $this->emit('showNotification', true);
    //     $this->openCustomer($this->detailCustomer['id']);
    //     $this->clearForm();
    //     $this->mount();
    // }

    public function clearForm(){
        $this->note = "";
        $this->image = null;
        $this->nominal = "";
        $this->errorMessages = [];
        $this->submitButtonStatus=false;
        $this->emit('showForm', false);
    }

    public function changeOrderDetail(){
        $this->openCustomer($this->detailCustomer['id']);
    }
    public function openCustomer($id){
        $now = Carbon::now('Asia/Jakarta');
        $this->detailCustomer = User::where(['id' => $id])->first();
        $this->maxPoint = MaxPointBussiness::where([
            'brand_id' => $this->brand['id'],
            'status' => true
        ])->first();

        if($this->maxPoint){
            if($this->maxPoint['type'] == 1){
                $totalPointUser = ModelsPoint::where([
                    'user_id' => $id,
                    'status' => 1,
                ])->whereMonth('created_at', '=', $now->format('n'))
                ->whereYear('created_at', '=', $now->year)
                ->get();
            }else{
                $totalPointUser = ModelsPoint::where([
                    'user_id' => $id,
                    'status' => 1,
                ])
                ->whereYear('created_at', '=', $now->year)
                ->get();
            }
        }else{
            $this->maxPoint['max_point'] = -1;
            $totalPointUser = ModelsPoint::where([
                'user_id' => $id,
                'status' => 1,
            ])
            ->get();
        }

        $this->totalPointUser = 0;
        foreach($totalPointUser as $total){
            $this->totalPointUser += $total['point'];
        }
        if($this->storeDetail == 0){
            if(auth()->user()->role_id == 2 || auth()->user()->role_id == 3){
                $this->points = HistoryCustomerPoint::where(['user_id' => $this->detailCustomer['id']])->with(['points'])->orderBy('id', $this->orderDetail)->get();

            }
        }
    }

    public function deleteDetail(){
        $this->detailCustomer = "";
        $this->clearForm();
        $this->emit('showForm', false);
    }

    public function render()
    {
        $this->customers = User::where([
            'subdomain_id' => auth()->user()->subdomain_id,
            'role_id' => 4
        ])
        ->where(function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('phone_number', 'like', '%' . $this->search . '%');
        })
        ->get();

        return view('livewire.owner.point');
    }
}
