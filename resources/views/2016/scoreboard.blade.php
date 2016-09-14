<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title>Scoreboard | 2016 ACM-ICPC Thailand Central A Contest</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('scoreboard-th-cen-a/cdn/bootstrap.min.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<link rel="stylesheet" href="{{ asset('scoreboard-th-cen-a/css/scoreboard.css') }}">
</head>

<body>
	<div class="container-fluid container-scoreboard">
		<div class="col-md-8 col-md-offset-2">
			<img src="{{ asset('scoreboard-th-cen-a/img/acm-icpc-thailand-central-a-logo-white-scoreboard.png') }}" class="img-responsive header">
		</div>
		<div id="scoreboard-content" style="display: none;">
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
	<script src="{{ asset('scoreboard-th-cen-a/cdn/jquery.min.js') }}"></script>
	<script src="{{ asset('scoreboard-th-cen-a/cdn/bootstrap.min.js') }}"></script>
	<script src="{{ asset('scoreboard-th-cen-a/cdn/handlebars.min.js') }}"></script>
	<script src="{{ asset('scoreboard-th-cen-a/js/scoreboard.js') }}"></script>
</body>

</html>
