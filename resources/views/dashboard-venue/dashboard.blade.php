<x-app-layout>
    <x-slot name="header">
        <div id="cab-dashboard">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight font-cursive">
                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </h2>
            <a href="{{ route('venue.show', auth()->user()) }}" class="bg-rojo-light rounded-md p-2 inline-flex items-center justify-center text-white hover:text-rojo-light hover:bg-rojo focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red" >Profile</a>
        </div>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Your are in Venue Dash!!
                </div>
            </div>
        </div>
    </div>
    
    @livewire('parties-list-venue.venue-dash', ['parties' => $parties])
    
</x-app-layout>
