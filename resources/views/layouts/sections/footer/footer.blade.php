@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
    <div class="{{ $containerFooter }}">
        <div class="footer-container d-flex align-items-center justify-content-center py-2 flex-md-row flex-column">
            <div>
                © <script>
                    document.write(new Date().getFullYear())

                </script>
                , made with ❤️ by <a href="{{ (!empty(config('variables.creatorUrl')) ? config('variables.creatorUrl') : '') }}" target="_blank" class="footer-link fw-medium text-primary">{{ (!empty(config('variables.creatorName')) ? config('variables.creatorName') : '') }}</a>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer-->
@push('scripts')
<script src="{{ asset('assets/js/backend/toastUtils.js') }}"></script>
<div id="successToast" class="bs-toast toast toast-ex my-2 fade bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
    <div class="toast-header bg-white">
        <i class="fas me-2 text-success"></i>
        <div class="me-auto fw-semibold text-success">Success</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div id="toastBody" class="toast-body" style="color: #1d1d1d"></div>
</div>
<script>
    // Check if there's a success message in the session
    var success = "{{ session()->has('success') }}";
    if (success) {
        // If there is, create a new event with the success message
        var event = new Event('message');
        event.detail = {
            success: "{!! session('success') !!}"
        };
        // Dispatch the event
        window.dispatchEvent(event);
    }

</script>
@endpush
