<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css')
</head>
<body>
    @yield('content')
    <script src="{{ asset('libs/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
