<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VenueProfile extends Component
{
    public $rate;
    public $totalCups = 5;
    public $yellowCups;

    public function render()
    {
        $venue = Auth::user();
        $this->calculateRating($venue);
        $this->assignYellowCups();
        $this->storeRate($venue);
        
        return view('livewire.venue-profile', [
            'venue' => $venue,
        ]);
    }


    public function calculateRating(User $user)
    {
        $numbOfcup = 5;
        $allVotes = $user->votes()->get();
        $votesQuantity = count($allVotes);
        $totalAmount = 0;

        foreach ($allVotes as $vote) {
            $totalAmount += $vote->vote;
        }

        if($votesQuantity == 0) {
            $this->rate = 0;
        }

        if($votesQuantity > 0) {
            $result = $totalAmount / $votesQuantity;
            $percentatge = ($result * 100) / $numbOfcup;
            $this->rate = number_format($percentatge, 0);
        }
    }

    public function assignYellowCups()
    {
        if($this->rate <= 20) {
            $this->yellowCups = 1;
        }

        if($this->rate > 20 && $this->rate < 40) {
            $this->yellowCups = 2;
        }

        if($this->rate >= 40 && $this->rate < 60) {
            $this->yellowCups = 3;
        }

        if($this->rate >= 60 && $this->rate < 80) {
            $this->yellowCups = 4;
        }

        if($this->rate >= 80 && $this->rate <= 100) {
            $this->yellowCups = 5;
        }
    }

    public function storeRate(User $user) {

        $user->rate = $this->rate;
        $user->save();
    }
}
