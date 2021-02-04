<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Style;

class Header extends Component
{
    public $partyStyles;
    public $showPartyStyles = false;

    public function mount() {

    $this->partyStyles = Style::all();
    }  
     
    
    public function filterByStyle($partyStyle){
       
        $this->emit('filterByStyle', $partyStyle);
    }
    
    public function render()
    {
        return view('livewire.header');
    }
}
