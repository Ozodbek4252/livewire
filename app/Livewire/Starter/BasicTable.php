<?php

namespace App\Livewire\Starter;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;

class BasicTable extends Component
{
    #[Rule('required', as: 'Title', message: 'Please enter a title')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function delete($id)
    {
        Post::find($id)->delete();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.starter.basic-table', [
            'posts' => Post::all(),
        ]);
    }
}
