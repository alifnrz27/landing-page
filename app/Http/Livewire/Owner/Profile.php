<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use App\Models\Brand;
use App\Models\MaxPointBussiness;

class Profile extends Component
{
    public $max_points = [], $brand=[], $errorMessages=[], $type, $max_point;

    public function mount(){
        if(auth()->user()->role_id == 2){
            $this->brand = Brand::where(['user_id' => auth()->user()->id])->first();
            $this->max_points = MaxPointBussiness::where(['brand_id' => $this->brand['id']])->get();
        }
    }

    public function updateMaxPoint(){
        $customMessages = [
            'max_point.required' => 'Max point is required.',
            'max_point.numeric' => "Max point must numeric.",
            'type.required' => 'Type is required.',
        ];
        $validated = [
            'max_point' => ['required', 'numeric'],
            'type' => ['required'],
        ];

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
        MaxPointBussiness::where([
            'brand_id' => $this->brand['id']
        ])->update([
            'status' => false
        ]);
        MaxPointBussiness::create([
            'brand_id' => $this->brand['id'],
            'max_point' => $this->max_point,
            'type' => $this->type,
            'status' => true
        ]);

        $this->dispatchBrowserEvent('modal', [
            'type' => 'success',
            'title'=> 'Data changed',
            'text'=>'',
        ]);
        $this->emit('formOpen', false);
        $this->mount();
        $this->clearForm();
    }

    public function clearForm(){
        $this->max_point = null;
        $this->type = null;
    }

    public function render()
    {
        return view('livewire.owner.profile');
    }
}
