<x-app-layout>
    <x-slot name="header">
        <div id="cab-dashboard">
            <h2 class="font-semibold text-xl text-gray-300 leading-tight font-cursive">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('home') }}" class="bg-blue-200 rounded-md p-2 inline-flex items-center justify-center text-gray-300 hover:text-gray-100 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 font-cursive">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-900 mt-10">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    @livewire('user-profile', ['user' => $user])
                </div>
            </div>
        </div>
    </div>




</x-app-layout>