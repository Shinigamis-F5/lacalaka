<div >
    <div class="flex rounded-lg justify-between mb-3">
        @if ($user->img == null)
        <img class="w-1/2" src="/images/default-image.png" alt="">
        @else
        <img src="/user-image/{{ $user->img }}" alt="photo of {{$user->name}}">
        @endif
        <h2>{{$user->name}}</h2>
    </div>

    <h3>Parties that you are following</h3>
    @foreach($parties as $party)
    @livewire('party-card-homepage', ['party' => $party], key($party->id))
    @endforeach
</div>