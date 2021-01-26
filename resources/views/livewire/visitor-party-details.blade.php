<div>
    <div>
        <div class="xl:flex items-start py-5">
            <div class="">
                <h2 class="font-bold text-center uppercase text-l xl:text-3xl text-xl text-gray-500">{{$party->title}}</h2>
            </div>
        </div>

        <div class="w-full h-48  overflow-hidden">
            <img src="{{$party->cover}}" class="w-full h-full object-cover" />
        </div>
        <section>
            <p class="p-2 text-sm leading-7 mt-5 text-gray-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et quidem faciunt, ut de voluptate ponit, quod summum bonum sit aut rerum et quidem, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et quidem faciunt, ut de voluptate ponit, quod summum bonum sit aut.</p>
        </section>
        <section class="p-2 flex justify-between pt-5">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-white text-sm font-normal pr-3">{{$party->date}}</p>
            </div>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="24" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-white text-sm font-normal pl-3">{{$party->time}}</p>
            </div>
        </section>

        <div class="md:flex items-center justify-between">
            <div>
                <div class="flex items-center flex-no-wrap">
                    <div class="w-8 h-8 bg-cover bg-center rounded-full">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white bg-center -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white bg-center -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <img src="https://i.pravatar.cc/200" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div class="w-8 h-8 bg-cover rounded-full border-1 border-white -ml-2">
                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M9.99967 4.16666V15.8333" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16699 10H15.8337" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center xl:mt-0 mt-4 mb-5">
                <button class="bg-pink-500 text-sm text-white ml-3 px-4 py-2 flex items-center">
                    Follow
                </button>
            </div>
        </div>
    </div>
</div>