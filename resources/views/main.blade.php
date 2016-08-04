@extends('layout')

@section('css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<header>
    <div id="central-a-contest-section">
        <img src="{{ asset('img/icpc_logo.png') }}" id="contest-logo">
        <h1 id="contest-title">2016 ACM-ICPC Thailand Central A Contest</h1>
        <h3 id="contest-description">Veniam nulla quis amet anim consequat magna proident nisi esse.</h3>
        <a href="{{ url('/2016/thailand/central-a') }}" class="btn btn-primary ghost-white-button" id="central-a-button">More Info</a>
    </div>
    
</header>
@endsection