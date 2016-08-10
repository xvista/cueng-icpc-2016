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
            <li><a href="#map" data-toggle="pill">Maps & Accomodations</a></li>
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

<footer>
    <div class="footer-above">
        
    </div>
    <div class="footer-below">
        <span class="copyright-text">Copyright © 2016 - <a href="{{ url('https://www.cp.eng.chula.ac.th/') }}">Computer Engineering, Chulalongkorn University</a></span>
    </div>
</footer>
@endsection

@section('script')
<script src="{{ asset('js/tabHandler.js') }}"></script>
@endsection