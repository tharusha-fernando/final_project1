<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class Donation extends Component
{
    public $id_buba;
    public function mount(){
        dd($this->id_buba);
    }
    public function render()
    {
        return view('livewire.guest.donation');
    }
}
