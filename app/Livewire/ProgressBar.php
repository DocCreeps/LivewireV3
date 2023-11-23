<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{
    public $progress = 0;

    public function increaseProgress()
    {
        if ($this->progress < 100) {
            $this->progress += 10;
        }
    }

    public function decreaseProgress()
    {
        if ($this->progress > 0) {
            $this->progress -= 10;
        }
    }

    public function render()
    {
        return view('livewire.progress-bar');
    }
}
