<?php

namespace App\Http\Livewire\Admin;

use App\Models\Funds;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithFileUploads;

class RequestFunds extends Component
{
    use WithFileUploads;
    public $name,$description,$email,$nic,$doc_upload,$age,$contact,$amount;

    public function add_funds(){
        //dd($this->doc_upload);
        $validatedData = $this->validate([
            'name'=> ['required', 'string', 'max:255'],
            //'last_name'=> ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password'=>['required', Password::min(8)],
            'doc_upload'=>'required',
            'contact'=>'required|numeric',
            'description'=>'required|string',
            'nic'=>'required|numeric',
            'age'=>'required|numeric',
            'amount'=>'required|numeric',
            //'nic'=>'sometimes|numeric',
        ]);
        $Funds=new Funds();
        $Funds->name=$this->name;
        $Funds->age=$this->age;
        $Funds->nic=$this->nic;
        $Funds->contact=$this->contact;
        $Funds->email=$this->email;
        $Funds->description=$this->description;
        $Funds->amount=$this->amount;
        if (!is_null($this->doc_upload)){
            $filepath=$this->doc_upload->store('proof_documents','public');
            //dd($filepath);
            $Funds->file_path=$filepath;
        }
        $Funds->save();
        session()->flash('message_customer', 'Request has been added successfully');
    }
    public function render()
    {
        return view('livewire.admin.request-funds');
    }
}
