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
    public $isFiltered = false;
    public $style;

    public function mount() {
        $this->filter = Party::paginate($this->perPage);
        //$this->filter = Party::paginate(4);   
    }
    
    public function render()
    {     
        return view('livewire.homepage-party-list', ['partyList' => $this->filter, 'style' => $this->style]); 
    }
    
    public function filterByStyle($partyStyle)
    {
        $partyStyle = json_decode($partyStyle);
        $styleId = $partyStyle->id;
        //  $findStyle = Style::find()
        $this->filter = Party::where('style_id', $styleId)->paginate($this->perPage);
        $this->style = $partyStyle->style;
        $this->isFiltered = true;

    }
    
    public function loadMore () {
        $this->perPage = $this->perPage + 2;
        $this->mount();
        
    }

    public function loadMoreFiltered () {
        $style = $this->style;
        $this->perPage = $this->perPage + 2;

        $this->filterByStyle($style) ;
        
    }

    

}
