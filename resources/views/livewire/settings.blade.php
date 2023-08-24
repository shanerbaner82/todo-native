<div>
    <div class="flex items-center space-x-2 absolute top-0 right-0 mt-5 mr-4">
        <a wire:navigate href="{{route('todos.index')}}" class="px-2 py-1 bg-sky-600 text-white rounded-lg">
            <x-heroicon-s-arrow-left-circle class="h-4 w-4"/>
        </a>
    </div>
    <form wire:submit="updateApiKey">
        <div>
            <label for="api_key"
                   class="block text-sm font-medium leading-6 text-gray-100">Enter API Key (for teams)</label>
            <div class="mt-4">
                <input type="text" id="api_key" wire:model="api_key"
                       class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-200 bg-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="flex flex-row-reverse">
            <button type="submit"
                    class="mt-6 inline-flex items-center rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                Update
            </button>
        </div>
    </form>

</div>
