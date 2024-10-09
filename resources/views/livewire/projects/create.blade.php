<div class="shadow-md border border-gray-200 rounded-md p-5 max-w-xl mx-auto">
    <form wire:submit='createProject'>
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
            <input wire:model.live='title' type="text" id="title"
                class="bg-gray-50 @error('title') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('title') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-5">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
            <input wire:model.live='description' name="description" type="text" id="description"
                class="bg-gray-50 @error('description') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('description') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-5">
            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Url</label>
            <input wire:model.live='url' type="text" id="url"
                class="bg-gray-50 @error('url') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @error('url') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Miniatura</label>
            <input wire:model.live='image'
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="image" id="user_avatar" type="file">
                @error('image') <span class="error">{{ $message }}</span> @enderror 
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image">A profile picture is useful
                to confirm your are logged into your account</div>
                @if($image)
            <div class="my-3 flex justify-center">
                <img class="w-24" src="{{ $image->temporaryUrl() }}" alt="">
            </div>
            @endif
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
    </form>


</div>
