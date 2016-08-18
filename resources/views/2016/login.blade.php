@extends('layout')

@section('title', '2016 ACM-ICPC Thailand Central Group A Programming Contest')

@section('favicon')
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/2016-thailand-central-a/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/2016-thailand-central-a/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/2016-thailand-central-a/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/2016-thailand-central-a/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/2016-thailand-central-a/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/favicon/2016-thailand-central-a/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/favicon/2016-thailand-central-a/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
@endsection

@section('content')
<header>
    <div id="central-a-contest-section" class="welcoming-section container-fluid">
        <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <img src="{{ asset('img/acm-icpc-thailand-central-a-logo-white.png') }}" class="img-responsive">
            {{-- <img src="{{ asset('img/icpc_logo.png') }}" class="contest-logo">
            <h1 class="contest-title">2016 ACM-ICPC Thailand Central A Contest</h1> --}}
            <h3 class="contest-description">September 11, 2016<br>at Chula Engineering</h3>
        </div>
    </div>
</header>

<section id="central-a-contest" class="container-fluid">
    <div class="col-md-4 col-md-offset-4">
        <h3>You shall not pass</h3>
        @if (session('login-error'))
            <div class="alert alert-danger">
                {{ session('login-error') }}
            </div>
        @endif
        <form class="" method="post" action="{{ url('2016/thailand/central-a/admin') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Your phase here">
            </div>
            <button class="btn btn-block btn-primary" type="submit">Tell me</button>
        </form>
    </div>
</section>
@include('footer')
@endsection
