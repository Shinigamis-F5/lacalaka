<header class="bg-gradient-to-b from-red-500 p-2 mb-4">


    <div class="flex items-center mb-5">
        <a href="{{route('home')}}">
            <img src="https://images.vexels.com/media/users/3/184839/isolated/lists/075c413496f834ab41b55c283434f614-calavera-mexicana-calavera-plana.png" class="w-10 h-10 mr-5">
        </a>
        <h1 class="font-bold font-cursive text-lg md:text-xl lg:text-3xl text-red-900 mx-3">Fiestas a la Carta</h1>
        <h3 class="mx-3 text-sm md:text-base lg:text-lg">La Calaka</h3>
    </div>
    <navbar class="flex justify-between">

        @if (Route::has('login'))
        <div class="sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div x-data="{ showPartyStyles: false }" class="relative">
            <button @click="showPartyStyles = true" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-1 py-0 md:px-2 md:py-1 lg:px-4 lg:py-2 bg-#6F2232 text-sm text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true""> Filter By Styles</button>
            <ol class=" origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10" id=" dropdownPartyStyles" x-show="showPartyStyles" @click.away="showPartyStyles = false">
                @foreach($partyStyles as $partyStyle)
                <li class="text-center">{{$partyStyle}}</li>
                @endforeach
                </ol>
        </div>
    </navbar>
</header>