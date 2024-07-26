<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Login - SOLAR SITE')]
class Login extends Component
{
    #[Validate('required|string|min:3')]
    public $username = '';
    #[Validate('required|min:5')]
    public $password = '';

    public function login()
    {
        $valid = $this->validate();
        if (Auth::attempt($valid)) {
            $this->redirect(route('solar'), true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
