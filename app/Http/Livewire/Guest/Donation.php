<?php

namespace App\Http\Livewire\Guest;

use App\Models\Donations;
use App\Models\Funds;
use Livewire\Component;

class Donation extends Component
{
    public $id_buba,$Funds,$Donations,$Tot_donations,$date,$amount,$doner_name,$doner_details,$payment_method,$paymentstatus;
    public function mount(){
        $this->paymentstatus='first';
        $this->Funds=Funds::find($this->id_buba);
        $this->Donations=Donations::where('fund_id',$this->Funds->id)->get();
        if (!$this->Donations->isEmpty()){
            foreach ($this->Funds as $Fund){
                $this->Tot_donations+=$Fund->amount;
            }
        }
        //dd($this->Donations);
        //dd($this->id_buba);
    }
    public function approve($type){
        $this->paymentstatus=$type;
    }//Add_donation
    public function render()
    {
        return view('livewire.guest.donation');
    }
}
