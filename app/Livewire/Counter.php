<?php

namespace App\Livewire;

use Illuminate\Foundation\Application;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    public function render(): View|Factory|Application
    {
        return view('livewire.counter');
    }
}
