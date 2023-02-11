<?php

namespace App\Http\Livewire\Guest;

use App\Models\Funds;
use Livewire\Component;

class Donate extends Component
{
    public $Funds;
    public function mount(){
        $this->Funds=Funds::where('status','approved')->get();
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

    public function approve($id_bu){
        //dd($id_bu);
        return $this->redirect('/donation/'.$id_bu);
    }

    public function render()
    {
        return view('livewire.guest.donate');
    }
}
