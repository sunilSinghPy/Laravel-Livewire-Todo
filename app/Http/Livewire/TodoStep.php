<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoStep extends Component
{
    public $todo;
    public $step = 0;


    public function addStep()
    {
        $this->step++;
    }

    public function removeStep()
    {
        $this->step--;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.todo-step');
    }
}
