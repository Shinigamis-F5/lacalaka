<div class="visitor-party-details md:w-3/5 md:mx-auto pb-2 bg-gray-900 ">
    <div>
        <div class=" md:container md:md py-5 bg-pink-500">
            <h2 class="font-bold text-center uppercase text-l xl:text-3xl text-xl text-gray-50">{{$party->title}}</h2>
        </div>


        <div class="w-full h-48 md:h-56 b-clip-content">
            <img src="{{$party->cover}}" class="w-full h-full object-cover" />
        </div>
        <div class="max-w-md md:mx-auto">
            <section>
                <p class="text-sm leading-7 mt-5 text-gray-50">{{$party->description}}</p>
                <div class="flex pt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="#f41f7b">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="text-white text-lg md:text-xl pl-3">{{$party->location}}</p>
                </div>
            </section>
            <section class="flex justify-between md:justify-evenly pt-5 mb-4">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-white text-lg md:text-xl pr-3">{{$party->date}}</p>
                </div>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-white text-lg md:text-xl pl-3">{{$party->time}}</p>
                </div>
            </section>

            <section class="md:flex items-center justify-between mb-5">
                <div class="w-full">
                    @livewire('party-followers', ['id' => $party->id])
                </div>
            </section>
            

        </div>
    </div>
</div>