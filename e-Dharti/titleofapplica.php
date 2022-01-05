<?php
// Start the session
session_start();
?>

<?php

if(isset($_POST["submit"]))
	{
		$tname = $_POST['tname'];
		//session_start();
		$_SESSION["tname"] = "$tname";
	}
	
 ///$tname=$_SESSION["tname"];
//echo $n=$_SESSION["name"];


	
//echo $email;
?>
<html><head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>e - Dharthi...</title>
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
<!-- for Table -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
	<!-- -->
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> 
input {
    
    border:0px;
}
</style>
  
  </head>
<body>
<script type="text/javascript" lang="javascript">
   checked=false;
    function checkAll(frm1){
        var aa=document.getElementById('frm1');
        
        
            if(checked==false){
                
            checked=true
            }
        else
        
        {
            
            checked=false
        }
            
         for(var i=0;i<aa.elements.length;i++) {
             
             
             aa.elements[i].checked=checked;
             
         }  
        } 
             
    
</script>
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
							<li><a href="home.php">Home</a></li>
							<!--li>
								<a href="vacation.html" class="fh5co-sub-ddown">Other</a>
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
							
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="#"><i class="fa fa-user-circle" style="margin-left:5px;color:#F78536"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	<div class="container" style="margin-top:20px;">	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="table-responsive"> 
<form  action="layergroup.php" method="post">
<table class="table table-hover">
		
		<thead style="background-color:#f1bb4e">
    <tr>
      
      <th scope="col-4" colspan="4">Your Map Projects</th>
     
    </tr>
  </thead>
  <thead>
    <tr>
      <th scope="col">select</th>
      <th scope="col">File Name</th>
      <th scope="col">Style</th>
      <th scope="col">Style Name</th>
    </tr>
  </thead>
  <tbody>
  	<?php
	$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
$query = 'select filename,style,stylename from publishlayer';
//$query1 = 'select * from publishlayer';

$result = pg_query($con,$query);
//$result1 = pg_query($con,$query1);
$i = 0;
	while($row = pg_fetch_array($result))
{
$filename=$row['filename'];
$style=$row['style'];
$stylename=$row['stylename'];
?>
    <tr>



      <th scope="row"><input type="checkbox" name="file[]" value="<?php echo $filename ?>"></th>
      <td><input type="text" name="fname" value="<?php echo $filename ?>"></td>
      <td><input type="text" name="style" value="<?php echo $style ?>"></td>
      <td><input type="text" name="stylename" value="<?php echo $stylename ?>"></td>
    </tr>
<?php
	}
	?>
  </tbody>
</table>

    <div class="col-md-4 col-lg-2">
      <input type="submit" class="btn btn-primary btn-block" value="Submit">
    </div>
  
</form>
</div>
</div>
<footer>
			<div id="footer" style="margin-top:185px;">
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
							<p><a href="#">People's-Map@2018</a>. Presented by DAVV's Student </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		      </div>
        </div>
		
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

</body></html>




<?php

?>







