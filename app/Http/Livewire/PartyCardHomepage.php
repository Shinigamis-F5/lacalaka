<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PartyCardHomepage extends Component
{

    public $party;

   public function mount($party) {
       $this->party = $party;
   }
    
    public function render()
    {
        return view('livewire.party-card-homepage', [
            
            'party' => $this->party
        ]);
    }
}
