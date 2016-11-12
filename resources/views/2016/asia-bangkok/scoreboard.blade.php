<!--
    What are you looking at! Solve your own problems!
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="description" content="Scoreboard | 2016 ACM-ICPC Asia Bangkok Regional Contest">
    <meta name="author" content="Chula Engineering">
    <meta property="og:url" content="{{ url('2016/asia/bangkok/scoreboard') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Scoreboard | 2016 ACM-ICPC Asia Bangkok Regional Contest">
    <meta property="og:description" content="See what's going on 2016 ACM-ICPC Asia Bangkok Regional Contest by Chula Engineering">
    <meta property="og:image" content="{{ asset('scoreboard-2016-asia-bangkok/img/acm-icpc-asia-bangkok-chula-meta-scoreboard.png') }}">

    <link rel="icon" href="favicon.ico">

    <title>Scoreboard | 2016 ACM-ICPC Asia Bangkok Regional Contest</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('scoreboard-2016-asia-bangkok/cdn/bootstrap.min.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="cdn/html5shiv.min.js"></script>
      <script src="cdn/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('scoreboard-2016-asia-bangkok/css/scoreboard_new.css') }}">
    <link id="css-teams" rel="stylesheet" href="{{ asset('scoreboard-2016-asia-bangkok/css/scoreboard.teams.css') }}">
</head>

<body>
    <div class="container-fluid container-scoreboard">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ asset('scoreboard-2016-asia-bangkok/img/logo_white.svg') }}" class="img-responsive header" style="height: 200px; margin:auto;">
        </div>
        <div id="scoreboard-content">
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
                <span class="label label-example">Attempt / Points</span>
                <span class="label label-first">First Solver</span>
                <span class="label label-solved">Solved</span>
                <span class="label label-tried">Attempted</span>
                <span class="label label-pending">Pending</span>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">&nbsp;</div>
        <table id="scoreboard" class="table table-bordered table-striped table-scoreboard scoreboard-content">
            <thead>
                <tr id="table-head">
                    <th>#</th>
                    <th>TEAM</th>
                    <th colspan="2">SCORE</th>
                </tr>
            </thead>
            <tbody id="scoreboard-body">
            </tbody>
            <tfoot>
                <tr id="table-head-summary" class="scoreboard-header">
                    <td colspan="4"></td>
                </tr>
                <tr id="row-solvedtries">
                    <td colspan="4" class="scoreboard-summary">Solved/Attempts</td>
                </tr>
                <tr id="row-avgtries">
                    <td colspan="4" class="scoreboard-summary">Average attempts</td>
                </tr>
                <tr id="row-avgtriessolved">
                    <td colspan="4" class="scoreboard-summary">Avg. attempts to solve</td>
                </tr>
            </tfoot>
        </table>
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center">
                <span class="label label-example">Attempt / Points</span>
                <span class="label label-first">First Solver</span>
                <span class="label label-solved">Solved</span>
                <span class="label label-tried">Attempted</span>
                <span class="label label-pending">Pending</span>
            </div>
        </div>
        </div>
        <div id="notrunning" class="col-md-8 col-md-offset-2" style="display: none;">
            <div class="text-center">
                <h1 style="color: white;">CONTEST IS NOT RUNNING</h1>
            </div>
        </div>
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('scoreboard-2016-asia-bangkok/cdn/jquery.min.js') }}"></script>
    <script src="{{ asset('scoreboard-2016-asia-bangkok/cdn/bootstrap.min.js') }}"></script>
    <script src="{{ asset('scoreboard-2016-asia-bangkok/cdn/handlebars.min.js') }}"></script>
    <script src="{{ asset('scoreboard-2016-asia-bangkok/js/scoreboard.js') }}"></script>
</body>

</html>
