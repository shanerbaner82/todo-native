<div>
    <div class="flex items-start space-x-4">
        <div class="min-w-0 flex-1">
            <form wire:submit="save" class="relative h-full">
                <div
                    class="overflow-hidden rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-sky-600">
                    <label for="todo" class="sr-only">Update</label>
                    <textarea rows="10" name="todo" id="todo"
                              wire:model="title"
                              class="pl-2 block w-full resize-none border-0 bg-transparent py-1.5 text-sky-500 font-bold text-xl placeholder:text-sky-400 focus:ring-0 sm:text-sm sm:leading-6"
                              placeholder="Take out the trash..."></textarea>

                    <!-- Spacer element to match the height of the toolbar -->
                    <div class="py-2" aria-hidden="true">
                        <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                        <div class="py-px">
                            <div class="h-9"></div>
                        </div>
                    </div>
                </div>

                <div class="absolute inset-x-0 bottom-0 flex justify-between flex-row-reverse py-2 pl-3 pr-2">
                    <div class="flex-shrink-0">
                        <button type="submit"
                                class="inline-flex items-center rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                            Edit
                        </button>
                        <a wire:navigate href="{{route('todos.index')}}"
                           class="inline-flex items-center rounded-md bg-gray-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
