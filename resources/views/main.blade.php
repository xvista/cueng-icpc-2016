@extends('layout')

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<header>
    <div id="central-a-contest-section" class="welcoming-section">
        <img src="{{ asset('img/icpc_logo.png') }}" class="contest-logo">
        <h1 class="contest-title">2016 ACM-ICPC Thailand Central A Contest</h1>
        <h3 class="contest-description">Veniam nulla quis amet anim consequat magna proident nisi esse.</h3>
        <a href="{{ url('/2016/thailand/central-a') }}" class="btn btn-primary ghost-white-button" id="central-a-button">More Info</a>
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