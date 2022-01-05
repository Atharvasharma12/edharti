<?php  
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//$email=$_SESSION["email"];
$name=$_SESSION["name"];
echo $pfilename=$_SESSION["filenamewith_rr"];
echo  $workspace=$_SESSION["workspace"];
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	
	
	
	
	
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/> 

    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
   integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
   crossorigin=""></script>
 <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
 
 <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>


         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <title>E - Dharthi...</title> 
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.css" type="text/css" crossorigin="">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.2.0/leaflet.js" crossorigin=""></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

 

 
 
 <!--  FOntawesome file         --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	<!--end -->
 
 
 
<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		#map {
			width: 100%;
			height: 100%;
		}
	</style>
</head>



<body>

<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="images/logo1.png" style="width:50px;height:50px;">
					E - Dharthi...</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home.php">HOME</a></li>
							<!--li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li-->
							<li class="active"><a href="converters.php">CONVERTER</a></li>
							<li><a href="hotel.html">PROFILE</a></li>
							
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="#"><?php echo $name?><i class="fa fa-user-circle" style="margin-left:5px;color:#F78536"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
  <div class="w3-container">
    <!--h1>My Page</h1-->
  </div>
</div>





<div class="w3-container">

<div id='map'></div>

<script>

	var cartoLight = L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png", {
  maxZoom: 25,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>'
});


var bhuvanSatellite = L.tileLayer('http://tile1.nrsc.gov.in/tilecache/tilecache.py/1.0.0/bhuvan_imagery2/{z}/{x}/{y}.jepg?name:fr', {
         attribution: 'NRSC/ISRO'

         });
		 
		 var mapboxSat= L.tileLayer.wms('http://bhuvannuis.nrsc.gov.in/bhuvan/gwc/service/wms/?', {
			layers: 'india3',
			transparent: true,
			attribution: 'Map data &copy; <a href="http://bhuvan.nrsc.gov.in/bhuvan_links.php">Bhuvan, NRSC</a>',
			//maxZoom: 30
			
		});
		 
		



		
		 
		 var cities = L.layerGroup();

	 L.tileLayer.wms('http://localhost:8000/geoserver/<?php echo $workspace?>/wms?', {
			
		layers: '<?php echo $workspace?>:<?php echo $pfilename?>',
		maxZoom: 40,
		format: 'image/png',
        transparent: true
			}).addTo(cities);
		/*	
		var state = L.layerGroup();	
	 L.tileLayer.wms('http://bhuvan-panchayat.nrsc.gov.in:8080/geoserver/sde/wms/?', {
			layers: 'sde:statenew',
			attribution: 'Map data &copy; <a href="http://bhuvan.nrsc.gov.in/bhuvan_links.php">Bhuvan, NRSC</a>',
			maxZoom: 25,format: 'image/png',
			transparent: true 
			
		}).addTo(state);
		
		
		var road = L.layerGroup();	
		 L.tileLayer.wms('http://bhuvan-panchayat.nrsc.gov.in:8080/geoserver/sde/wms/?', {
			layers: 'sde:Road',
			attribution: 'Map data &copy; <a href="http://bhuvan.nrsc.gov.in/bhuvan_links.php">Bhuvan, NRSC</a>',
			maxZoom: 25,format: 'image/png',
			transparent: true 
			
		}).addTo(road);

		
		var rail = L.layerGroup();	
 L.tileLayer.wms('http://bhuvan-panchayat.nrsc.gov.in:8080/geoserver/sde/wms/?', {
			layers: 'sde:Rail',
			attribution: 'Map data &copy; <a href="http://bhuvan.nrsc.gov.in/bhuvan_links.php">Bhuvan, NRSC</a>',
			maxZoom: 25,format: 'image/png',
			transparent: true 
			
		}).addTo(rail);
		*/
		
		

map = L.map("map", {
 // zoom: 6,
  //center: [77.4126,23.2599],
  layers: [bhuvanSatellite,cities],
  zoomControl: true,
  attributionControl: false
}).setView([23.2599,77.4126], 5);


var baseLayers = {
		"CartoLight": cartoLight,
		"Bhuvan Satellite": bhuvanSatellite,
		"MapboxSat":mapboxSat
	};

	var overlays = {
		"India": cities,
		//"State": state,
		//"Road": road,
		//"rail": rail,
	};
	
	L.control.layers(baseLayers, overlays).addTo(map);

	
	
	
	
	
</script>

</div>
<script>
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>
<footer>
			<div id="footer">
				<div class="container">
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>


</html>