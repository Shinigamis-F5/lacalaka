<div>

    <div class="@if(count($followers) === 0) hidden @else flex flex-wrap overflow-x-auto p-3 @endif">
        @foreach($followers as $follower)
        @if($loop->first)
        <div class="w-10 h-10 md:w-14 md:h-14 bg-center rounded-full">
            
            <img src="/storage/venue-image/{{$follower->img}}" class="w-full h-full rounded-full object-cover @if($isFollowing === false) hidden @endif" />
        </div>
        @else
        <div class="w-10 h-10 md:w-14 md:h-14 bg-cover rounded-full border-2 border-solid border-rojo-dark -ml-2 md:ml-2 mb-2">
            <img src="/storage/venue-image/{{$follower->img}}" class="w-full h-full rounded-full object-cover @if($isFollowing === false) hidden @endif" />
        </div>
        @endif
        @endforeach
        <button wire:click="showMoreFollowers()" class="w-10 h-10 md:w-14 md:h-14 bg-black rounded-full border-2 border-solid border-rojo-dark -ml-2" aria-haspopup="true" aria-expanded="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#ec5742">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </button>
        <p class="ml-2 self-center text-red text-white">See who is going to the party</p>
    </div>


    <div class="flex items-center xl:mt-0 mt-4 mb-5">
        <button @if($isFollowing===true) wire:click="unFollow()" @else wire:click="follow()" @endif class="bg-rojo text-l md:text-2xl text-white ml-3 px-4 py-2 rounded items-center">
             {{$buttonTitle}}
        </button>

    </div>
</div>