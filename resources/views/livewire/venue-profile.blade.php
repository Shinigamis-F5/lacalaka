<div>
    <div x-data="{open: false}" class="mb-3">

        <div class="flex justify-between mb-3">
            <h1 class="mb-3"><strong>Profile</strong></h1>
            <button @click="open=true" wire:click="edit({{ $venue }})" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit Profile</button>
        </div>

        <div x-show="open" @click.away="open = false" class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="organization" class="block text-sm font-medium text-gray-700">Organization</label>
                <input type="text" wire:model="organization" name="organization" id="organization" value="{{ $venue->organization }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" wire:model="address" name="address" id="address" value="{{ $venue->address }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" wire:model="city" name="city" id="city" value="{{ $venue->city }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea type="text" wire:model="description" name="description" id="description" value="{{ $venue->description }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" wire:model="phone" name="phone" id="phone" value="{{ $venue->phone }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="Opening Time" class="block text-sm font-medium text-gray-700">Opening Time</label>
                <input type="time" wire:model="openingTimes" name="openingTimes" id="openingTimes" value="{{ $venue->openingTimes }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <button @click="open=false" wire:click="upload({{ $venue }})" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Upload Profile</button>
            
        </div>
    </div>
    <hr>
    <div class="flex flex-wrap item-center mt-3">
        <div class="mb-4 sm:pr-4 sm:w-1/3">
            @if ($venue->img == null)
                <img src="/images/default-image.png" alt="">                
            @else
                <img src="/venue-image/{{ $venue->img }}" alt="">
            @endif
            

            @if ($venue->img != null)
                <button wire:click="deleteImg({{ $venue }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete Photo</button>
            @else

                <label for="img" class="text-sm font-medium text-gray-700">Upload Image</label>
                <input type="file" wire:model="img" name="img" id="img" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 accept="image/png, image/jpeg">
                @error('img') <span class="error">{{ $message }}</span> @enderror

                <button wire:click="storeImg({{ $venue }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit Photo</button>
            @endif
              
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
