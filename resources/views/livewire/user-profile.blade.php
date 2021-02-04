<div>
    <div class="rounded-lg mb-3">

        <div class="flex">
            @if ($user->img == null)
            <img class="w-1/2" src="/images/default-image.png" alt="">
            @else
            <img class="w-1/2" src="/user-images/{{ $user->img }}" alt="">
            @endif

            <div class=" ml-4 mt-3">
                <h2 class="font-bold text-center uppercase text-l xl:text-3xl text-xl mt-3 ">{{$user->name}}</h2>
                @if ($user->img != null)
                <button wire:click="deleteImg({{ $user }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete Photo</button>
                @else

                <label for="img" class="text-sm block font-medium text-gray-700">Upload Image</label>
                <input type="file" wire:model="img" name="img" id="img" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 accept=" image/png, image/jpeg">
                @error('img') <span class="error">{{ $message }}</span> @enderror

                <button wire:click="storeImg({{ $user }})" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Edit Photo
                </button>
                @endif
            </div>
        </div>


    </div>

    <h3>Parties that you are following</h3>
    @foreach($parties as $party)
    @livewire('party-card-homepage', ['party' => $party], key($party->id))
    @endforeachº
</div>