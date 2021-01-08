<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoStep extends Component
{
    public $todo;
    public $message;
    public $steps = [];


    public function addStep()
    {
        $this->steps[] = count($this->steps )+1;
    }

    public function removeStep($index)
    {

        unset($this->steps[$index]);
    }


    public function render()
    {
        return view('livewire.todo-step');
    }
}
