<?php

namespace App\Http\Livewire\Admin;

use App\Models\Funds;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithFileUploads;

class RequestFunds extends Component
{
    use WithFileUploads;
    public $name,$description,$email,$nic,$doc_upload,$age,$contact,$type,$amount,$doc_uploadnic,$doc_uploadlifing,$doc_uploadphotos;

    public function add_funds(){
        //dd($this->doc_upload);
        $validatedData = $this->validate([
            'name'=> ['required', 'string', 'max:255'],
            //'last_name'=> ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password'=>['required', Password::min(8)],
            'doc_upload'=>'required',
            'doc_uploadnic'=>'required',
            'doc_uploadlifing'=>'required',
            'doc_uploadphotos'=>'required',
            'contact'=>'required|numeric',
            'description'=>'required|string',
            'nic'=>'required|numeric',
            'age'=>'required|numeric',
            'amount'=>'required|numeric',
            'type'=>'required',
            //'nic'=>'sometimes|numeric',
        ]);
        $Funds=new Funds();
        $Funds->name=$this->name;
        $Funds->age=$this->age;
        $Funds->nic=$this->nic;
        $Funds->type=$this->type;
        $Funds->contact=$this->contact;
        $Funds->email=$this->email;
        $Funds->description=$this->description;
        $Funds->amount=$this->amount;
        if (!is_null($this->doc_upload)){
            $filepath=$this->doc_upload->store('medical_proof','public');
            //dd($filepath);
            $Funds->medical_proof=$filepath;
        }
        if (!is_null($this->doc_uploadnic)){
            $filepath=$this->doc_uploadnic->store('nic','public');
            //dd($filepath);
            $Funds->nic_=$filepath;
        }
        if (!is_null($this->doc_uploadlifing)){
            $filepath=$this->doc_uploadlifing->store('living_proof','public');
            //dd($filepath);
            $Funds->living_proof=$filepath;
        }
        if (!is_null($this->doc_uploadphotos)){
            $filepath=$this->doc_uploadphotos->store('photosOfpatient_buububabubububa','public');
            //dd($filepath);
            $Funds->photos_of=$filepath;
        }
        $Funds->save();
        session()->flash('message_customer', 'Request has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.request-funds');
    }
}
