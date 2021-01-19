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


        {{-- 
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address(),
            'openingTimes' => $this->faker->sentence(4),
            'img' => $this->faker->imageUrl(640, 480),
            'organization' => $this->faker->sentence(5),
            'city' => $this->faker->city(),
            'description' => $this->faker->paragraph(3),
            'phone' => $this->faker->phoneNumber,    
        --}}
    </div>

</div>
