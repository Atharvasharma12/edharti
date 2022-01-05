<?php
session_start();
$name=$_SESSION["name"];
//$files=$_SESSION["filesizes"];
//$inputfile=$_SESSION["inputfile"];
//$outputfile=$_SESSION["outputfile"];
//$_SESSION["$coordinate"];
//$outputfile=$_SESSION["outputfile"];;

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PEOPLE MAP</title>
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
	
	
	<!--  FOntawesome file         --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	<!--end -->
	
	<!-- -->
	<style>
.bt {
    background-color:white ;
    border: none;
    color: DodgerBlue;
 
    cursor: pointer;
    
}

</style>
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="home.php"><img src="images/logo.png" style="width:50px;height:50px;">
					People Map</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="home.php">Home</a></li>
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
	
		<div class="container">
  <h2 style="margin-top:30px;">DATA</h2>
  <!--p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p-->                                                                                      
  <div class="table-responsive" style="margin-top:40px;">          
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>File Name</th>
        <th>OutPut Formate</th>
        <th>Output CRS</th>
		<th>File Size</th>
        <th>Action</th>
         
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
<?php 
	 
	 $outputfile=$_SESSION["outputfile"];
	 $inputfile=$_SESSION["inputfile"];
	 $coordinate=$_SESSION["coordinate"];
	  $filesize=$_SESSION["files"];
	  $without_exten = pathinfo($inputfile, PATHINFO_FILENAME);
	  
	  $smallfn=strtolower("$without_exten");
	  $shp=".shp";
     $ff=$without_exten.''.$shp;
	 $_SESSION["smallfn"] = "$smallfn";
	  //echo  $without_exten;
  //$_SESSION["without_extension"] = "$without_extension";
	 ?>
        <td><?php echo $ff;  ?></td>
        <td><?php echo $outputfile; ?></td>
        <td><?php echo $coordinate ;?></td>
		<td><?php echo $filesize; ?></td>
		
        <td>
		
		Download
    
		<button onclick="deleteRow(this)" class="bt"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></button>
</td>
 
    </tbody>
  </table>
 
 
</div>
		
  
  </div>
  
  <div class="container" style="margin-top:40px;">
  <form class="form-inline" action="shp2pgsql1.php">
  <input type="hidden" name="shapefile" value= <?php echo $ff ?>>
  <div class="row">
  <input type="submit" name="submit" value="Publish" class="btn btn-primary btn-block">
    </div>


  </form>
  <a href="converters.php" class="btn btn-primary btn-block" style="margin-top:10px;">Convert New</a>
  </div>	
  
 <script>
function deleteRow(r) {
var del = confirm("Do u really want to delete")

if (del){

alert("del confirmed")
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
	  window.location="converters.php";
	 
}
else

{

alert("del cancelled")

}
}
</script>
		

				
				
		<footer style="margin-top:202px;">
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



