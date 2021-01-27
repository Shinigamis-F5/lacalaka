<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class PartyFollowers extends Component
{
    public $followers;
    public function render()
    {
        // $this->followers = $party->users;
        $this->followers = User::all();
        return view('livewire.party-followers', ['followers' => $this->followers]);
    }
}
