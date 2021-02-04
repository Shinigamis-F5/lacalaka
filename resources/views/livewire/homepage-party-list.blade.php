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
                                <div class="rounded-full bg-red text-white text-xs py-1 pl-2 pr-3 leading-none"><i class="mdi mdi-fire text-base align-middle"></i> <span class="align-middle">RELAXED</span></div>
                            </div>
                            <div class="h-48"></div>
                            <h2 class="text-white text-2xl font-bold leading-tight mb-3 pr-0">it seems you found...SILENCE</h2>
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

            </div>
            <div x-data: class="bg-gray-800 absolute bottom-0 w-full border-t border-gray-200 flex">

                <button @if($isFiltered===true) wire:click="loadMoreFiltered()" @else wire:click="loadMore()" @endif class="flex flex-grow items-center justify-center p-2 text-gray-500 hover:text-red-dark">
                    <div class="text-center">
                        <span class="block h-8 text-3xl leading-8">

                            <i class="mdi mdi-guitar-pick"></i>

                        </span>
                        <span class="block text-xl leading-none font-cursive">LOAD MORE</span>
                    </div>
                </button>

            </div>
        </div>
    </div>