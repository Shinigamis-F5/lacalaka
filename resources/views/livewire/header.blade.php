
<header class="bg-gray-900 p-3 grid-rows-2">

    <div class="bg-contain" style="background: url(/img/partyLights.png)">

        <div class="flex justify-around items-center mb-5">

            <a href="{{route('home')}}">
                <img src="/img/LaCalakaLogo2.png" class="w-20 h-20 mr-2 transform transition-all duration-300 scale-100 hover:scale-90">
            </a>

            <h1 id="fiestasTitle" class="uppercase tracking-wide font-bold font-cursive text-center text-4xl md:text-6xl lg:text-8xl text-gray-500 shadow-2xl mx-3 justify-self-center">La Calaka</h1>

            <a href="{{route('home')}}">
                <img src="/img/LaCalakaLogo2.png" class="w-20 h-20 mr-2 transform transition-all duration-300 scale-100 hover:scale-90">
            </a>
           
        
        </div>
    </div>
    
    <nav class="flex justify-between">

        @if (Route::has('login'))
        <div class="sm:block">
            @auth
            @if (auth()->user()->role == "venue")
            <a href="{{ url('/venue') }}" class="text-base text-gray-200 font-cursive hover:text-indigo-500"><i class="mdi mdi-skull "></i>Dashboard</a>
            @else
            <a href="{{ url('/dashboard') }}" class="text-base text-gray-200 font-cursive hover:text-indigo-500"><i class="mdi mdi-skull"></i>Dashboard</a>
            @endif
            @else
            <div class="flex-row">
            <a href="{{ route('login') }}" class="text-lg md:text-xl text-gray-200 font-cursive hover:text-indigo-500"><i class="mdi mdi-skull"></i>
                Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-lg md:text-xl  font-cursive text-gray-200 hover:text-indigo-500"><i class="mdi mdi-sunglasses"></i>
                Register</a>
            </div>
            @endif
            @endauth
        </div>
        @endif

        <h3 id="fiestasSubtitle"class="relative mx-3 text-large font-bold md:block md:text-4xl lg:text-5xl text-gray-800 font-cursive"><i class="mdi mdi-skull"></i>Fiestas a la Carta<i class="mdi mdi-skull"></i></h3>

        <div x-data="{ showPartyStyles: false }" class="relative">
            <button @click="showPartyStyles = true" class="inline-flex justify-center rounded-md border border-gray-600 shadow-sm px-1 py-0 md:px-2 md:py-1 lg:px-4 lg:py-2 bg-#6F2232 text-sm text-gray-200 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-500 focus:ring-indigo-500 font-cursive" id="options-menu" aria-haspopup="true" aria-expanded="true""> Filter By Styles</button>
            <ol class=" origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-gray-400 ring-1 ring-black ring-opacity-5 z-10" id=" dropdownPartyStyles" x-show="showPartyStyles" @click.away="showPartyStyles = false">
                @foreach($partyStyles as $partyStyle)
                <li class="text-center">
                <button wire:click="filterByStyle('{{$partyStyle}}')">
                {{$partyStyle->style}}
                </button>
                </li>
                @endforeach
                </ol>
        </div>
    </nav>
</header>