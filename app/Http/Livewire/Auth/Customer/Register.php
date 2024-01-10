<?php

namespace App\Http\Livewire\Auth\Customer;

use App\Models\User;
use App\Models\subdomain;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Validation\Rule;


class Register extends Component
{
    public
    $errorMessages = [],
    $name,
    $email,
    $phone_number,
    $password,
    $passwordConfirmation,
    $day="01",
    $month="01",
    $year="2000",
    $from_login = false;
    public function render()
    {
        if(request()->get('data') !=null){
            $data = decrypt(request()->get('data'));
            if(isset($data['from_login'])){
                $this->from_login = $data['from_login'];
            }

        }
        return view('livewire.auth.customer.register');
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

    public function register($name, $email, $phone_number, $day, $month, $year, $password, $passwordConfirmation){
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
        $this->day=$day;
        $this->month=$month;
        $this->year=$year;

        $customMessages = [
            'name.required' => 'Full name is required.',
            'email.required' => "Email is required.",
            'phone_number.required' => 'Phone number is required.',
            'password.required' => 'Password is required.',
            'email.email' => 'Email not valid.',
            'email.unique' => 'Email already use',
            'phone_number.unique' => 'Phone number already use.',
            'password.min' => 'Mminimum 8 character password.',
            'password.same' => 'Password confirmation don\'t match.',
            'day.required' => 'Birth date is required.',
            'month.required' => 'Birth date is required.',
            'year.required' => 'Birth date is required.',
        ];

        $subdomain = $this->getSubdomainOrDomainFromURL();
        $subdomain_id = subdomain::where([
            'name' => $subdomain
        ])->value('id');
        if(!$subdomain_id){
            $subdomain_id = 1;
        }

        try {
            $this->validate([
                'name' => ['required'],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->where(function ($query) use ($subdomain_id) {
                        $query->where('subdomain_id', $subdomain_id);
                    }),
                ],
                'phone_number' => [
                    'required',
                    Rule::unique('users')->where(function ($query) use ($subdomain_id) {
                        $query->where('subdomain_id', $subdomain_id);
                    }),
                ],
                'password' => ['required', 'min:8', 'same:passwordConfirmation'],
                'day' => ['required'],
                'month' => ['required'],
                'year' => ['required'],
            ], $customMessages);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Get the validation errors and emit them as an event
            $errorMessages = $e->validator->getMessageBag();
            foreach ($errorMessages->toArray() as $key => $messages) {
                $this->errorMessages[$key] = $messages;
            }
            $this->emit('closeLoader', false);
            $this->emit('backToLastImage', true);
            return;
        }

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
            'birthdate' => $this->year . '-' . $this->month . '-' . $this->day,
            'role_id' => 4,
            'subdomain_id' => $subdomain_id,
            'last_digit_password' => substr($this->password, -2),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        $this->emit('backToLastImage', true);
        return redirect()->intended(route('dashboard'));
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
        $this->emit('backToLastImage', true);

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
        $this->emit('backToLastImage', true);

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
        $this->emit('backToLastImage', true);
    }
}
