@extends('layout')

@section('title', '2016 ACM-ICPC Thailand Central Group A Programming Contest')

@section('meta')
<meta name="description" content="การแข่งขันเขียนโปรแกรมคอมพิวเตอร์ ACM-ICPC ระดับภูมิภาค ภาคกลางเขต 1 ปี 2559 11 กันยายน 2559 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย">
<meta name="author" content="Chula Engineering">

<meta property="og:title" content="2016 ACM-ICPC Thailand Central Group A Programming Contest">
<meta property="og:site_name" content="ACM-ICPC by Chula Engineering">
<meta property="og:url" content="https://www.acm-icpc.eng.chula.ac.th/2016/thailand/central-a">
<meta property="og:description" content="การแข่งขันเขียนโปรแกรมคอมพิวเตอร์ ACM-ICPC ระดับภูมิภาค ภาคกลางเขต 1 ปี 2559 11 กันยายน 2559 ณ คณะวิศวกรรมศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย" />
<meta property="og:image" content="{{ asset('img/acm-icpc-thailand-central-a-meta.png') }}">
@endsection

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
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#about" data-toggle="pill">About</a></li>
            <li><a href="#prize" data-toggle="pill">Prize</a></li>
            <li><a href="#prep-course" data-toggle="pill">Preparation Course</a></li>
            <li><a href="#rules" data-toggle="pill">Rules</a></li>
            <li><a href="#schedule" data-toggle="pill">Schedule</a></li>
            <li><a href="#registration" data-toggle="pill">Registration</a></li>
            <li><a href="#map" data-toggle="pill">Maps &amp; Accomodations</a></li>
            <li><a href="#contestant" data-toggle="pill">Contestant Information</a></li>
            {{-- <li><a href="#results" data-toggle="pill">Results</a></li> --}}
            {{-- <li><a href="#gallery" data-toggle="pill">Gallery</a></li> --}}
            <li><a href="#contact" data-toggle="pill">Contact</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        <div class="tab-content">
            <div id="about" class="tab-pane fade in active">
                @include('2016.partials.about')
            </div>
            <div id="prize" class="tab-pane fade">
                @include('2016.partials.prize')
            </div>
            <div id="prep-course" class="tab-pane fade">
                @include('2016.partials.preparation-course')
            </div>
            <div id="rules" class="tab-pane fade">
                @include('2016.partials.rules')
            </div>
            <div id="schedule" class="tab-pane fade">
                @include('2016.partials.schedule')
            </div>
            <div id="registration" class="tab-pane fade">
                @include('2016.partials.registration')
            </div>
            <div id="map" class="tab-pane fade">
                @include('2016.partials.map')
            </div>
            <div id="contestant" class="tab-pane fade">
                @include('2016.partials.contestant')
            </div>
            <div id="results" class="tab-pane fade">
                @include('2016.partials.results')
            </div>
            <div id="gallery" class="tab-pane fade">
                @include('2016.partials.gallery')
            </div>
            <div id="contact" class="tab-pane fade">
                @include('2016.partials.contact')
            </div>
        </div>
    </div>
</section>
@include('footer')
@endsection

@push('script')
<script src="{{ asset('js/tabHandler.js') }}"></script>
@endpush
