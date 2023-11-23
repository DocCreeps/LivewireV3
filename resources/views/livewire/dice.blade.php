<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded shadow-md">
    <p class="mb-4">Nombre de lancers : {{ $rollCount }}</p>

    <div class="mb-4">
        <h2 class="text-lg font-semibold mb-2">Dés :</h2>
        @foreach ($diceValues as $index => $dice)
            <div
                wire:click="toggleDice({{ $index }})"
                class="cursor-pointer inline-flex items-center rounded-md px-4 py-2 mr-4 mb-4
                       {{ $selectedDice[$index] ? 'bg-blue-500 text-white' : 'bg-green-500 text-white' }}"
            >
                <span class="mr-2">{{ $dice }}</span>
            </div>
        @endforeach
    </div>

    @if (!$gameWon)
        <button wire:click="rollDice" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" @if($gameWon) disabled @endif>Lancer les dés</button>
        <button wire:click="rerollDice" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @if($gameWon) disabled @endif>Relancer les dés sélectionnés</button>
    @else
        <div>
            <p>{{ $gameWonMessage }}</p>
            <button wire:click="resetGame" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Relancer le jeu</button>
        </div>
    @endif

</div>
