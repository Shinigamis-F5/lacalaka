<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VisitorPartyDetails extends Component
{
    public $party;
    public function render()
    {
        $venue = User::find($this->party->user_id);
    
        return view('livewire.visitor-party-details', ['party' => $this->party, 'venue' => $venue]);
    }


}
