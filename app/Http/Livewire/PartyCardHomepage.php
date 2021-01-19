<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PartyCardHomepage extends Component
{
    public $party = [

        "id" => "1",
        "title" => "SoccaParty",
        "img" => "https://picsum.photos/200/300",
    ];

    public function render()
    {
        return view('livewire.party-card-homepage');
    }
}
