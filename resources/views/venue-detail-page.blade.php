@extends('layouts.layout')
     @section('content')
        <section class="bg-gray-700" >
            <div class="container  text-white">
                <div class="venue_name_section bg-gray-800 rounded-t-lg">
                    <h1>{{ $user->organization }}</h1>
                </div><hr>
                <div class="venue_img_section">
                    <img id="venue_img" src="/storage/venue-image/{{ $user->img }}" alt="Image">
                </div><hr>
                <div class="bg-black">
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
                    </div>
                    <div class="bg-gray-800 rounded-b-lg shadow-lg pb-0.5">
                        <hr>
                            <div class="hype my-3 hover:text-red-600">
                                <h1>Hype me!</h1>
                            </div>        
                            @livewire('rate.rating', ['user' => $user])
                    </div>
                
            </div>
        </section>
     @endsection   
        
          


