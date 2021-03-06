<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!--font awesome for icons and stuff-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- for mobile view -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>



		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style2.css" type="text/css"/>

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>Pi-mirror</title>

		<!--custom javscript link for front end -->
		<script src="javascript/script.js" type="text/javascript"></script>
		<!-- for skycons -->
		<!--		<script src="javascript/skycons.js"></script>-->

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<!-- customer weather api call -->
	</head>
	<body onload="startTime()">





<div class="container weather">
	<div class="col-sm-8">
		<h1>Weather in Albuquerque<i class="fa fa-sun-o fa-pulse fa-2p fa-fw"></i><span class="sr-only">Loading...</span></h1>

		<div class="currently">
			<ul class="fa-ul">
				<li><i class="fa-li fa fa-clock-o"> </i>time: {{ weather.time | date }}</li>
				<li><i class="fa-li fa fa-thermometer-three-quarters"></i>temperature: {{ weather.temperature }}</li>
				<li><i class="fa-li fa fa-thermometer-full"></i>apparentTemperature: {{ weather.apparentTemperature }}</li>
				<li><i class="fa-li fa fa-skyatlas"></i>windSpeed: {{ weather.windSpeed }}</li>
				<li><i class="fa-li fa fa-mixcloud"></i>windBearing: {{ weather.windBearing }}</li>
				<li><i class="fa-li fa fa-sun-o"></i>Summary: {{ weather.summary }}</li>
			</ul>
			<img src="images2/{{weather.icon}}">
		</div>
	</div>
</div>





<div class="container slack">
	<div class="col-md-6">
		<!-- slack message -->
		<h1>Slack <i class="fa fa-slack fa-2x"></i></h1>
		<div class="messages">

			<ul class="fa-ul">
				<li><i class="fa-li fa fa-user"></i>user: {{ slack.user }}</li>
				<li><i class="fa-li fa fa-envelope-o"></i>text: {{ slack.text }}</li>
				<li><i class="fa-li fa fa-clock-o"></i>time: {{ slack.ts }}</li>
			</ul>
		</div>
	</div>
</div>

	</body>
</html>