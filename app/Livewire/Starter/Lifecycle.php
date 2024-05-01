<?php

namespace App\Livewire\Starter;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Lifecycle')]
class Lifecycle extends Component
{
    public $todo = '';

    public $todos = [
        'Take out the trash',
        'Feed the cat',
        'Dinner with friends',
        'Movie night',
    ];

    public function updated($property, $value) // or updatedTodo($value)
    {
        $this->$property = strtoupper($value); // or $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.starter.lifecycle');
    }
}
