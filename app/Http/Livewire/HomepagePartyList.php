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
    public $perPage = 4;
    public $isFiltered = false;
    public $style;

    public function mount() {
        $this->filter = Party::paginate($this->perPage); 
       
    }
    
    public function render()
    {     
        return view('livewire.homepage-party-list', ['partyList' => $this->filter, 'style' => $this->style]); 
    }
    
    public function filterByStyle($partyStyle)
    {   
        $styleClass = json_decode($partyStyle);
        $styleId = $styleClass->id;
        $this->filter = Party::where('style_id', $styleId)->paginate($this->perPage);
        $this->style = $partyStyle;
        $this->isFiltered = true;
        
    }
    
    public function loadMore () {
        $this->perPage = $this->perPage + 4;
        $this->mount();
        
    }

    public function loadMoreFiltered () {
        $style = $this->style;
        $this->perPage = $this->perPage + 4;
        $this->filterByStyle($style) ;
        
    }

    

}
