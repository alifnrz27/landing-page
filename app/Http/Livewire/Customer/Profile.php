<?php

namespace App\Http\Livewire\Customer;

use App\Models\BuildingType;
use App\Models\CustomerAddress;
use App\Models\User;
use App\Models\HistoryCustomerPoint;
use App\Models\subdomain;
use App\Models\RequestNewUser;
use App\Models\Transaction;
use App\Models\DetailTransaction;
use Exception;
use Illuminate\Http\Request;
use Livewire\Component;
use QrCode;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Http\Livewire\Auth\Customer\Register;

class Profile extends Component
{
    use WithFileUploads;
    public
    $isOpenAddressLists = false,
    $is_update = false,
    $from_claim = false,
    $from_detail_product=false,
    $history_from_claim = false,
    $change_address = false,
    $buildingTypes = [],
    $addressLists = [],
    $errorMessages =[],
    $transfer_histories = [],
    $detail_transaction=[],
    $idAddress = '',
    $building_type_id = 1,
    $id_claimed_voucher_gift=0,
    $id_product=0,
    $is_primary = true,
    $name ="",
    $year = "2000",
    $month="01",
    $day="01",
    $email="",
    $phone_number="",
    $current_phone_number="",
    $province = "",
    $city = "",
    $subdistrict = "",
    $urban_village = "",
    $detail = '',
    $postal_code = "",
    $qrcode = "",
    $currentPage,
    $password="",
    $image_path="",
    $profile_image="",
    $passwordConfirmation="",
    $image_transfer="",
    $previous_transfer_image="",
    $status_transaction="",
    $oldPassword="",
    $allPointHistories = [],
    $countAllPointHistories=0,
    $allPointHistoriesPlus = [],
    $countAllPointHistoriesPlus=0,
    $allPointHistoriesMinus = [],
    $countAllPointHistoriesMinus=0;

    protected $listeners = ['processCroppedImage' => 'processCroppedImage'];

