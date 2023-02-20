<?php

namespace App\Http\Livewire\Admin;

use App\Models\BuyA;
use Livewire\Component;

class ViewBuyacoffee extends Component
{
    public $amount=0;
    public function mount(){
        $Amount=BuyA::all();
        foreach ($Amount as $Amount_){
            $this->amount+=$Amount_->amount;
        }
    }
    public function render()
    {
        return view('livewire.admin.view-buyacoffee');
    }
}
