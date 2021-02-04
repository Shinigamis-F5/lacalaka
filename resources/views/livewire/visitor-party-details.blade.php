<div class="visitor-party-details md:w-3/5 md:mx-auto pb-2 bg-gray-900">
    <div>
        <div class=" md:container md:md py-5 @if(!$party->is_active) bg-gray-300 @else bg-rojo-dark @endif">
            <h2 class="font-bold text-center uppercase text-l xl:text-3xl text-xl text-gray-50">{{$party->title}}</h2>
        </div>
        <div class="w-full h-48 md:h-56 b-clip-content relative">
            @if(!$party->is_active)
            <div class="absolute top-0 opacity-75 w-full z-50 h-full md:h-56 bg-rojo-dark ">
                <h2 class=" font-bold text-center text-xl uppercase py-12 text-white p-3">This Party has been Cancelled! <br> Sorry :-( </h2>
            </div>
            @else
                <div class="w-full h-48 md:h-56 b-clip-content">
                    <img src="/storage/photos-parties/{{ $party->cover }}" class="w-full h-full object-cover" />
                </div>
            @endif
        </div>

        <div class="max-w-md md:mx-auto p-4">
            <section class="flex justify-between mb-10">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="#f36e57">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-white text-lg md:text-xl pl-2">{{$party->date}}</p>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="#f36e57">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-white text-lg md:text-xl pl-2">{{$party->time}}</p>
                </div>
            </section>
            <section class="mb-16">
                <p class="text-base md:text-lg leading-7 mt-5 mb-2 text-gray-50 text-justify">{{$party->description}}</p>
                <div class="flex justify-between pt-3">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="#f36e57">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-white text-lg md:text-xl pl-1">{{$party->location}}</p>

                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="#ec5742">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <p class="text-white text-lg md:text-xl pl-1"><a href="{{route('user.profile', $venue)}}">{{$venue->name}}</a></p>

                    </div>
                </div>
            </section>

            @if($party->is_active)
            <section class="md:flex items-center justify-between mb-5">
                <div class="w-full">
                    @livewire('party-followers', ['id' => $party->id])
                </div>
            </section>
            @endif


        </div>
    </div>
</div>