<?php

namespace App\Livewire\Starter;

use Livewire\Component;

class Properties extends Component
{
    public $todo = '';

    public $todos = [
        'Take out the trash',
        'Feed the cat',
        'Dinner with friends',
        'Movie night',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.starter.properties');
    }
}
