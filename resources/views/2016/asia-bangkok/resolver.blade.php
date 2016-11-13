<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="Resolver | 2016 ACM-ICPC Asia Bangkok Regional Contest">
    <meta name="author" content="Chula Engineering">
    <meta property="og:url" content="{{ url('2016/asia/bangkok/resolver') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Resolver | 2016 ACM-ICPC Asia Bangkok Regional Contest">
    <meta property="og:description" content="See what's happening during the last hour of ACM-ICPC Asia Bangkok Regional Contest by Chula Engineering">
    <meta property="og:image" content="{{ asset('resolver-2016-asia-bangkok/img/acm-icpc-asia-bangkok-chula-meta-resolver.png') }}">

    <link rel="icon" href="favicon.ico">

    <title>Resolver | 2016 ACM-ICPC Bangkok Asia Regional Contest</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('resolver-2016-asia-bangkok/cdn/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="cdn/html5shiv.min.js"></script>
      <script src="cdn/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('resolver-2016-asia-bangkok/css/resolver.css?2') }}">
    <!--<link id="css-teams" rel="stylesheet" href="css/resolver.teams.css">-->
</head>

<body>
    <div id="scoreboard" class="scoreboard">
        <div id="table-head" class="scoreboard-head scoreboard-row">
            <div class="cell scoreboard-rank">#</div>
            <div class="cell scoreboard-name">TEAM</div>
            <div class="cell scoreboard-score" colspan="2">SCORE</div>
            <div class="scoreboard-problem-list"></div>
        </div>
        <div id="scoreboard-body">
        </div>
        <div id="scoreboard-foot" class="scoreboard-foot scoreboard-row">
            <div class="cell text-center" style="padding: 5px 30px;">
                <div class="pull-left">
                    <img src="{{ asset('resolver-2016-asia-bangkok/img/logo_white.svg') }}" style="height: 40px; margin:auto;">
                    &nbsp;&nbsp;
                    2016 ACM-ICPC Asia Bangkok Regional Contest
                </div>
                <div class="pull-right">
                    <span class="label label-example"><b>Attempts</b> (Points)</span>
                    <span class="label label-first">First Solver</span>
                    <span class="label label-solved">Solved</span>
                    <span class="label label-tried">Attempted</span>
                    <span class="label label-pending">Pending</span>
                </div>
            </div>
        </div>
    </div>

    <div id="notrunning" class="col-md-8 col-md-offset-2" style="display: none;">
        <div class="text-center">
            <h1 style="color: white;">CONTEST IS NOT RUNNING</h1>
        </div>
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('resolver-2016-asia-bangkok/cdn/jquery.min.js') }}"></script>
    <script src="{{ asset('resolver-2016-asia-bangkok/cdn/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resolver-2016-asia-bangkok/cdn/handlebars.min.js') }}"></script>
    <script src="{{ asset('resolver-2016-asia-bangkok/js/resolver.js?2') }}"></script>
</body>

</html>
