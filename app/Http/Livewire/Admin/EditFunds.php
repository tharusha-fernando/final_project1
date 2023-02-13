<?php

namespace App\Http\Livewire\Admin;

use App\Models\Funds;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFunds extends Component
{
    use WithFileUploads;
    public $Funds,$name,$description,$email,$nic,$doc_upload,$age,$contact,$type,$amount,$doc_uploadnic,$doc_uploadlifing,$doc_uploadphotos;
    public function mount($id_bu){
        //dd($id_bu);
        $this->Funds=Funds::find($id_bu);
        //dd($this->Funds);
        $this->name=$this->Funds->name;
        $this->age=$this->Funds->age;
        $this->nic=$this->Funds->nic;
        $this->type=$this->Funds->type;
        $this->contact=$this->Funds->contact;
        $this->email=$this->Funds->email;
        $this->description=$this->Funds->description;
        $this->amount=$this->Funds->amount;
    }

    public function add_funds(){
        //dd($this->doc_upload);
        $validatedData = $this->validate([
            'name'=> ['required', 'string', 'max:255'],
            //'last_name'=> ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password'=>['required', Password::min(8)],
            'doc_upload'=>'sometimes',
            'doc_uploadnic'=>'sometimes',
            'doc_uploadlifing'=>'sometimes',
            'doc_uploadphotos'=>'sometimes',
            'contact'=>'required|numeric',
            'description'=>'required|string',
            'nic'=>'required|numeric',
            'age'=>'required|numeric',
            'amount'=>'required|numeric',
            'type'=>'required',
            //'nic'=>'sometimes|numeric',
        ]);
        //$Funds=new Funds();
        $this->Funds->name=$this->name;
        $this->Funds->age=$this->age;
        $this->Funds->nic=$this->nic;
        $this->Funds->type=$this->type;
        $this->Funds->contact=$this->contact;
        $this->Funds->email=$this->email;
        $this->Funds->description=$this->description;
        $this->Funds->amount=$this->amount;
        if (!is_null($this->doc_upload)){
            $filepath=$this->doc_upload->store('medical_proof','public');
            //dd($filepath);
            $this->Funds->medical_proof=$filepath;
        }
        if (!is_null($this->doc_uploadnic)){
            $filepath=$this->doc_uploadnic->store('nic','public');
            //dd($filepath);
            $this->Funds->nic_=$filepath;
        }
        if (!is_null($this->doc_uploadlifing)){
            $filepath=$this->doc_uploadlifing->store('living_proof','public');
            //dd($filepath);
            $this->Funds->living_proof=$filepath;
        }
        if (!is_null($this->doc_uploadphotos)){
            $filepath=$this->doc_uploadphotos->store('photosOfpatient_buububabubububa','public');
            //dd($filepath);
            $this->Funds->photos_of=$filepath;
        }
        $this->Funds->save();
        $this->mount($this->Funds->id);
        session()->flash('message_customer', 'Request has been Updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.edit-funds');
    }
}
