<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $partyStyles = ['Rock', 'Techno', 'Reggae', 'Boring'];
    public $showPartyStyles = false;
     
    public function render()
    {
        return view('livewire.header');
    }
}
