<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class VenueProfile extends Component
{
    use WithFileUploads;

    public $rate;
    public $totalCups = 5;
    public $yellowCups;

    public $organization, $address, $city, $description, $phone, $openingTimes, $img;

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

    public function edit(User $user)
    {
        $this->organization = $user->organization;
        $this->address = $user->address;
        $this->city = $user->city;
        $this->description = $user->description;
        $this->phone = $user->phone;
        $this->openingTimes = $user->openingTimes;
    }

    public function upload(User $user)
    {
        $user->update([
            'organization' => $this->organization,
            'address' => $this->address,
            'city' => $this->city,
            'description' => $this->description,
            'phone' => $this->phone,
            'openingTimes' => $this->openingTimes,
        ]);

        $user->saveOrFail();
    }

    public function storeImg(User $user)
    {
        $this->validate([
            'img' => ['required', 'image', 'max:1024'],
        ]);
        
        dd($this->img);
        $user->update([
            'img' => $this->img->getClientOriginalName(),
        ]);

        DB::transaction( function () {
            $this->img->storeAs('public/venue-image', $this->img->getClientOriginalName());
        });
    }

    public function deleteImg(User $user)
    {
        $this->img = $user->img;

        $user->update([
            $user->img => null,
        ]);
        
        DB::transaction( function () {
            DB::table('users')->update(['img' => null]);
            Storage::delete([$this->img]);
        });
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
