@extends('layout')

@section('meta')
<meta name="description" content="The ACM International Collegiate Programming Contest (ICPC) is a multi-tiered competitive programming competition among the universities. Chula Engineering is one of the ACM-ICPC host in Thailand.">
<meta name="author" content="Chula Engineering">

<meta property="og:title" content="ACM-ICPC by Chula Engineering">
<meta property="og:site_name" content="ACM-ICPC by Chula Engineering">
<meta property="og:url" content="https://www.acm-icpc.eng.chula.ac.th/2016">
<meta property="og:description" content="The ACM International Collegiate Programming Contest (ICPC) is a multi-tiered competitive programming competition among the universities. Chula Engineering is one of the ACM-ICPC host in Thailand." />
<meta property="og:image" content="{{ asset('img/acm-icpc-chula-meta.png') }}">
@endsection

@section('favicon')
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/main/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/main/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/main/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/main/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/main/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/main/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/main/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/main/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/main/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/main/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/main/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/main/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/main/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/favicon/main/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/favicon/main/ms-icon-144x144.png') }}">
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
        <a href="{{ url('/2016/thailand/central-a') }}" class="btn btn-primary ghost-white-button" id="central-a-button">More Info</a>
        </div>
    </div>
</header>

<section id="upcoming-event-section">
    <h1 class="section-header">Upcoming Event</h1>
</section>

<section id="archived-event-section">
    <h1 class="section-header">Archived Event</h1>
    <div class="container">
        <div class="col-md-4 col-md-offset-2">
            <div class="card">
                <img src="{{ asset('img/browser.png') }}" class="card-img center-block">
                <p>2015 ACM-ICPC Thailand Central B Contest</p>
                <a href="{{ url('http://www.acm-icpc.eng.chula.ac.th/acm-2015/') }}" class="btn btn-primary ghost-white-button" id="central-a-button">Visit Site</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/browser.png') }}" class="card-img center-block">
                <p>2014 ACM-ICPC Asia Bangkok Regional Contest</p>
                <a href="{{ url('http://www.acm-icpc.eng.chula.ac.th/acm-2014/') }}" class="btn btn-primary ghost-white-button" id="central-a-button">Visit Site</a>
            </div>
        </div>
    </div>
</section>
@include('footer')
@endsection
