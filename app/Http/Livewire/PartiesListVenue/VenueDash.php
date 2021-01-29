<?php

namespace App\Http\Livewire\PartiesListVenue;

use Livewire\Component;
use App\Models\User;
use App\Models\Party;
use Illuminate\Support\Carbon;

class VenueDash extends Component
{
    public $title, $cover, $description, $date, $time, $location, $style;
    public $isActive = true;

    public function render()
    {
        $venue = User::find(auth()->user()->id);
        $parties = $venue->partiesVenue()->get();

        foreach ($parties as $party) {
            $this->FormatPartyDate($party);
        }

        return view('livewire.parties-list-venue.venue-dash', ['parties' => $parties]);
    }

    public function store()
    {
        $this->validate([
            'title' => ['required', 'string'],
            'cover' => ['required'],
            'description' => ['required', 'string'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'location' => ['required', 'string'],
            'style' => ['required'],
        ]);

        Party::create([
            'title' => $this->title,
            'cover' => $this->cover,
            'description' => $this->description,
            'date' => $this->date,
            'time' => $this->time,
            'location' => $this->location,
            'style' => $this->style,
            'is_active' => '1',
            'user_id' => auth()->user()->id,
        ]);

        $this->reset();
    }

    public function update(Party $party)
    {
        $party->is_active = $this->isActive;

        $party->save();
    }

    public function cancel($id)
    {
        $party = Party::find($id);

        if($party->is_active == 1) {
            $this->isActive = false;
            $party->is_active = 0;
        }

        $this->update($party);
    }

    public function reActivate($id)
    {
        $party = Party::find($id);

        if($party->is_active == 0) {
            $this->isActive = true;
            $party->is_active = 1;
        }

        $this->update($party);
    }

    public function FormatPartyDate(Party $party)
    {
        $date = Carbon::create($party->date);
        $formatedDate = $date->format('d - F - Y');
        $party->date = $formatedDate;
    }
}
