<?php

namespace App\Livewire;

use Livewire\Component;

class Dice extends Component
{
    public $diceValues = [0, 0, 0];
    public $rollCount = 0;
    public $selectedDice = [false, false, false];
    public $gameWon = false;
    public $gameWonMessage = '';
    public function rollDice()
    {
        $this->diceValues = [
            rand(1, 6),
            rand(1, 6),
            rand(1, 6),
        ];

        $this->rollCount++;

        $this->checkGameEnd();
    }

    public function rerollDice()
    {
        foreach ($this->selectedDice as $index => $selected) {
            if ($selected) {
                $this->diceValues[$index] = rand(1, 6);
            }
        }
        $this->rollCount++;

        $this->checkGameEnd();
    }

    public function checkGameEnd()
    {
        $validCombinations = [
            '421',
            '412',
            '142',
            '124',
            '214',
            '241',
        ];

        $currentCombination = implode('', $this->diceValues);

        if (in_array($currentCombination, $validCombinations)) {
            $this->gameWon = true;

            $this->gameWonMessage = "Vous avez gagné en {$this->rollCount} coups !";
        }
    }
    public function toggleDice($index)
    {
        $this->selectedDice[$index] = !$this->selectedDice[$index];
    }

    public function resetGame()
    {
        $this->diceValues = [0, 0, 0];
        $this->rollCount = 0;
        $this->selectedDice = [false, false, false];
        $this->gameWon = false;
        $this->gameWonMessage = '';

        $this->dispatch('resetGame');
    }

    public function render()
    {
        return view('livewire.dice');
    }
}
