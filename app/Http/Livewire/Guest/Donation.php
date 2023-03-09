<?php

namespace App\Http\Livewire\Guest;

use App\Models\Donations;
use App\Models\Funds;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Donation extends Component
{
    public $id_buba,$Funds,$Donations,$Tot_donations,$date,$amount,$doner_name,$doner_details,$payment_method,$paymentstatus,$percentage,$bank,$branch,$account_numb,$amount_,$address_cp,$Phone_numb,$city_cp,$email_cp,$email_pp,$amount_pp,$cp_type,$name_cp,$card_numb,$amount_cp,$nameonthecard,$exp_date,$csv,$amount_crdt;
    public function mount(){
        $this->paymentstatus='first';
        $this->Funds=Funds::find($this->id_buba);
        $this->Donations=Donations::where('fund_id',$this->Funds->id)->get();
        if (!$this->Donations->isEmpty()){
            foreach ($this->Donations as $Donation){
                $this->Tot_donations+=$Donation->amount;
            }
            $this->percentage=($this->Tot_donations/$this->Funds->amount)*100;
            //dd($this->percentage);
        }

        //dd($this->Donations);
        //dd($this->id_buba);
    }
    public function approve($type){
        $this->paymentstatus=$type;
        //dd($this->paymentstatus);
    }//Add_donation
    public function pay_crdp(){
        $validatedData = $this->validate([
            'amount_crdt'=> 'required',
            'nameonthecard'=> 'required',
            'exp_date'=>'required',
            'csv'=>'required',
            //'csv'=>'required',

        ]);
        $Donation=new Donations();
        $Donation->amount=$this->amount_crdt;
        $Donation->doner_name=$this->nameonthecard;
        $Donation->payment_method='crdp';
        $Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/donation/'.$this->id_buba);

    }

    public function cp_pay(){
        $validatedData = $this->validate([
            'amount_cp'=> 'required',
            'name_cp'=> 'required',
            'cp_type'=>'required',
            //'our_achivemnetns'=>'required',

        ]);
        $Donation=new Donations();
        $Donation->amount=$this->amount_cp;
        $Donation->doner_name=$this->name_cp;
        $Donation->payment_method='cp';
        $Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/donation/'.$this->id_buba);
    }
    public function paypal_payment(){
        //$validatedData = $this->validate([
           // 'amount_cp'=> 'required',
            //'name_cp'=> 'required',
            //'doc_upload'=>'required',
            //'our_achivemnetns'=>'required',

        //]);
        $Donation=new Donations();
        $Donation->amount=$this->amount_pp;
        $Donation->doner_name=$this->email_pp;
        $Donation->payment_method='pp';
        $Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/donation/'.$this->id_buba);
    }

    public function dp_pay(){
        $Donation=new Donations();
        $Donation->amount=$this->amount_;
        $Donation->doner_name=$this->account_numb;
        $Donation->payment_method='dp';
        $Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/donation/'.$this->id_buba);
    }



    public function render()
    {
        return view('livewire.guest.donation');
    }
}
