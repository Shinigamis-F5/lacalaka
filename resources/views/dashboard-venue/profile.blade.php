<x-app-layout>
    <x-slot name="header">
        <div id="cab-dashboard">
            <h2 class="font-semibold text-xl text-gray-300 leading-tight font-cursive">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('venue.index') }}" class="bg-rojo-light rounded-md p-2 inline-flex items-center justify-center text-gray-300 hover:text-white hover:bg-rojo focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rojo font-cursive" >Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @livewire('venue-profile')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
