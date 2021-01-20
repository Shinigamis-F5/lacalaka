<header class="bg-gradient-to-b from-red-500 p-2 mb-4">


    <div class="flex">
        <img src="https://images.vexels.com/media/users/3/184839/isolated/lists/075c413496f834ab41b55c283434f614-calavera-mexicana-calavera-plana.png" class="w-10 h-10 mr-5">

        <h1 class="font-bold font-cursive text-3xl text-red-900 mx-3">Fiestas a la Carta</h1>
        <h3 class="mx-3">La Calaka</h3>
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
        <div x-data="{ showPartyStyles: false }" class="">
            <button @click="showPartyStyles = true"> Filter By Styles</button>
            <ol id="dropdownPartyStyles" x-show="showPartyStyles" @click.away="showPartyStyles = false">
                @foreach($partyStyles as $partyStyle)
                <li>{{$partyStyle}}</li>
                @endforeach
            </ol>
        </div>
    </navbar>
</header>