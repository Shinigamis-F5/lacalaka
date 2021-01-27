<div class="container py-16">
    <div>
        <div class="md:container md:sm py-5">
            <div class="">
                <h2 class="font-bold text-center uppercase text-l xl:text-3xl text-xl text-gray-500">{{$party->title}}</h2>
            </div>
        </div>

        <div class="w-screen h-48  overflow-hidden">
            <img src="{{$party->cover}}" class="w-full h-full object-cover" />
        </div>
        <div class="max-w-md md:mx-auto">
            <section>
                <p class="p-2 text-sm leading-7 mt-5 text-gray-50">{{$party->description}}</p>
            </section>
            <section class="p-2 flex justify-between md:justify-evenly pt-5 mb-4">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-white text-lg md:text-3xl pr-3">{{$party->date}}</p>
                </div>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="34" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-white text-lg md:text-2xl pl-3">{{$party->time}}</p>
                </div>
            </section>

            <section class="md:flex items-center justify-between mb-5">
                <div>
                    @livewire('party-followers')
                </div>
            </section>
            <div class="flex items-center xl:mt-0 mt-4 mb-5">
                <button class="bg-pink-500 text-l md:text-2xl text-white ml-3 px-4 py-2 rounded items-center">
                    Follow
                </button>
            </div>

        </div>
    </div>
</div>