<div class="mb-5 mr-3 mt-5">
    <a href="{{ route('party.details', $party->id) }}" class="block rounded-lg relative p-2 transform transition-all duration-300 scale-100 hover:scale-95 bg-opacity-2 bg-gray-800" style="background:linear-gradient(rgba(38, 34, 39, 0.5), rgba(38, 34, 39, 0.5)), url(/photo-parties/{{$party->cover}}) center; background-size: cover">
        <div class="absolute top-0 right-0 -mt-3 mr-3">
            <div class="rounded-full bg-red text-white text-xs py-1 pl-2 pr-3 leading-none"><i class="mdi mdi-skull text-base align-middle"></i> <span class="align-middle">FRESH</span></div>
        </div>
        <div class="h-48"></div>
        <h2 class="text-white text-2xl font-bold leading-tight mb-3 pr-0">{{$party->title}}</h2>
        <div class="flex w-full items-center text-sm text-gray-300 font-medium">
            <div class="flex-1 flex items-center">
                <div class="rounded-full w-8 h-8 mr-3" style="background: url(https://randomuser.me/api/portraits/women/74.jpg) center; background-size: cover;"></div>
            </div>
            <div><i class="mdi mdi-guitar-electric"></i> 18</div>
            
        </div>
    </a>

</div>