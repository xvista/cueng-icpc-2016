<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    @yield('css')
</head>
<body>
    @yield('content')
    <script src="{{ asset('libs/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
