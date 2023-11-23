<div class="max-w-md mx-auto mt-8 bg-white rounded-xl overflow-hidden shadow-md p-6">
    <div class="text-center mb-4">
        <h2 class="text-xl font-semibold">Progress Card</h2>
    </div>

    <div class="relative pt-1">
        <div class="flex mb-2 items-center justify-center">
            <div>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-teal-600 bg-teal-200">
                    {{ $progress }}%
                </span>
            </div>
        </div>
        <div class="flex mb-2 items-center justify-center">
            <div class="flex items-center">
                <span class="text-xs font-semibold inline-block w-2/5 py-1 px-3 text-center">
                    Progress
                </span>
            </div>
        </div>
        <div class="overflow-hidden h-2 mb-4 rounded-full bg-blue-200">
            <div :style="'width:' + $wire.progress + '%'" class="transition-width duration-500 ease-in-out shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center rounded-full bg-blue-500">
                <span class="text-xs">{{ $progress }}%</span>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <button wire:click="increaseProgress" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Augmenter</button>
        <button wire:click="decreaseProgress" class="bg-red-500 text-white px-4 py-2 rounded">Diminuer</button>
    </div>
</div>
