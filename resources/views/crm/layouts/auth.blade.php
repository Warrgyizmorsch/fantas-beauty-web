<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>Fantas Beauty - CRM Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/fantas-logo.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('crm-assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('crm-assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('crm-assets/css/theme.min.css') }}" />
</head>

<body class="bg-light">
    <div class="d-flex align-items-center justify-content-center min-vh-100 p-3">
        @yield('content')
    </div>

    <script src="{{ asset('crm-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('crm-assets/js/common-init.min.js') }}"></script>
</body>

</html>

