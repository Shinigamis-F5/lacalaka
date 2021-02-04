<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class PartyCardHomepage extends Component
{

    public $party, $venue;

   public function mount($party) {
       $this->party = $party;
       $this->venue = User::find($this->party->user_id);
   }
    
    public function render()
    {   
        
        return view('livewire.party-card-homepage', [
            
            'party' => $this->party,
            'venue' => $this->venue
        ]);
    }
}
