<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule('required', message: 'Username cannot be empty!')]
    public $username = '';

    #[Rule('required', message: 'Password cannot be empty!')]
    public $password = '';

    public function store()
    {
        $this->validate();

        // Proses login
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Login sukses
            return redirect()->route('backend.dashboard')
                ->with('success', "Great job! You've successfully logged in. Let's get started!");
        } else {
            // Login gagal
            return session()->flash('error', 'Username atau Password salah.');
        }

        $this->reset();
    }
}
