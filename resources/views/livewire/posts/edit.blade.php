<div>
    <div class="max-w-3xl mx-auto h-screen flex flex-col justify-center">
        <div class="p-8 border-2 border-yellow-100 rounded-lg">
            <div>
                <h1 class="text-3xl font-bold">{{ $this->post->title }}</h1>
            </div>
            <div class="py-4">
                {{ $this->form }}

                <button wire:click="save" type="button"
                    class="mt-4 inline-flex items-center px-3 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-lg shadow-sm text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
