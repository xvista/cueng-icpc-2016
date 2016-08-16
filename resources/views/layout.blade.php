<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    @if ($__env->yieldContent('title'))
        @yield('title')
        | ACM-ICPC by Chula Engineering
    @else
       ACM-ICPC by Chula Engineering
    @endif
</title>
    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-aero-matics.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @yield('favicon')
    @yield('css')
</head>
<body>
    @include('google-analytics')
    <div class="sponsor-header container-fluid">
        <div class="col-md-12">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/header-logo.png') }}" class="img-responsive">
            </a>
        </div>
    </div>
    @yield('content')
    <script src="{{ asset('libs/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('script')
</body>
</html>
