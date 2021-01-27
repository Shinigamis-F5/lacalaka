<div class="rating">
    @if ($hype == true)
        <div x-data="{open: @entangle('hype')}">
            <div x-show="open" @click="open = false">
                <button type="button" wire:click='addVote({{$user->id}}, 1)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button type="button" wire:click='addVote({{$user->id}}, 2)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button type="button" wire:click='addVote({{$user->id}}, 3)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button type="button" wire:click='addVote({{$user->id}}, 4)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button type="button" wire:click='addVote({{$user->id}}, 5)'><i class="fas fa-glass-martini fa-3x"></i></button>
            </div>
        </div>
    @else
        <div>
            <h2>Thanks for voting!!!God pay you with lot of beers</h2>
        </div>
    @endif

</div>
