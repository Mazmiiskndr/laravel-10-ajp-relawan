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
        {{-- TODO: --}}
        {{-- @livewire('backend.volunteer.form-search') --}}
    </div>

    {{-- Start List DataTable --}}
    <div class="card-body">
        @livewire('backend.volunteer.datatables')
    </div>
    {{-- End List DataTable --}}

    @push('scripts')
    <script src="{{ asset('assets/datatable/datatables.min.js') }}"></script>
    {{-- TODO: --}}
    <script src="{{ asset('assets/js/backend/volunteer/volunteer-management.js') }}"></script>

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
