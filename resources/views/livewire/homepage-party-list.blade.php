    <div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-around px-5 py-5">
        <div class="bg-gray text-gray-400 rounded-xl shadow-lg overflow-hidden relative flex" style="width:100%;height:736px">
            <div class="bg-black h-full w-full px-5 pt-6 pb-20 overflow-y-auto">
                <div class="mb-3">
                    <h1 class="text-3xl font-bold font-cursive">THIS WEEK</h1>
                    <p class="text-sm text-gray-300 uppercase font-bold font-cursive">THIS WEEK</p>
                </div>
                <div class="grid grid-cols-2 -mx-0.5 overflow-hidden">

                    @if (count($partyList) == 0)  
                    <div class="mb-5 mr-3 mt-5">
                        <a href="https://silencetimer.com/" class="block rounded-lg relative p-2 transform transition-all duration-300 scale-100 hover:scale-95 bg-opacity-2 bg-gray-800" style="background:linear-gradient(rgba(38, 34, 39, 0.5), rgba(38, 34, 39, 0.5)), url(/img/meditationParty.png) center; background-size: cover">
                            <div class="absolute top-0 right-0 -mt-3 mr-3">
                                <div class="rounded-full bg-indigo-500 text-white text-xs py-1 pl-2 pr-3 leading-none"><i class="mdi mdi-fire text-base align-middle"></i> <span class="align-middle">RELAXED</span></div>
                            </div>
                            <div class="h-48"></div>
                            <h2 class="text-white text-2xl font-bold leading-tight mb-3 pr-0"><a href="https://silencetimer.com/" >parece que has encontrado...SILENCIO</a></h2>
                            <div class="flex w-full items-center text-sm text-gray-300 font-medium">
                                
                            </div>
                        </a>
                    
                    </div>    
                    @else

                        @foreach($partyList as $party)
                        @livewire('party-card-homepage', ['party' => $party], key($party->id))
                        @endforeach

                    @endif
                </div>

                <div class="mb-3">
                    <h1 class="text-3xl font-bold font-cursive">THIS MONTH</h1>
                    <p class="text-sm text-gray-500 uppercase font-bold font-cursive">THIS MONTH</p>
                </div>
                <div class="flex -mx-1 mb-5">
                    <div class="w-1/2 px-1">
                        <a href="#" class="block mb-2 p-5 rounded overflow-hidden transform transition-all duration-300 scale-100 hover:scale-95" style="background: url(https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60) center; background-size: cover;">
                            <div class="h-{{24}}"></div>
                            <h3 class="text-lg font-bold text-white leading-tight">DJ Dan Spins The Wheels</h3>
                        </a>
                        <a href="#" class="block mb-2 p-5 rounded overflow-hidden transform transition-all duration-300 scale-100 hover:scale-95" style="background: url(https://images.unsplash.com/photo-1534329539061-64caeb388c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60) center; background-size: cover;">
                            <div class="h-32"></div>
                            <h3 class="text-lg font-bold text-white leading-tight">Top Travels Destinations For 2020</h3>
                        </a>
                    </div>
                    <div class="w-1/2 px-1">
                        <a href="#" class="block mb-2 p-5 rounded overflow-hidden transform transition-all duration-300 scale-100 hover:scale-95" style="background: url(https://images.unsplash.com/photo-1526661934280-676cef25bc9b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60) center; background-size: cover;">
                            <div class="h-32"></div>
                            <h3 class="text-lg font-bold text-white leading-tight">M&S Launches New Makeup Range!</h3>
                        </a>
                        <a href="#" class="block mb-2 p-5 rounded overflow-hidden transform transition-all duration-300 scale-100 hover:scale-95" style="background: url(https://images.unsplash.com/photo-1558365849-6ebd8b0454b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60) center; background-size: cover;">
                            <div class="h-24"></div>
                            <h3 class="text-lg font-bold text-white leading-tight">APT Set To Be A&nbsp;Ripper</h3>
                        </a>
                    </div>
                </div>
                <div class="mb-3">
                    <h1 class="text-3xl font-bold">THIS MONTH</h1>
                </div>
                <div>
                    <a href="#" class="flex w-full transform transition-all duration-300 scale-100 hover:scale-95">
                        <div class="block h-24 w-2/5 rounded overflow-hidden" style="background: url(https://images.unsplash.com/photo-1530549387789-4c1017266635?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60) center; background-size: cover;"></div>
                        <div class="pl-3 w-3/5">
                            <p class="text-xs text-gray-500 uppercase font-semibold">SPORTS</p>
                            <h3 class="text-md font-semibold leading-tight mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                            <div class="flex w-full items-center text-xs text-gray-500 font-medium">
                                <div class="rounded-full w-5 h-5 mr-3" style="background: url(https://randomuser.me/api/portraits/men/41.jpg) center; background-size: cover;"></div>
                                <div>Jack Ryan</div>
                            </div>
                        </div>
                    </a>
                </div>
                <hr class="border-gray-200 my-3">

                <hr class="border-gray-200 my-3">

            </div>
            <div x-data: class="bg-gray-800 absolute bottom-0 w-full border-t border-gray-200 flex">

                <button @if($isFiltered===true) wire:click="loadMoreFiltered()" @else wire:click="loadMore()" @endif class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-indigo-500">
                    <div class="text-center">
                        <span class="block h-8 text-3xl leading-8">

                            <i class="mdi mdi-arrow-down-bold-circle"></i>

                        </span>
                        <span class="block text-xl leading-none">LOAD MORE</span>
                    </div>
                </button>

            </div>
        </div>
    </div>