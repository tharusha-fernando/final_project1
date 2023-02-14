<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Progressbar extends Component
{
    public $Percentage;
    public function mount(){
        if (is_null($this->Percentage)){
            $this->Percentage=0;
        }elseif ($this->Percentage>=100){
            //$this-
            $this->Percentage=100;
        }
        //dd($this->Percentage);
    }
    public function render()
    {
        return view('livewire.admin.progressbar');
    }
}