    public function mount(){
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['from_claim'])){
                $this->from_claim = $data['from_claim'];
                $this->id_claimed_voucher_gift = $data['id_claimed_voucher_gift'];
            }
            if(isset($data['from_detail_product'])){

                $this->from_detail_product = $data['from_detail_product'];
                $this->id_product = $data['id_product'];
            }
            if(isset($data['change_address'])){
                $this->getAddressLists();
                $this->change_address = $data['change_address'];
                $this->id_claimed_voucher_gift = $data['id_claimed_voucher_gift'];
            }
            if(isset($data['history_from_claim'])){
                $this->openPointHistories();
                $this->history_from_claim = $data['history_from_claim'];
            }

        }
        $this->image_path = auth()->user()->image_path;
        $this->profile_image = $this->image_path;
        $this->name = auth()->user()->name;
        list($this->year, $this->month, $this->day) = explode("-", auth()->user()->birthdate);
        $this->email=auth()->user()->email;
        $this->phone_number=auth()->user()->phone_number;
        $this->current_phone_number=auth()->user()->phone_number;
        $this->buildingTypes = BuildingType::get();
        $this->currentPage = "profile";
    }

    public function backToClaim(){
        $encryptedData = encrypt(['from_profile' => true, 'id_claimed_voucher_gift' => $this->id_claimed_voucher_gift]);
        return redirect(route('claim', ['data' => $encryptedData]));
    }

    public function backToDetailProduct(){
        $encryptedData = encrypt(['from_profile' => true, 'id_product' => $this->id_product]);
        return redirect(route('merchant', ['data' => $encryptedData]));
    }

    public function render()
    {
        return view('livewire.customer.profile');
    }

    public function requestNewUser(){
        $checkUser = RequestNewUser::where([
            'email' => auth()->user()->email,
        ])->orWhere([
            'phone_number' => auth()->user()->phone_number,
        ])->first();
        if($checkUser){
            $this->dispatchBrowserEvent('modal', [
                'type' => 'error',
                'title'=> 'You\'re already request',
                'text'=>'',
            ]);
            $this->emit('closeLoader', false);
            return;
        }

        $subdomain = $this->getSubdomainOrDomainFromURL();
        $subdomain_id = subdomain::where([
            'name' => $subdomain
        ])->value('id');
        if(!$subdomain_id){
            $subdomain_id = 1;
        }

        RequestNewUser::create([
            'email' => auth()->user()->email,
            'name' => auth()->user()->name,
            'phone_number' => auth()->user()->phone_number,
            'status' => 0,
            'referal_domain_id' => $subdomain_id,
        ]);

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Success to request',
            'text'=>'',
        ]);
        $this->emit('closeLoader', false);
    }

    public function getSubdomainOrDomainFromURL() {
        $host = $_SERVER['HTTP_HOST'];
        $domainParts = explode('.', $host);

        // Menghilangkan "www" jika ada
        if ($domainParts[0] === 'www') {
            array_shift($domainParts);
        }

        // Mengambil subdomain pertama atau domain utama
        // $subdomainOrDomain = $domainParts[0];
        $subdomainOrDomain = implode(".", $domainParts);

        return $subdomainOrDomain;
    }

    public function submitAddress(){
        $customMessages = [
            'building_type_id.required' => 'Building type is required.',
            'province.required' => "Province is required.",
            'city.required' => 'City / district is required',
            'subdistrict.required' => 'Subdistrict is required.',
            'urban_village.required' => 'Kelurahan is required.',
            'postal_code.required' => 'Postal code is required.',
            'detail.required' => 'Detail is required.',
        ];

        try {
            $this->validate([
                'building_type_id' => ['required'],
                'province' => ['required'],
                'city' => ['required'],
                'subdistrict' => ['required'],
                'urban_village' => ['required'],
                'postal_code' => ['required'],
                'detail' => ['required'],
                'is_primary' => ['required'],
            ], $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            $this->errorMessages = [];
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            // dd($this->errorMessages);
            $this->emit('closeLoader', false);
            return;
        }


        if($this->is_primary){
            CustomerAddress::where(['user_id' => auth()->user()->id])->update(['is_primary' => false]);
        }
        $countAddressUser = CustomerAddress::where(['user_id' => auth()->user()->id])->count();
        if($countAddressUser < 1){
            $this->is_primary = true;
        }

        CustomerAddress::create([
            'user_id' => auth()->user()->id,
            'building_type_id' => $this->building_type_id,
            'province' => $this->province,
            'city' => $this->city,
            'subdistrict' => $this->subdistrict,
            'urban_village' => $this->urban_village,
            'detail' => $this->detail,
            'postal_code' => $this->postal_code,
            'is_primary' => $this->is_primary,
        ]);
        if($this->from_claim){
            $this->backToClaim();
        }
        if($this->from_detail_product){
            $this->backToDetailProduct();
        }
        $this->closeForm();
        $this->getAddressLists();
        $this->emit('showForm', false);
        $this->openAddressLists();
    }

    public function updateAddress(){
        $customMessages = [
            'building_type_id.required' => 'Building type is required.',
            'province.required' => "Province is required.",
            'city.required' => 'City / district is required',
            'subdistrict.required' => 'Subdistrict is required.',
            'urban_village.required' => 'Kelurahan is required.',
            'postal_code.required' => 'Postal code is required.',
            'detail.required' => 'Detail is required.',
        ];

        $this->validate([
            'building_type_id' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'subdistrict' => ['required'],
            'urban_village' => ['required'],
            'postal_code' => ['required'],
            'detail' => ['required'],
            'is_primary' => ['required'],
        ], $customMessages);

        if($this->is_primary){
            CustomerAddress::where(['user_id' => auth()->user()->id])->update(['is_primary' => false]);
        }
        $countAddressUser = CustomerAddress::where([
            ['user_id', '=', auth()->user()->id],
            ['id', '!=', $this->idAddress],
            ])->count();
        if($countAddressUser < 1){
            $this->is_primary = true;
        }

        CustomerAddress::where(['id' => $this->idAddress])->update([
            'building_type_id' => $this->building_type_id,
            'province' => $this->province,
            'city' => $this->city,
            'subdistrict' => $this->subdistrict,
            'urban_village' => $this->urban_village,
            'detail' => $this->detail,
            'postal_code' => $this->postal_code,
            'is_primary' => $this->is_primary,
        ]);
        $this->closeForm();
        $this->getAddressLists();
        $this->emit('showForm', false);
        $this->openAddressLists();
    }

    public function getAddressLists(){
        $this->addressLists = CustomerAddress::where(['user_id' => auth()->user()->id])->with(['buildingType'])->get();
    }

    public function deleteAddress(){
        // do deleting
        $address = CustomerAddress::where(['id' => $this->idAddress])->first();
        if($address->is_primary){
            CustomerAddress::where([
                            ['user_id', '=', auth()->user()->id],
                            ['id', '!=', $this->idAddress],
                            ])
                            ->orderBy('id','desc')
                            ->take(1)
                            ->update(['is_primary' => true]);
        }
        CustomerAddress::where(['id' => $this->idAddress])->delete();
        $this->mount();
        $this->getAddressLists();
        $this->closeForm();
        $this->openAddressLists();
    }

    public function openAddressLists(){
        if(!$this->isOpenAddressLists){
            $this->getAddressLists();
        }
        $this->isOpenAddressLists = true;
        $this->emit('showAddressLists', true);
    }

    public function closeAddressLists(){
        $this->emit('showAddressLists', false);
    }

    public function openActionsPopUp($id){
        $this->idAddress = $id;
        try{
            $address = CustomerAddress::where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        }catch (Exception $e){
            return abort(403);
        }

        $this->building_type_id = $address->building_type_id;
        $this->is_primary = $address->is_primary;
        $this->province = $address->province;
        $this->city = $address->city;
        $this->subdistrict = $address->city;
        $this->urban_village = $address->urban_village;
        $this->detail = $address->detail;
        $this->postal_code = $address->postal_code;

        $this->emit('showActionsPopUp', true);
    }

    public function openEditForm(){
        $this->is_update = true;
        $this->emit('showForm', true);
    }

    public function closeForm(){
        $this->is_update = false;
        $this->idAddress = "";
        $this->building_type_id = 1;
        $this->is_primary = true;
        $this->province = "";
        $this->city = "";
        $this->subdistrict = "";
        $this->urban_village = "";
        $this->detail = '';
        $this->postal_code = "";
        $this->emit('showForm', false);
    }

    public function changePassword(){
        $customMessages = [
            'oldPassword.required' => 'Old password is required.',
            'password.required' => 'New password is required.',
            'password.same' => "Password confirmation don't match.",
            'password.min' => "Password minimum 8 digits",
        ];

        try {
            $this->validate([
                'oldPassword' => ['required'],
                'password' => ['required', 'same:passwordConfirmation', 'min:8'],
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

        if (!Hash::check($this->oldPassword, auth()->user()->password)) {
            $this->errorMessages["oldPassword"][] = 'You\'re old password is wrong.';
            $this->emit('closeLoader', false);
            return;
        }

        User::where('id', auth()->user()->id)->update([
            'password' => bcrypt($this->password),
            'last_digit_password' => substr($this->password, -2),
            'last_change_password' => now(),
        ]);
        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully changed password',
            'text'=>'',
        ]);
        $this->password="";
        $this->passwordConfirmation="";
        $this->oldPassword="";
        $this->errorMessages = [];
        $this->emit('closeLoader', false);
    }

    public function changeProfile(){
        $customMessages = [
            'name.required' => 'Name is required.',
            'day.required' => "Day is required.",
            'month.required' => "Month is required.",
            'year.required' => "Year is required.",
            'phone_number.required' => "Phone number is required.",
            'phone_number.unique' => "Phone number already used.",
        ];

        try {
            $validate = [
                'name' => ['required'],
                'day' => ['required'],
                'month' => ['required'],
                'year' => ['required'],
                'phone_number' => ['required'],
            ];

            if($this->phone_number != $this->current_phone_number){
                $validate['phone_number'] = ['required', 'unique:users'];
            }

            $this->validate($validate, $customMessages);
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
            'name' => $this->name,
            'birthdate' => $this->year . '-' . $this->month . '-' . $this->day,
        ];

        if($this->image_path != null) {
            if(substr($this->image_path, 0, 4) == "data"){
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->image_path));
                $pathToSave = storage_path('app/public/imagesProfile'); // Ganti dengan direktori yang sesuai
                $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
                $imagePath = $pathToSave . '/' . $imageName;
                $path = "imagesProfile/".$imageName;
                file_put_contents($imagePath, $imageData);
                $dataSubmit = [
                    ...$dataSubmit,
                    'image_path' => $path,
                ];
                if (File::exists(public_path('storage/'.$this->profile_image))) {
                    File::delete(public_path('storage/'.$this->profile_image));
                }
            }
            else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'image_path' => $this->profile_image,
                ];
            }
        }
        else{
            if($this->profile_image){
                if (Storage::exists($this->profile_image)) {
                    Storage::delete($this->profile_image);

                    $dataSubmit = [
                        ...$dataSubmit,
                        'image_path' => '',
                    ];
                }
            }else{
                $dataSubmit = [
                    ...$dataSubmit,
                    'image_path' => $this->profile_image,
                ];
            }
        }

        User::where('id', auth()->user()->id)->update($dataSubmit);
        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully changed profile',
            'text'=>'',
        ]);

        $this->errorMessages = [];
        $this->emit('closeLoader', false);

        return redirect(route('dashboard'));
    }

    public function openPointHistories(){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $points=DB::table('history_customer_points')
                                ->select(DB::raw('description, point, is_income_point, created_at, YEAR(created_at) as year, MONTH(created_at) as month'))
                                ->where([
                                    'user_id' => auth()->user()->id,
                                ])
                                ->latest()
                                ->get();
        $endDate = now(); // Dapatkan tanggal saat ini
        $startDate = now()->subMonths(3); // Dapatkan tanggal tiga bulan yang lalu

        $this->countAllPointHistories = DB::table('history_customer_points')
                                ->where([
                                    'user_id' => auth()->user()->id,
                                ])
                                ->whereBetween('created_at', [$startDate, $endDate])
                                ->count();

        $this->allPointHistories = [];
        $year = date('Y');

        foreach ($points as $index => $historyPoint) {
            if($historyPoint->year == $year){
                $this->allPointHistories[$months[$historyPoint->month-1]][] = $historyPoint;
            }else{
                $this->allPointHistories['Tahun lalu'][] = $historyPoint;
            }
        }
        $this->emit('closeLoader', false);
        $this->emit('openPointHistories', true);
    }

    public function openTransferHistories(){
        $this->transfer_histories = Transaction::where([
            'user_id' => auth()->user()->id,
        ])->latest()->get();
        $this->emit('closeLoader', false);
        $this->emit('openTransferHistories', true);
    }

    public function openDetailTransaction($transaction_id){
        $this->detail_transaction = DetailTransaction::where([
            'transaction_id' => $transaction_id,
        ])->with(['product'])->latest()->get();

        $transaction = Transaction::where(['id' => $transaction_id])->first();

        $this->image_transfer = $transaction->transfer_image;
        $this->previous_transfer_image = $transaction->transfer_image;
        $this->status_transaction = $transaction->status;
        $this->id_transaction = $transaction->id;
        $this->emit('closeLoader', false);
        $this->emit('openDetailTransferHistories', true);
    }

    public function receivedProduct(){
        Transaction::where([
            'id' => $this->id_transaction
        ])->update(['status' => 2]);

        $this->status_transaction = 2;

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully changed profile',
            'text'=>'',
        ]);
    }

    public function submitNewImageTransfer(){
        if(substr($this->image_transfer, 0, 4) == "data"){
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $this->image_transfer));
            $pathToSave = storage_path('app/public/imagesTransfer'); // Ganti dengan direktori yang sesuai
            $imageName = uniqid() . '.png'; // Nama file unik dengan ekstensi .png
            $imagePath = $pathToSave . '/' . $imageName;
            $path = "imagesTransfer/".$imageName;
            file_put_contents($imagePath, $imageData);
            if (File::exists(public_path('storage/'.$this->previous_transfer_image))) {
                File::delete(public_path('storage/'.$this->previous_transfer_image));
            }
        }
        Transaction::where([
            'id' => $this->id_transaction
        ])->update(['transfer_image' => $path]);

        $this->status_transaction = 1;

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Successfully update image',
            'text'=>'',
        ]);
    }

    public function openPointHistoriesPlus(){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $points=DB::table('history_customer_points')
                                ->select(DB::raw('description, point, is_income_point, created_at, YEAR(created_at) as year, MONTH(created_at) as month'))
                                ->where([
                                    'user_id' => auth()->user()->id,
                                    'is_income_point' => 1
                                ])
                                ->latest()
                                ->get();
        $endDate = now(); // Dapatkan tanggal saat ini
        $startDate = now()->subMonths(3); // Dapatkan tanggal tiga bulan yang lalu

        $this->countAllPointHistoriesPlus = DB::table('history_customer_points')
                                ->where([
                                    'user_id' => auth()->user()->id,
                                    'is_income_point' => 1
                                ])
                                ->whereBetween('created_at', [$startDate, $endDate])
                                ->count();

        $this->allPointHistoriesPlus = [];
        $year = date('Y');

        foreach ($points as $index => $historyPoint) {
            if($historyPoint->year == $year){
                $this->allPointHistoriesPlus[$months[$historyPoint->month-1]][] = $historyPoint;
            }else{
                $this->allPointHistoriesPlus['Tahun lalu'][] = $historyPoint;
            }
        }
        $this->emit('closeLoader', false);
        $this->emit('openPointHistoriesPlus', true);
    }

    public function openPointHistoriesMinus(){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $points=DB::table('history_customer_points')
                                ->select(DB::raw('description, point, is_income_point, created_at, YEAR(created_at) as year, MONTH(created_at) as month'))
                                ->where([
                                    'user_id' => auth()->user()->id,
                                    'is_income_point' => 0
                                ])
                                ->latest()
                                ->get();
        $endDate = now(); // Dapatkan tanggal saat ini
        $startDate = now()->subMonths(3); // Dapatkan tanggal tiga bulan yang lalu

        $this->countAllPointHistoriesMinus = DB::table('history_customer_points')
                                ->where([
                                    'user_id' => auth()->user()->id,
                                    'is_income_point' => 0
                                ])
                                ->whereBetween('created_at', [$startDate, $endDate])
                                ->count();

        $this->allPointHistoriesMinus = [];
        $year = date('Y');

        foreach ($points as $index => $historyPoint) {
            if($historyPoint->year == $year){
                $this->allPointHistoriesMinus[$months[$historyPoint->month-1]][] = $historyPoint;
            }else{
                $this->allPointHistoriesMinus['Tahun lalu'][] = $historyPoint;
            }
        }
        $this->emit('closeLoader', false);
        $this->emit('openPointHistoriesMinus', true);
    }

    public function checkDay(){
        $allDays = [
            '01', '02', '03', '04', '05',
            '06', '07', '08', '09', '10',
            '11', '12', '13', '14', '15',
            '16', '17', '18', '19', '20',
            '21', '22', '23', '24', '25',
            '26', '27', '28', '29', '30',
            '31'
        ];
        if(!in_array($this->day, $allDays)){
            $this->day = '01';
        }else{
            if($this->month == "02"){
                if($this->year%4 == 0){
                    if(intval($this->day) > 29){
                        $this->day=29;
                        }
                }
            }elseif($this->month == "04" || $this->month == "06" || $this->month == "09" || $this->month == "11"){
                if(intval($this->day) > 30){
                    $this->day = 30;
                }
            }
        }

    }

    public function checkMonth(){
        $allMonths = [
            '01', '02', '03', '04', '05',
            '06', '07', '08', '09', '10',
            '11', '12'
        ];
        if(!in_array($this->month, $allMonths)){
            $this->month = '01';
        }else{
            if($this->month == "02"){
                if($this->year%4 == 0){
                    if(intval($this->day) > 29){
                        $this->day=29;
                        }
                }
            }elseif($this->month == "04" || $this->month == "06" || $this->month == "09" || $this->month == "11"){
                if(intval($this->day) > 30){
                    $this->day = 30;
                }
            }
        }

    }

    public function checkYear(){
        if(!preg_match("/^\d{4}$/", $this->year)){
            $this->year = '2000';
        }else{
            if($this->month == "02"){
                if($this->year%4 == 0){
                    if(intval($this->day) > 29){
                        $this->day=29;
                        }
                }else{
                    if(intval($this->day) > 28){
                        $this->day=28;
                        }
                }
            }
        }

    }

    public function processCroppedImage($data){
        $this->image_path = $data;
        $this->image_transfer = $data;
    }
}
