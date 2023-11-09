<form wire:submit.prevent="storeNewResume" method="POST">

    {{-- TODO: --}}
    <div class="row">
        <div class="col-lg-4 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="name" label="Nama" placeholder="Masukan Nama" required />
        </div>
        <div class="col-lg-4 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="volunteer_name" label="Relawan" placeholder="Masukan Relawan" required />
        </div>
        <div class="col-lg-4 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="nik" label="NIK" placeholder="Masukan NIK" required />
        </div>

    </div>

    {{-- TODO: --}}
    <div class="row mt-3">
        <div class="col-lg-6 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="district" label="Kecamatan" placeholder="Masukan Kecamatan" required />
        </div>
        <div class="col-lg-6 col-12 mb-2 mb-md-0">
            <x-input-field type="text" id="village" label="Kelurahan" placeholder="Masukan Kelurahan" required />
        </div>
    </div>
</form>
