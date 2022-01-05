<?php
session_start();
$name=$_SESSION["name"];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E - Dharthi...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
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

	
	
	<!-- gallery-Swipe-box -->
	<link rel="stylesheet" href="css/swipebox.css">
	<!-- //gallery-Swipe-box -->
	<!--table -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--end table    -->
	
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  
  
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  FOntawesome file         --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	<!--end -->
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="home.php"><img src="images/logo1.png" style="width:50px;height:50px;">
					E - Dharthi...</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home.php">HOME</a></li>
							<li><a href="converters.php">CONVERTER</a></li>
							<li><a href="hotel.html">PROFILE</a></li>
							
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="#"><?php echo $name?><i class="fa fa-user-circle" style="margin-left:5px;color:#F78536"></i></a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		
		

		<div id="fh5co-car" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>PEOPLE MAP CONVERTER</h3>
						<!--p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p-->
					</div>
					
					
				</div>
			</div>	
				<div class="container">
  
  <form class="form-inline" action="check_converter_condition.php">
  <div class="row">
    <div class="col-md-4 col-lg-2">
	<label>Input File</label>
     <select class="cs-select cs-skin-border"  id="gender1" style="width:100%" name="inputfile" required>
	 <?php 
	 
	 $filename=$_SESSION["uploadfilename"]?>
          <option><?php echo $filename ?></option>
          
        </select>  
		
    </div>
 
 
 <div class="col-md-4 col-lg-2" >
 <label for="class">Output File</label></br/>
     <select class="cs-select cs-skin-border" id="gender1" style="width:100%" name="outputfile" required>
	 <option value="">Output Formate</option>
          <option value="ESRI Shapfile">ESRI Shapfile</option>
          <option value="KML">KML</option>
		   <option>KMZ</option>
		   <option>GML</option>
		   <option>GEOJSON</option>
		   <option>CSV</option>
		
		   
        </select>  
    </div>
 
 <div class="col-md-4 col-lg-2">
 <label for="class">Coordinate System</label>
 <br/>
     <select class="cs-select cs-skin-border"  id="gender1"  name="coordinate" required>
	 <option value="">Coordinate System</option>
          <option value="WGS84(world)[EPSG:4326]">WGS84(world)[EPSG:4326]</option>
          <option>WGS 84/UTM zone 43N/[EPSG:32643]</option>
		  	<option>meter[EPSG:9001]</option>
		   <option>Modified Clarke 1880(South Africa)[EPSG:7013]</option>
        </select>  
    </div>
 
  
    <div class="col-md-4 col-lg-2">
	<label>	</label>
      <input type="submit" name="submit" value="Convert File" class="btn btn-primary btn-block">
    </div>
  </div>

  </form>
  <br/>
  <br/>
  <p style="color:red">** Please rename columns containing coordinates to any of these: x, xcoord, xcoordinate, coordx, coordinatex, longitude, long,X, XCOORD, XCOORDINATE, COORDX, COORDINATEX, LONGITUDE, LONG (and of course: y, ycoord, ycoordinate, coordy, coordinatey, latitude, lat,Y, YCOORD, YCOORDINATE, COORDY, COORDINATEY, LATITUDE, LAT).

</p>
</div>	
				
				
				

</div>
</div>



</div>

</div>


				
				
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
							<p>NRSC / RRSC-W ,ISRO</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	
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

