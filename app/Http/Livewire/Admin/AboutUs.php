<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUs extends Component
{
    use WithFileUploads;
    public $dataFeed,$about_us,$vision,$doc_upload,$Data,$our_achivemnetns,$imageurl;


    public function mount(){
        $this->Data=\App\Models\AboutUs::all()->first();
        //dd($this->Data);
        if (!is_null($this->Data)){
            $this->about_us=$this->Data->about_us;
            $this->vision=$this->Data->vision;
            $this->doc_upload=$this->Data->image_path;
            $this->our_achivemnetns=$this->Data->our_achievmnets;
            $this->imageurl="storage/".$this->Data->image_path;

        }
        //dd($this->imageurl);
    }

    public function update_data(){
        //dd($this->doc_upload);
        $validatedData = $this->validate([
            'about_us'=> 'required|string',
            'vision'=> 'required|string',
            'doc_upload'=>'required',
            'our_achivemnetns'=>'required|string',
            //'password_confirmation'=>$this->passwordRules(),
           // 'mobile_number'=>'sometimes|numeric',
            //'date_of_birth'=>'sometimes',
            // 'nic'=>'sometimes|numeric',
            //'nic'=>'sometimes|numeric',
        ]);

        if (!is_null($this->Data)){
            $this->Data->about_us=$this->about_us;
            $this->Data->vision=$this->vision;
            if (!is_null($this->doc_upload)){
                $filepath=$this->doc_upload->store('images','public');
                //dd($filepath);
                //$Funds->file_path=$filepath;
            }
            $this->Data->image_path=$filepath;
            $this->Data->our_achievmnets=$this->our_achivemnetns;
            $this->Data->save();
            $this->mount();
            session()->flash('message_customer', 'New Data has been added successfully');
            //$this->imageurl=Storage::url($this->Data->image_path);
        }else{
            $Data=new \App\Models\AboutUs();
            $Data->about_us=$this->about_us;
            $Data->vision=$this->vision;
            if (!is_null($this->doc_upload)){
                $filepath=$this->doc_upload->store('images','public');
                //dd($filepath);
                //$Funds->file_path=$filepath;
            }
            $Data->image_path=$filepath;
            $Data->our_achievmnets=$this->our_achivemnetns;

            $Data->save();
            session()->flash('message_customer', 'New Data has been added successfully');
        }



    }


    public function render()
    {
        return view('livewire.admin.about-us');
    }
}
