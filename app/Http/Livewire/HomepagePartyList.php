<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Party;

class HomepagePartyList extends Component
{
    public $partyList;
 
    public function mount() {

        $this->partyList = Party::all();
    }

    public function render()
    {   
        $partyList = $this->partyList;
        return view('livewire.homepage-party-list', ['partyList'=>$partyList]); 
    }

    

    // public function mount() {
    //     $this->partyList = [
    //         [
    //         "id" => 1,
    //         "title" => "Que no cumbia el panico",
    //         "img" => "https://picsum.photos/200/300",
    //         ],
    //         [    
    //         "id" => 2,
    //         "title" => "Que no cumbia el panico",
    //         "img" => "https://picsum.photos/200/300",
    //         ],
    //         [   
    //         "id" => 3,
    //         "title" => "Que no cumbia el panico",
    //         "img" => "https://picsum.photos/200/300",
    //         ],
    //         [   
    //         "id" => 4,
    //         "title" => "Que no cumbia el panico",
    //         "img" => "https://picsum.photos/200/300",
    //         ],   
    //     ];
    //}

}
