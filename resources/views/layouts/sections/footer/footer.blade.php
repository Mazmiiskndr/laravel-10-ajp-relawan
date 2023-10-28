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
