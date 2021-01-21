@extends('layouts.layout')
     @section('content')   
        <main>
            <div class="venue_name_section">
                <h1>{{ $user->organization }}</h1>
            </div>
            <div class="venue_img_section">
                <img id="venue_img" src="{{ $user->img }}" alt="Image">
            </div>
            
            <div class="container">
                <div class="description">
                    <p>{{ $user->description }}</p>
                </div>

                <div class="data">
                    <div class="address">
                        <i class="fas fa-map-marked-alt fa-2x"></i>
                        <span>{{ $user->address }}</span>
                    </div>
                    <div class="opening_time">
                        <i class="fas fa-clock fa-2x"></i>
                        <span>{{ $user->openingTimes }}</span>
                    </div>
                </div>

                <div class="hype">
                    <h1>Hype me!</h1>
                </div>

                <div class="rating">
                    <i class="fas fa-glass-martini fa-3x"></i>
                    <i class="fas fa-glass-martini fa-3x"></i>
                    <i class="fas fa-glass-martini fa-3x"></i>
                    <i class="fas fa-glass-martini fa-3x"></i>
                    <i class="fas fa-glass-martini fa-3x"></i>
                </div>
            </div>

        </main>
     @endsection   
        
          


