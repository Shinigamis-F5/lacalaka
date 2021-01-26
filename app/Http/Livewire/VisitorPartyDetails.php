<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VisitorPartyDetails extends Component
{
    public $party;
    public function render()
    {
        return view('livewire.visitor-party-details', ['party' => $this->party]);
    }
}
