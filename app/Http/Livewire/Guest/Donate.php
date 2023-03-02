<?php

namespace App\Http\Livewire\Guest;

use App\Models\Donations;
use App\Models\Funds;
use Livewire\Component;

class Donate extends Component
{
    public $Funds,$PErcentage_array,$Collection;
    public function mount(){
        $this->Funds=Funds::where('status','approved')->get();
        foreach($this->Funds as $Fund){
            $Tot_donation=0;
            $Donations=Donations::where('fund_id',$Fund->id)->get();
            if (!$Donations->isEmpty()){
                foreach ($Donations as $Donation){
                    $Tot_donation+=$Donation->amount;
                }
                $percentage=intval(($Tot_donation/$Fund->amount)*100);
                $this->PErcentage_array[strval($Fund->id)]=$percentage;
            }
        }
        $this->Collection=collect($this->PErcentage_array);
        //dd($this->Collection);
        //dd($this->PErcentage_array);
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
