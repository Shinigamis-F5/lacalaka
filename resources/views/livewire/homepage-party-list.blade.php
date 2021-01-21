<div>

    @foreach($partyList as $party)
       
       <div>
       @livewire('party-card-homepage', ['party' => $party], key($party->id))
       </div> 

    @endforeach
   
</div>
