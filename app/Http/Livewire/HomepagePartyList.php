<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Party;
use Livewire\WithPagination;

class HomepagePartyList extends Component
{
    
    use WithPagination;

    protected $listeners = ['filterByStyle' => 'filterByStyle', 'loadMore' => 'loadMore'];
    private $filter;
    public $perPage = 2;
    // public $isFiltered = false;
    // private $style;

    public function mount() {
        $this->filter = Party::paginate($this->perPage);
        //$this->filter = Party::paginate(4);   
    }
    
    public function render()
    {     
        return view('livewire.homepage-party-list', ['partyList' => $this->filter]); 
    }

    public function filterByStyle($partyStyle)
    {
        $this->filter = Party::where('style', $partyStyle)->paginate($this->perPage);
        $this->style = $partyStyle;
        $this->isFiltered = true;
    }

    public function loadMore () {
        $this->perPage = $this->perPage + 2;
        // if($this->isFiltered){
        //     $this->filterByStyle($this->style);
        // }
        $this->mount();
        
    }
    

}
