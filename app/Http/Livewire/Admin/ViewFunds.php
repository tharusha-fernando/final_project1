<?php

namespace App\Http\Livewire\Admin;

use App\Models\Funds;
use Livewire\Component;

class ViewFunds extends Component
{
    public $Funds;
    public function mount(){
        $this->Funds=Funds::where('status','false')->get();
        //dd($this->Funds);
    }

    public function approve($id_bu){
        //dd($id_bu);
        $Fund=Funds::find($id_bu);
        $Fund->status='approved';
        $Fund->save();
        $Fund->save();
        //$this->mount();
        return $this->redirect('/view_funds');
    }

    public function download($id_bu,$what){
        //dd($id_bu);
        //dd($what);
        $Fund=Funds::find($id_bu);
        if ($what=='medical'){
            return response()->download(storage_path('app/public/'.$Fund->medical_proof));
        }elseif ($what=='nic'){
            return response()->download(storage_path('app/public/'.$Fund->nic_));
        }elseif ($what=='liveing'){
            return response()->download(storage_path('app/public/'.$Fund->living_proof));
        }elseif ($what=='photos'){
            return response()->download(storage_path('app/public/'.$Fund->photos_of));
        }

    }

    public function download_file($file_path){
        //dd($file_path);
        $file_path=storage_path('app/public/'.$file_path);
        $file_path = str_replace('\\', '/', $file_path);
        dd(response()->download($file_path));
        return response()->download($file_path);
    }

    public function download_redirect($id_bu){
        return $this->redirect('/edit_funds/'.$id_bu);
    }

    public function render()
    {
        return view('livewire.admin.view-funds');
    }
}
