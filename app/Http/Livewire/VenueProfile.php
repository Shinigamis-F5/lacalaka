<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VenueProfile extends Component
{
    public function render()
    {
        $venue = Auth::user();

        return view('livewire.venue-profile', [
            'venue' => $venue,
        ]);
    }
}
