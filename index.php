
<!DOCTYPE html>
<html>
<head>
	<title>Atom | Dash</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope" rel="stylesheet">

	<style type="text/css">

		body {
			overflow-x: hidden;
			background-color: #1f253d;
		}
		#main {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			
		}
		#header {
			position: relative;
			width: 90%;
			height: 75px;
			left: 50%;
			-webkit-transform: translateX(-50%);
			background-color: #394263;
			top: 5%;
			border-radius: 2px;

		}
		.opt {
			float: left;
			width: 13.8%;
			height: 96%;
			-webkit-transition: all 0.3s;
			position: relative;
			border-bottom: 3px solid transparent;

			
		}
		.opt:hover, .opt span:hover .opt {
			border-bottom: 3px solid #11a9ac;
			background-color: #515a7b;
		}
		.opt img {
			width: 20px;
			position: relative;
			top: 51%;
			
		
		}
		.opt span {
			color: #fff;
			position: relative;
			outline: none;
			
			top: -1.5px;
			height: 10%;
		
			font-family: dosis;

		}
		#opt-pos{
			position: absolute;
			top: 52%;
			left: 50%;
			-webkit-transform: translate(-50%,-50%);
		}
		#acc-header {
			position: relative;
			left: 10%;
			top: 50%;
			-webkit-transform: translateY(-50%);
			font-family: dosis;
			color: #fff;
		}

		img[src="pp.jpg"] {
			width: 30px;
			position: absolute;
			margin-top: -5px;
			margin-left: 14px;
			border: 1px solid #fff;
			border-radius: 50%;
		}
		#box1 {
			position: absolute;
			width: 320px;
			height: 320px;
			background-color: #394263;
			top: 24%;
			left: 9.5%;
		}
		#box2 {
			position: absolute;
			width: 330px;
			height: 420px;
			background-color: #394263;
			top: 24%;
			left: 50%;
			-webkit-transform: translateX(-50%);
		}
		#box3 {
			position: absolute;
			width: 320px;
			height: 220px;
			background-color: #394263;
			top: 24%;
			right: 9.5%;
			
		}
		#box4 {
			position: absolute;
			width: 320px;
			height: 340px;
			background-color: #394263;
			top: 78%;
			left: 9.5%;
			
		}
		#box5 {
			position: absolute;
			width: 330px;
			height: 360px;
			background-color: #dd1345;
			top: 93%;
			left: 50%;
			-webkit-transform: translateX(-50%);
		}
		#box6 {
			position: absolute;
			width: 320px;
			height: 420px;
			background-color: #394263;
			top: 63%;
			right: 9.5%;
			
		}
		#forscroll {
			position: absolute;
			top: 1000px;
		}

		/* Box Styles */

		#box1 #head {
			position: relative;
			top: 0;
			left: 0;
			width: 100%;
			height: 75px;
			background-color: #11a9ac;
			border-radius:2px; 
		}
		#head span {
			position: absolute;
			color: #fff;
			font-family: open sans;
			font-weight: 100;
			top: 50%;
			left: 50%;
			font-size: 32px;
			-webkit-transform: translate(-50%,-50%);
		}
		#box1 .opt-1 {
			position: relative;
			-webkit-transition: all 0.4s;
			border-bottom: 1px solid #333;
			width: 100%;
			height: 18.5%;
		}
		.opt-1 span {
			position: absolute;
			color: #fff;
			left: 21%;
			top: 50%;
			-webkit-transform: translateY(-50%);
			font-family: open sans;
		}
		.opt-1:hover {
			background-color: #515a7b;
		}
		.opt-1 img[src="cal.png"]{
			width: 20px;
			position: relative;
			top: 50%;
			left: 11%;
			margin-top: -1px;
			-webkit-transform: translateY(-50%);

		}
		#box2 img {
			width: 40%;
			position: relative;
			display: block;
			margin-left: auto;
			margin-right: auto;
			left: 0;
			right: 0;
			top: 54px;
			border: 5px solid #515a7b;
		}
		#box2 #pp-name {
			color: #fff;
			margin-top: 80px;
			text-align: center;
			font-family: hammersmith one;
			font-size: 24px;
			
		}
		#box2 #pp-desc {
			color: #fff;
			text-align: center;
			font-family: open sans;
			opacity: 0.8;

		}
		#clock {
			color: #fff;
			font-family: open sans;
			position: relative;
			text-align: center;
			font-size: 18px;
			margin-top: 6px;

		}
		#city {
			color: #fff;
			font-family: open sans;
			font-size: 36px;
			text-align: center;
			margin-top: 0px;
			position: relative;
			top: 50%;
			-webkit-transform: translateY(-50%);
		}
		#box3 #head {
			position: relative;
			top: 0;
			left: 0;
			width: 100%;
			height: 75px;
			background-color: #11a9ac;
			border-radius:2px; 
		}
		#time {
			position: absolute;
			width: 33.3%;
			height: 66%;
			background-color:#515a7b;;
			top: 34%;
			
			
		}
		#time span {
			position: relative;
			color: #fff;
			font-family: open sans;
			font-size: 36px;
			text-align: center;
			display: block;
			margin-top: 26px;
		}
		#weather {
			position: absolute;
			width: 33.3%;
			height: 66%;
			background-color:#515a7b;;
			top: 34%;
			left: 33.6%;
			
		}
		#weather span {
			position: relative;
			color: #fff;
			font-family: open sans;
			font-size: 36px;
			text-align: center;
			display: block;
			margin-top: 26px;
		}
		#weather #temp {
			color: #fff;
			font-family: open sans;
			position: relative;
			text-align: center;
			font-size: 18px;
			margin-top: 6px;
		}
		#date {
			position: absolute;
			width: 33%;
			height: 66%;
			background-color:#515a7b;;
			top: 34%;
			left: 67.2%;
			
		}
		#date span {
			position: relative;
			color: #fff;
			font-family: open sans;
			font-size: 36px;
			text-align: center;
			display: block;
			margin-top: 26px;
		}
		#date #date-info {
			color: #fff;
			font-family: open sans;
			position: relative;
			text-align: center;
			font-size: 18px;
			margin-top: 6px;
		}





			
			
	</style>
	<script>
		function startTime() {
		    var today = new Date();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('clock').innerHTML =
		    h + ":" + m + ":" + s;
		    var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
</script>
</head>
<body onload="startTime()">
<div id = "main">
	<div id ="header">
		<div class = "opt"><div id = "opt-pos"><img src = "cal.png"> &nbsp<span>Settings</span></div></div>
		<div class = "opt"><div id = "opt-pos"><img src = "cal.png"> &nbsp<span>Account</span></div></div>
		<div class = "opt"><div id = "opt-pos"><img src = "cal.png"> &nbsp<span>Planner</span></div></div>
		<div class = "opt"><div id = "opt-pos"><img src = "cal.png"> &nbsp<span>History</span></div></div>
		<div class = "opt"><div id = "opt-pos"><img src = "cal.png"> &nbsp<span>Heading</span></div></div>

        <div id = "acc-header">             <span class ="acc-name">Yash
Wardhann <img src="pp.jpg"></span>
			
		</div>

	</div>	

	<div id = "box1">
	<div id = "head">
		<span id = "heading">Menu Box</span>
	</div>
	<div class = "opt-1"><img src = "cal.png"><span>Transportation</span></div>
	<div class = "opt-1"><img src = "cal.png"><span>Places of Interest</span></div>
	<div class = "opt-1"><img src = "cal.png"><span>Hotel Reservations</span></div>
	<div class = "opt-1" style="border-bottom: 6px solid transparent;"><img src = "cal.png"><span>Account Settings</span></div>

	</div>

	<div id = "box2">
		<img src="pp.jpg"><br>
		<div id = "pp-name">Yash Wardhann</div><br>
		<div id = "pp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		tempor incididunt </div>
	</div>
	<div id = "box3">
		<div id = "head">
			<div id = "city">New Delhi</div>
		</div>
		<div id = "time">
			<span>Time</span>
		<div id = "clock"></div>
		</div>
		<div id = "weather">
			<span>Temp</span>
			<div id = "temp">32 C</div>
		</div>
		<div id = "date">
			<span>Date</span>
			<div id = "date-info"><?php echo date("Y/m/d")?></div>
		</div>			
	</div>
	</div>
	<div id = "box4"></div>
	<div id = "box5"></div>
	<div id = "box6">
		
		<?php  function getCoordinates($address){
		 
		$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
		 
		$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
		 
		$response = file_get_contents($url);
		 
		$json = json_decode($response,TRUE); //generate array object from the response from the web
		 
		return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
		 
		}
		$pos =  getCoordinates('The Shri Ram School, Moulsari
		V-37, Moulsari Avenue Phase III, DLF City, Gurgaon, Haryana 122009, India');




		echo '<script src="https://maps.googleapis.com/maps/api/js"></script>'; 
		echo '<script type="text/javascript">
		  function initialize() {
		    var position = new google.maps.LatLng('.$pos.');
		    var myOptions = {
		      zoom: 15,
		      center: position,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		    var map = new google.maps.Map(
		        document.getElementById("map_canvas"),
		        myOptions);
		 
		    var marker = new google.maps.Marker({
		        position: position,
		        map: map,
		        title:"You are here!"
		    });  
		 
		    var contentString = "xyz content string";
		    var infowindow = new google.maps.InfoWindow({
		        content: contentString
		    });
		 
		    google.maps.event.addListener(marker,"click", function() {
		        infowindow.open(map,marker);
		    });
		 
		  }
		 google.maps.event.addDomListener(window, "load", initialize);
		</script>';

		?>
  <div id="map_canvas" style="width:100%; height:100%"></div>
	</div>
</div>
<div id ="forscroll">A</div>
</body>
</html>