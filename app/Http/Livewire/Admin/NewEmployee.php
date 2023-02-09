<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class NewEmployee extends Component
{
    public $first_name,$last_name,$mobile_number,$email,$date_of_birth,$nic,$password,$password_confirmation;

    public function new_employeecrusneac(){
        $validatedData = $this->validate([
            'first_name'=> ['required', 'string', 'max:255'],
            'last_name'=> ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', Password::min(8)],
            //'password_confirmation'=>$this->passwordRules(),
            'mobile_number'=>'sometimes|numeric',
            'date_of_birth'=>'sometimes',
            'nic'=>'sometimes|numeric',
            //'nic'=>'sometimes|numeric',
        ]);
        if ($this->password_confirmation==$this->password){
            //dd($this->Password_Confirmation,$this->Password);//12345678
            $user=User::create([
                'name' => $this->first_name.$this->last_name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            $user->nic=$this->nic;
            $user->date_of_birth=$this->date_of_birth;
            $user->phone_number=$this->mobile_number;
            $user->save();
            $user->attachRole('employee');
            session()->flash('message_customer', 'Employee has been added successfully');


        }else{
            session()->flash('message_pwValidation', 'Password Does Not Match');
        }

    }
    public function render()
    {
        return view('livewire.admin.new-employee');
    }
}
