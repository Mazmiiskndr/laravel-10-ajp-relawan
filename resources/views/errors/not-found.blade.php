<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>404 Not Found</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- TODO: ICON --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon-ajp.png') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-misc.css') }}" />

</head>

<body>
    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-1 mt-4">Page Not Found 😞</h2>
            <p class="mb-4 mx-2">Oops! 😖 The requested URL was not found on this server.</p>
            <a href="#" class="btn btn-primary mb-4" onclick="javascript:window.history.back(-1);return false;"> Back</a>
            {{-- <div class="mt-4">
                <img src="{{ asset('assets/img/illustrations/page-misc-error.png') }}" alt="page-misc-error" width="225"
            class="img-fluid" />
        </div> --}}
    </div>
    </div>
    {{-- <div class="container-fluid misc-bg-wrapper">
        <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}" alt="page-misc-error"
    data-app-light-img="illustrations/bg-shape-image-light.png"
    data-app-dark-img="illustrations/bg-shape-image-dark.png" />
    </div> --}}
    <!-- /Error -->
    <!-- Page JS -->
</body>

</html>
