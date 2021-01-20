<div class="flex bg-gradient-to-b from-red-500 p-2 mb-4">
    
    <img src="https://images.vexels.com/media/users/3/184839/isolated/lists/075c413496f834ab41b55c283434f614-calavera-mexicana-calavera-plana.png" class="w-10 h-10 mr-5">
   
    <h1 class="font-bold font-cursive text-3xl text-red-900 mx-3">Fiestas a la Carta</h1>
    <h3 class="mx-3">La Calaka</h3>
    <navbar>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
                <div x-data="{ showPartyStyles: false }" class="">
                    <button @click="showPartyStyles = true"> Filter By Styles</button>
                    <ol id="dropdownPartyStyles" x-show="showPartyStyles" @click.away="showPartyStyles = false">
                        @foreach($partyStyles as $partyStyle)
                        <li>{{$partyStyle}}</li>
                        @endforeach
                    </ol>
                </div>
        @endif
    </navbar>
</div>

