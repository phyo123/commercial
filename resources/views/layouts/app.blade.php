<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'PONYNAIL')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('theme/images/fevicon.png')}} type="image/gif" />
    <link rel="stylesheet" href="{{ asset('theme/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
    @yield('content')

    <!-- JS -->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('theme/js/plugin.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
</body>
</html>
