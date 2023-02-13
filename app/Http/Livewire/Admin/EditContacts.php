<?php

namespace App\Http\Livewire\Admin;

use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class EditContacts extends Component
{
    public $Data,$telephone,$email,$Address;

    public function mount(){
        $this->Data=ContactUs::all()->first();
        if (!is_null($this->Data)){
            $this->telephone=$this->Data->telephone;
            $this->email=$this->Data->email;
            $this->Address=$this->Data->address;
            //$this->our_achivemnetns=$this->Data->our_achievmnets;
            //$this->imageurl="storage/".$this->Data->image_path;

        }
    }

    public function update_data()
    {
        //dd($this->doc_upload);
        $validatedData = $this->validate([
            'telephone' => 'required',
            'email' => 'required|string',
            'Address' => 'required',
            //'our_achivemnetns' => 'required|string',
            //'password_confirmation'=>$this->passwordRules(),
            // 'mobile_number'=>'sometimes|numeric',
            //'date_of_birth'=>'sometimes',
            // 'nic'=>'sometimes|numeric',
            //'nic'=>'sometimes|numeric',
        ]);

        if (!is_null($this->Data)) {
            $this->Data->telephone = $this->telephone;
            $this->Data->email = $this->email;
            $this->Data->Address = $this->Address;
            $this->Data->save();
            $this->mount();
            session()->flash('message_customer', 'New Data has been added successfully');
            //$this->imageurl=Storage::url($this->Data->image_path);
        } else {
            $Data = new ContactUs();
            $Data->telephone = $this->telephone;
            $Data->email = $this->email;
            $Data->Address = $this->Address;
            $Data->save();
            session()->flash('message_customer', 'New Data has been added successfully');
        }
    }

        public function render()
    {
        return view('livewire.admin.edit-contacts');
    }
}
