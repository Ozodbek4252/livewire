<?php

namespace App\Livewire\Starter;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;

class Validation extends Component
{
    // #[Rule('required|min:2|max:50')] //! This is not working
    public $name;

    // #[Rule('required|email|unique:users,email')]
    public $email;

    // #[Rule('required|min:8')]
    public $password;

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.starter.validation', [
            'users' => User::all(),
        ]);
    }
}
