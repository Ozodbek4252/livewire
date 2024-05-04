<?php

namespace App\Livewire\Starter\Nesting;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

    public function archive()
    {
        $this->post->archive();
    }

    public function unarchive()
    {
        $this->post->unarchive();
    }

    //* You can delete the render() method. It words totally fine without it.
    // public function render()
    // {
    //     return view('livewire.starter.nesting.post-row');
    // }
}
