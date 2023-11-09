<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class FormLogin extends Component
{
    public LoginForm $form;
    /**
     * Render the login form view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.auth.form-login');
    }

    /**
     * Update the specified property and validate it.
     *
     * @param  string  $property
     * @return void
     */
    public function updated($property)
    {
        // Every time a property changes
        // (only `text` for now), validate it
        $this->validateOnly($property);
    }

    /**
     * Perform the login action by storing the form data.
     */
    public function loginAction()
    {
        $this->form->store();
    }
}
