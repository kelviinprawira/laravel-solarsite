<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    #[Validate('required|string')]
    public $name;
    #[Validate('required|string')]
    public $username;
    #[Validate('required')]
    public $email;
    #[Validate('required|confirmed')]
    public $password;
    public $password_confirmation;


    public function render()
    {
        return view('livewire.auth.register');
    }
}
