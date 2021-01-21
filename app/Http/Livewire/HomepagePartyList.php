<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomepagePartyList extends Component
{
    public $partyList = "mecguenlasmuelasdeltailwind";

    public function render()
    {   
        return view('livewire.homepage-party-list'); //put partylist into the argument
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
