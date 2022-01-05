
<?php

$email=$_SESSION["email"];
//echo $email;
$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
 
 
		
// $db=pg_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
     $con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
     $query = pg_query($con,"SELECT fullname FROM registration WHERE email = '".$email."'");
    // $rows = pg_num_rows($query);
     //$result = mysql_query("SELECT id,email FROM people WHERE id = '42'");
	  if(pg_num_rows($query) > 0)
	  {
		  
	  while($row = pg_fetch_array($query))
	  {
	  $name=$row['fullname'];
	  //echo $name;
	  }
	  }
	 //echo $name;
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

	
	
	<style>
	a.button4{
		
display:inline-block;
padding:0.3em 1.2em;
margin:0 0.1em 0.1em 0;
border:0.16em solid #f1bb4e;
border-radius:2em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#FFFFFF;
text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
text-align:center;
transition: all 0.2s;
}
a.button4:hover{
border-color: rgba(255,255,255,1);
}
@media all and (max-width:30em){
a.button4{
display:block;
margin:0.2em auto;
}
}


button.button1{
display:inline-block;
padding:0.35em 1.2em;
border:0.1em solid #f1bb4e ;
margin:0 0.3em 0.3em 0;
border-radius:0.12em;
box-sizing: border-box;
text-decoration:none;
font-family:'Roboto',sans-serif;
font-weight:300;
color:#F78536;
text-align:center;
transition: all 0.2s;
}
button.button1:hover{
color:white;
background-color:#f1bb4e;
}
@media all and (max-width:30em){
button.button1{
display:block;
margin:0.4em auto;
}
}


	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {margin-bottom:10px;}

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
					<h1 id="fh5co-logo"><a href="index.html"><!--i class="icon-airplane"></i-->
					<img src="images/s_j.jpg" style="width:50px;height:50px;">People Map</a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">HOME</a></li>
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
							<li><a href="converters.php">CONVERTER</a></li>
							<li><a href="hotel.html">PROFILE</a></li>
							<li><a href="contact.html">CONTACT</a></li>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="#"><?php echo $name?></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		
		<!--div id="fh5co-tours" class="fh5co-section-gray"-->
			<!--div class="container"-->
				
				
				
				
				<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Welcome <?php echo $name?> </h3>
						<img src="images/profile.png">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
				<div class="w3-container">
				<a href="something" class="button4" style="background-color:#f1bb4e">Create New Map</a>
               
			   <button id = "button1"  class="w3-btn w3-white w3-border w3-border-red w3-round-large" >All Map Projects</button>

			   <button  id = "button2" class="w3-btn w3-white w3-border w3-border-red w3-round-large">Uploaded Layers</button>
                
               <!--button   class="w3-btn w3-white w3-border w3-border-red w3-round-large">Sample Data</button-->
			   <!--button  class="w3-btn w3-white w3-border w3-border-red w3-round-large">Sample   Map</button-->
				
				
				</div>
				




<br/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="table-responsive">  
<?php

$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";

$con =  pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");



$query = 'select * from map';
$query1 = 'select * from registration';

$result = pg_query($con,$query);
$result1 = pg_query($con,$query1);
$i = 0;
?>

   
    <table  id = "mytable1" class="table">
	
	
	
	
    	<thead style="background-color:#f1bb4e">
    <tr>
      
      <th scope="col-4" colspan="4">Your Map Projects</th>
     
    </tr>
  </thead>
    	<tbody>
    <tr>
      <th scope="row">Name</th>
      <th scope="row">View</th>
	  <th scope="row">Delete</th>
	  <th scope="row">Date Create</th>
    </tr>
	
	
	<?php
	while($row = pg_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['csvname'] . "</td>";
echo "<td>"  . $row['csvname'] ."</td>";
echo "<td>" . $row['csvname'] ."</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
   
   ?>
	
   
   
  </tbody>
    </table>
	</div>

 <div class="table-responsive">    
    <table id = "mytable2" class="table">
    	<thead style="background-color:#f1bb4e">
    <tr>
      
      <th scope="col-4" colspan="6">Your Uploaded Map Layers</th>
     
    </tr>
  </thead>
    	<tbody>
    <tr>
      <th scope="row">Name</th>
      <th scope="row">View</th>
   <th scope="row">Publish Status</th>
      <th scope="row">Delete</th>
	    <th scope="row">Date Cerate</th>
		<th scope="row">Action</th>
    </tr>
    <?php
	while($row = pg_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['fullname'] . "</td>";
?>
 <td>DELETE</td>
<?php
echo "<td>"  . $row['role'] ."</td>";
echo "<td>" . $row['role'] . "</td>";
echo "<td>" . $row['role'] . "</td>";
echo "<td>" . $row['role'] . "</td>";
echo "</tr>";
}
   
   ?>
  </tbody>
    </table>

</div>

<script>
$(document).ready(function(){
  $("#mytable1").show();
     	$("#mytable2").hide();

     	$("#button1").click(function(){
            $("#text").html("Default List Name");
     		$("#mytable2").hide();
     		$("#mytable1").show();

     	});

     	$("#button2").click(function(){
     		$("#mytable1").hide();
     		$("#mytable2").show();
            $("#text").html("Second List Name");
     	});
});
</script>









		
			</div>
			
			
			
			</div>
		


		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Hotels</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Interest</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Affordable</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div>
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











