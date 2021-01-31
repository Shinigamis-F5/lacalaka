<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Party;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PartyFollowers extends Component
{
    public $followers;
    public $party;

    public function mount($id) {
        $this->party = Party::find($id);
    }
    public function render()
    {
        $this->followers = $this->party->users()->get();
        return view('livewire.party-followers', ['followers' => $this->followers]);
    }

    public function follow(){
        $user = Auth::user();
        $user->followParty($this->party);
    }
}
