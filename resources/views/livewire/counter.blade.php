<div class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-4xl">{{ $count }}</h1>

    <div class="mt-4">
        <button wire:click="increment" class="px-4 py-2 bg-blue-500 text-white rounded">+</button>

        <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded">-</button>
    </div>
</div>
