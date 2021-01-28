<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Party;
use Livewire\WithPagination;

class HomepagePartyList extends Component
{
    // public $partyList;
    use WithPagination;

    protected $listeners = ['filterByStyle' => 'filterByStyle'];
    private $filter;

    public function mount() {
        $this->filter = Party::paginate(2);
    }
    
    public function render()
    {   
        // $this->partyList = Party::all();
        
        $partyList = Party::paginate(4);
        
        return view('livewire.homepage-party-list', ['partyList' => $this->filter]); 
    }

    public function filterByStyle($partyStyle)
    {
        $this->filter = Party::where('style', $partyStyle)->paginate(2);
    }

    

    public function alternateSizes () {
        
    }

    

}
