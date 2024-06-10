<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required')]
    public $username;
    #[Validate('required')]
    public $password;

    public function login()
    {
        $valid = $this->validate();
        if (Auth::attempt($valid)) {
            $this->redirect(route('home'), true);
        }

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
