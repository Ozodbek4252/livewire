<?php

namespace App\Livewire\Starter;

use Livewire\Component;
use App\Models\Post;

class BasicForm extends Component
{
    public function render()
    {
        return view('livewire.starter.basic-form', [
            'posts' => Post::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
