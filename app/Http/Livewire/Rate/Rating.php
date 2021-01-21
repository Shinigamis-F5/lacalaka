<?php

namespace App\Http\Livewire\Rate;

use App\Models\User;
use App\Models\Vote;
use Livewire\Component;

class Rating extends Component
{
    public $user;
    public $hype = true;
    public $thanks = false;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.rate.rating', ['user' => $this->user]);
    }

    public function addVote($id, $puntuation)
    {
        $user = User::find($id);
        Vote::create([
            'user_id' => $user->id,
            'vote' => $puntuation,
        ]);
        $this->user = $user;
    }

    public function hideHypeSection()
    {
        $this->hype = false;
        $this->thanks = true;
    }
}
