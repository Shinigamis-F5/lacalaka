<div>
    <img>
    <h1>Fiestas a la Carta</h1>
    <h3>La Calaka</h3>
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
                <div x-data="{ showPartyStyles: false }">
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
