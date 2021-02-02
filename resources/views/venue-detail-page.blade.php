@extends('layouts.layout')
     @section('content')   
        <main>
            <div class="venue_name_section bg-gray-800">
                <h1>{{ $user->organization }}</h1>
            </div>
            <div class="venue_img_section">
                <img id="venue_img" src="{{ $user->img }}" alt="Image">
            </div>
            
            <div class="container bg-gray-800 text-white">
                <div class="bg-black pb-1 rounded-lg">
                    <div class="description text-gray-400 font-bold pt-5 px-4">
                        <p>{{ $user->description }}</p>
                    </div>

                    <div class="data p-5">
                        <div class="address flex flex-col justify-content-center ">
                            <div><i class="fas fa-map-marked-alt fa-2x w-full "></i></div>
                            <span>{{ $user->address }}</span>
                        </div>
                        <div class="opening_time">
                            <i class="fas fa-clock fa-2x w-full"></i>
                            <span>{{ $user->openingTimes }}</span>
                        </div>
                    </div>
                    <div class="bg-gray-500">
                            <div class="hype my-2">
                                <h1>Hype me!</h1>
                            </div>
                        
                        @livewire('rate.rating', ['user' => $user])
                    </div>
                </div>
            </div>

        </main>
     @endsection   
        
          


