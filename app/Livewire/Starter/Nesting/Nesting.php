<?php

namespace App\Livewire\Starter\Nesting;

use Livewire\Component;
use App\Models\Post;

class Nesting extends Component
{
    public function delete($postId)
    {
        Post::find($postId)->delete();
    }

    public function render()
    {
        return view('livewire.starter.nesting.nesting', [
            'posts' => Post::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
