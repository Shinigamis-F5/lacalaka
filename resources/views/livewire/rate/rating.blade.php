<div class="rating">
    @if ($hype == true)
        <div x-data="{open: @entangle('hype')}">
            <div x-show="open" @click="open = false">
                <button class="hover:text-red-500" type="button" wire:click='addVote({{$user->id}}, 1)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button class="hover:text-red-600"type="button" wire:click='addVote({{$user->id}}, 2)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button class="hover:text-red-700"type="button" wire:click='addVote({{$user->id}}, 3)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button class="hover:text-red-800" type="button" wire:click='addVote({{$user->id}}, 4)'><i class="fas fa-glass-martini fa-3x"></i></button>
                <button class="hover:text-red-900" type="button" wire:click='addVote({{$user->id}}, 5)'><i class="fas fa-glass-martini fa-3x"></i></button>
            </div>
        </div>
    @else
        <div>
            <h2>Thanks for voting!!!God pay you with lot of beers</h2>
        </div>
    @endif

</div>
