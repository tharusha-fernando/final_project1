<?php

namespace App\Http\Livewire\Admin;

use App\Models\BuyA;
use App\Models\Donations;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class BuyACoffeeUsus extends Component
{
    public $paymentstatus;//$paymentstatus
    public $id_buba,$Funds,$Donations,$Tot_donations,$date,$amount,$doner_name,$doner_details,$payment_method,$percentage,$bank,$branch,$account_numb,$amount_,$address_cp,$Phone_numb,$city_cp,$email_cp,$email_pp,$amount_pp,$cp_type,$name_cp,$card_numb,$amount_cp,$nameonthecard,$exp_date,$csv,$amount_crdt;

    public function mount(){
        $this->paymentstatus='first';
    }
    public function approve($type){
        $this->paymentstatus=$type;
        //dd($this->paymentstatus);
    }//Add_donation
    public function pay_crdp(){
        $Donation=new BuyA();
        $Donation->amount=$this->amount_crdt;
        $Donation->doner_name=$this->nameonthecard;
        $Donation->payment_method='crdp';
        //$Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/buyAcofeeusUs');

    }

    public function cp_pay(){
        $Donation=new BuyA();
        $Donation->amount=$this->amount_cp;
        $Donation->doner_name=$this->name_cp;
        $Donation->payment_method='cp';
        //$Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/buyAcofeeusUs');
    }
    public function paypal_payment(){
        $Donation=new BuyA();
        $Donation->amount=$this->amount_pp;
        $Donation->doner_name=$this->email_pp;
        $Donation->payment_method='pp';
       //$Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/buyAcofeeusUs');
    }

    public function dp_pay(){
        $Donation=new BuyA();
        $Donation->amount=$this->amount_;
        $Donation->doner_name=$this->account_numb;
        $Donation->payment_method='dp';
        //$Donation->fund_id=$this->id_buba;
        //dd($Donation);
        $Donation->save();
        return $this->redirect('/buyAcofeeusUs');
    }

    public function render()
    {
        return view('livewire.admin.buy-a-coffee-usus');
    }
}
