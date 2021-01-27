<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $partyStyles = ['Rock', 'Techno', 'Reggae', 'Boring'];
    
    public $showPartyStyles = false;
     
    public function filterByStyle($partyStyle){
       
        $this->emit('filterByStyle', $partyStyle);
    }
    public function render()
    {
        return view('livewire.header');
    }
}
