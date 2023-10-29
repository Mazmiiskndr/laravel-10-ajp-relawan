<form wire:submit.prevent="storeNewResume" method="POST">

    {{-- TODO: --}}
    <div class="row">
        <div class="col-lg-6 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="title" label="Title" placeholder="Enter a Title.." required />
        </div>
        <div class="col-lg-6 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="subtitle" label="Sub Title" placeholder="Enter a Sub Title.." required />
        </div>
    </div>
</form>
