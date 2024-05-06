<?php

namespace App\Livewire\Starter\BasicForm;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;

class CreateBasicForm extends Component
{
    #[Rule('required', as: 'Title', message: 'Please enter a title')]
    #[Rule('min:2', as: 'Title', message: 'Title must be at least 2 characters')] // is not working
    public $title = '';

    #[Rule('required')]
    public $content = '';

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

        $this->redirect(route('starter.basic-form'), navigate: true);
    }

    public function render()
    {
        return view('livewire.starter.basic-form.create-basic-form');
    }
}
