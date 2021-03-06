<div class="my-10">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    
    <div class="md:mt-0 md:col-span-4">

      <h1>Add Party</h1>
      
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" wire:model="title"  name="title" id="title" class="mt-1 focus:ring-rojo-light focus:border-rojo-light block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="cover" class="block text-sm font-medium text-gray-700">Cover</label>
                  <input type="file" wire:model="cover" name="cover" id="cover" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-light hover:bg-rojo focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rojo-light accept="image/png, image/jpeg" required>
                  @error('cover') <span class="error">{{ $message }}</span> @enderror
              </div>

              <div class="col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea type="text" wire:model="description" name="description" id="description" class="mt-1 focus:ring-rojo focus:border-rojo block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" maxlength="255" required> </textarea>
              </div>

              <div class="col-span-6">
                <label for="location" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" wire:model="location" name="location" id="location"class="mt-1 focus:ring-rojo focus:border-rojo block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" wire:model="date" name="date" id="date" class="mt-1 focus:ring-rojo focus:border-rojo block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                <input type="time" wire:model="time" name="time" id="time" class="mt-1 focus:ring-rojo focus:border-rojo block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="style" class="block text-sm font-medium text-gray-700">Style</label>
                <select id="style" wire:model="style" name="style"class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-rojo focus:border-rojo sm:text-sm" required>
                  <option selected>Select an option</option>

                  @foreach($partyStyles as $partyStyle)
                    <option value="{{ $partyStyle->id }}">{{ $partyStyle->style }}</option>
                  @endforeach
                </select>
              </div>

            </div>
          </div>

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button wire:click="store" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-rojo-light hover:bg-rojo focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rojo">
              Add Party
            </button>
          </div>
          
        </div>

    </div>

  </div>
</div>

