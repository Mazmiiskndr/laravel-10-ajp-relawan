<form class="mb-3" wire:submit.prevent="loginAction" method="POST">
    @if (session()->has('error'))
    <div class="mb-3">
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

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
