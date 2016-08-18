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
    <div class="col-md-12">
        <h3>Registered Participants</h3>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ชื่อทีม</th>
                    <th>สถาบัน</th>
                    <th>ตำแหน่ง</th>
                    <th colspan="3">ชื่อ-นามสกุล</th>
                    <th colspan="3">ชื่อ-นามสกุล (อังกฤษ)</th>
                    <th>อีเมล</th>
                    <th>หมายเลขโทรศัพท์</th>
                    <th>ขนาดเสื้อ</th>
                    <th>ข้อจำกัดทางอาหาร</th>
                    <th>เข้าร่วมอบรม</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td rowspan="4"><b>{{ $team['name'] }}</b></td>
                        <td rowspan="4">{{ $team['institute'] }}</td>
                        <td>อาจารย์ผู้ควบคุมทีม</td>
                        <td>{{ $team['coach']['title_th'] }}</td>
                        <td>{{ $team['coach']['name_th'] }}</td>
                        <td>{{ $team['coach']['surname_th'] }}</td>
                        <td>{{ $team['coach']['title_en'] }}</td>
                        <td>{{ $team['coach']['name_en'] }}</td>
                        <td>{{ $team['coach']['surname_en'] }}</td>
                        <td>{{ $team['coach']['email'] }}</td>
                        <td>{{ $team['coach']['tel'] }}</td>
                        <td>{{ $team['coach']['shirt_size'] }}</td>
                        <td>{{ $team['coach']['food_limitation'] }}</td>
                        <td></td>
                    </tr>
                    @foreach ($team['contestants'] as $idx => $contestant)
                        <tr>
                            <td>สมาชิกทีมคนที่ {{ ($idx + 1) }}</td>
                            <td>{{ $contestant['title_th'] }}</td>
                            <td>{{ $contestant['name_th'] }}</td>
                            <td>{{ $contestant['surname_th'] }}</td>
                            <td>{{ $contestant['title_en'] }}</td>
                            <td>{{ $contestant['name_en'] }}</td>
                            <td>{{ $contestant['surname_en'] }}</td>
                            <td>{{ $contestant['email'] }}</td>
                            <td>{{ $contestant['tel'] }}</td>
                            <td>{{ $contestant['shirt_size'] }}</td>
                            <td>{{ $contestant['food_limitation'] }}</td>
                            <td>{{ ($contestant['prep_course'] === 1 ? '✓' : '') }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('footer')
@endsection
