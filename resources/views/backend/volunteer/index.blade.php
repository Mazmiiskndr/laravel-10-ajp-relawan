@extends('layouts/layoutMaster')
@section('title', 'List Relawan')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/datatable/datatables.min.css') }}" />
@endpush

@section('content')
{{-- Is Allowed User To List Relawan --}}
<h4 class="fw-bold py-3 mb-1">List Relawan</h4>
<!-- DataTable with Buttons -->
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between flex-column flex-sm-row">
            <div class="mb-1 mb-sm-0 text-center text-sm-start">
                <h4 class="card-title">Table Relawan</h4>
            </div>
            {{-- TODO: --}}
            {{-- <div>
                <div class="d-flex justify-content-sm-end flex-column flex-sm-row">
                    <x-button type="button" color="facebook btn-sm me-sm-1 mb-2 mb-sm-0" data-bs-toggle="modal" data-bs-target="#createNewResume">
                        <i class="tf-icons fas fa-plus-circle ti-xs me-1"></i>&nbsp; Add New Resume
                    </x-button>

                    <x-button type="button" color="danger btn-sm" onclick="confirmDeleteBatch()">
                        <i class="tf-icons fas fa-trash-alt ti-xs me-1"></i>&nbsp; Batch Delete
                    </x-button>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- Start List DataTable --}}
    <div class="card-body">
        @livewire('backend.volunteer.datatables')
    </div>
    {{-- End List DataTable --}}

    @push('scripts')
    <script src="{{ asset('assets/datatable/datatables.min.js') }}"></script>
    {{-- TODO: --}}
    {{-- <script src="{{ asset('assets/js/backend/volunteers/volunteers-management.js') }}"></script> --}}
    @endpush
</div>

{{-- TODO: CREATE AND UPDATE --}}
{{-- START FORM CREATE VOLUNTEER --}}
{{-- @livewire('backend.volunteer.create') --}}
{{-- END FORM CREATE VOLUNTEER --}}

{{-- START FORM EDIT VOLUNTEER --}}
{{-- @livewire('backend.volunteer.edit') --}}
{{-- END FORM EDIT VOLUNTEER --}}

@endsection
