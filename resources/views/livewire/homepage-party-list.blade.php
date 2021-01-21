<div class="flex flex-wrap -mx-0.5 overflow-hidden">

    @foreach($partyList as $party)
       
       
       @livewire('party-card-homepage', ['party' => $party], key($party->id))
       

    @endforeach
   
</div>
