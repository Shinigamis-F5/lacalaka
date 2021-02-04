<x-app-layout>
    <x-slot name="header">
        <div id="cab-dashboard">
            <h2 class="font-semibold text-xl text-gray-300 leading-tight font-cursive">
                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </h2>
            <a href="{{ route('user.show', auth()->user()) }}" class="bg-rojo-light rounded-md p-2 inline-flex items-center justify-center text-white hover:text-rojo-light hover:bg-rojo focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red font-cursive" >Profile</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b border-gray-200 font-cursive">
                    Your are in Dash!!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

