<div>
    <h1 class="mb-3"><strong>Profile</strong><hr></h1>

    <div class="flex flex-wrap item-center">
        <div class="mb-4 sm:pr-4 sm:w-1/3">
            <img src="{{ $venue->img}}" alt="">
        </div>
        <div class="w-2/3">
            <ul>
                <li><strong>Name:</strong> {{ $venue->name}}</li>
                <li class="mb-4"><strong>email:</strong> {{ $venue->email}}</li>
                <li><strong>Organization:</strong> {{ $venue->organization}}</li>
                <li><strong>Address:</strong> {{ $venue->address}}</li>
                <li><strong>Opening Time:</strong> {{ $venue->openingTimes}}</li>
                <li  class="mb-4"><strong>City:</strong> {{ $venue->city}}</li>
                <li class="mb-4"><strong>Description:</strong> {{ $venue->description}}</li>
                <li><strong>Phone:</strong> {{ $venue->phone}}</li>
            </ul>
        </div>
    </div>

    <div class="mt-4 text-center">
        <span class="">Current RATING .... {{ $rate }}%</span>
        <div class="mt-4">
            @php
                $count = 5;
            @endphp

            @if ($yellowCups > 0)
                @for ($i = 0; $i < $yellowCups; $i++)
                    <i class="fas fa-glass-martini fa-3x text-yellow-200"></i>
                    @php
                    $count-- 
                    @endphp
                @endfor    
            @endif

            @for ($i = 0; $i < $count; $i++)
                <i class="fas fa-glass-martini fa-3x"></i>
            @endfor
        </div>
    </div>

</div>
