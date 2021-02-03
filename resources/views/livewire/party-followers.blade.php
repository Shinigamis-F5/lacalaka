<div>

    <div class="flex flex-wrap overflow-x-auto p-3">
        @foreach($followers as $follower)
        @if($loop->first)
        <div class="w-10 h-10 md:w-14 md:h-14 bg-center rounded-full">
            <img src="{{$follower->img}}" class="w-full h-full rounded-full object-cover" />
        </div>
        @else
        <div class="w-10 h-10 md:w-14 md:h-14 bg-cover rounded-full border-2 border-solid border-pink-500 -ml-2 md:ml-2 mb-2">
            <img src="{{$follower->img}}" class="w-full h-full rounded-full object-cover" />
        </div>
        @endif
        @endforeach
        <button wire:click="showMoreFollowers()" class="w-10 h-10 md:w-14 md:h-14 bg-black rounded-full border-2 border-solid border-pink-500 -ml-2" aria-haspopup="true" aria-expanded="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#f41f7b">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </button>
    </div>


    <div class="flex items-center xl:mt-0 mt-4 mb-5">
        <button wire:click="follow()" class="bg-pink-500 text-l md:text-2xl text-white ml-3 px-4 py-2 rounded items-center">
            Follow
        </button>
    </div>
</div>