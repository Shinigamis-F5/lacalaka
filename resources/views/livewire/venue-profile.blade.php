<div>
    <h1 class="mb-3"><strong>Profile</strong><hr></h1>

    <div class="flex flex-wrap item-center">
        <div class="mb-4 md:mr-4 w-2/5">
            <img src="{{ $venue->img}}" alt="">
        </div>
        <ul class="md:w-2/5">
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
