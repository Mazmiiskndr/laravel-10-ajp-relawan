<form class="mb-3" wire:submit.prevent="loginAction" method="POST">
    <div class="mb-3">
        <x-input-field type="text" id="username" label="Username" model="form.username" placeholder="Enter a Username.." required autofocus />
    </div>
    <div class="mb-4 form-password-toggle">
        <x-input-field type="password" id="password" label="Password" model="form.password" placeholder="Enter a Password.." required autofocus />
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
    </div>
</form>
