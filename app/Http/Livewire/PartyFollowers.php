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
    public $showFollowersModal = false;
    public $numberOfFollowers = 3;

    public function mount($id)
    {
        $this->party = Party::find($id);
        $this->followers = $this->party->users()->latest()->take($this->numberOfFollowers)->get();
    }
    public function render()
    {
        return view('livewire.party-followers', ['followers' => $this->followers]);
    }

    public function follow()
    {
        $user = Auth::user();
        $user->followParty($this->party);
    }

    public function showModal()
    {
        $this->showFollowersModal = !$this->showFollowersModal;
    }

    public function showMoreFollowers()
    {
        
        $this->numberOfFollowers = $this->numberOfFollowers + 3;
        $this->mount($this->party->id);
        
    }
}
