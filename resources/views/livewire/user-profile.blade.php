<div class="rounded-lg mb-3">

    <section class="flex">
        <div class="w-40 h-40 md:w-80 md:h-80 bg-gray-900 p-2 rounded-lg">
            @if ($user->img == null)
            <p class="text-gray-300 ">You have no Profile Image</p>
            @else
            <img class="w-full h-full object-cover" src="/storage/venue-image/{{ $user->img }}" alt="">
            @endif
        </div>

        <div class=" ml-4 mt-3">
            <h2 class="font-bold uppercase text-xl xl:text-3xl text-xl mb-8 text-gray-50">{{$user->name}}</h2>

            @if ($user->img != null)
            <div class="flex-col">
                <button wire:click="deleteImg({{ $user }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-dark hover:bg-rojo-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete Photo</button>
                @else

                <label for="img" class=" block text-sm font-medium text-gray-50">Upload Image</label>
                <input type="file" wire:model="img" name="img" id="img" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-dark hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 accept=" image/png, image/jpeg">
                @error('img') <span class="error">{{ $message }}</span> @enderror

                <button wire:click="storeImg({{ $user }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-dark hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save Photo</button>

            </div>
            @endif
        </div>
    </section>

    <div x-data="{ open: false }" class="pt-10">
        <button @click="open = true" wire:click="edit({{ $user }})" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-dark hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit Profile</button>
        <div x-show="open" @click.away="open = false" class="pt-10 grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-3">
                <label for="address" class="block text-sm font-medium text-gray-50">Address</label>
                <input type="text" wire:model="address" name="address" id="address" value="{{ $user->address }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="city" class="block text-sm font-medium text-gray-50">City</label>
                <input type="text" wire:model="city" name="city" id="city" value="{{ $user->city }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="phone" class="block text-sm font-medium text-gray-50">Phone</label>
                <input type="text" wire:model="phone" name="phone" id="phone" value="{{ $user->phone }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <button @click="open=false" wire:click="upload({{ $user }})" class="p-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-rojo-dark hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>

        </div>

    </div>

    <section class="pt-10">

        <h3 class="font-bold uppercase text-xl xl:text-3xl text-xl mb-8 text-gray-50">
            Parties that you are following
        </h3>
        @foreach($parties as $party)
        @livewire('party-card-homepage', ['party' => $party], key($party->id))
        @endforeach
    </section>

</div>