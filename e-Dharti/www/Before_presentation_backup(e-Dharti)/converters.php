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
	<!--  image script -->
	<style>
	input {
  font-size: 20px;
  height:50px;
}
.imagediv {
	float:left;
    margin-top:50px;
}
.imagediv .showonhover {
	background:red;
	padding:20px;
	opacity:0.9;
	color:white;
	width: 100%;
	display:block;	
	text-align:center;
	cursor:pointer;
}
</style>	
	
	<!--  -->
	
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="images/s_j.jpg" style="width:50px;height:50px;">
					People Map</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home.php">HOME</a></li>
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
							<li><a href="#"><?php echo $name ?><i class="fa fa-user-circle" style="margin-left:5px;color:#F78536"></i></a></li>
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
				
				
				
				
				<section class="gallery indexgallery py-5 my-lg-5" id="gallery">
<!--div class="container"-->
	
		<div class="agileinfo_work_grids">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 w3_agile_work_grid gallery1">
					<div class="wthree_work_grid1">
					<form id="converters" action="uploads.php">
						
							<div class="agile_work_grid w3_agileits_sub_work">
						
							<img src="images/g1.png" type="file" alt="" class="img-responsive"/>
						     <input type="file" name="file" id="file">
							<br />
                            <span id="uploaded_image"></span>
							</div>
						
						</form>
					</div>
					
					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 w3_agile_work_grid">
					<div class="wthree_work_grid1">
						<a href="images/gg1.jpg" class="b-link-stripe b-animate-go  swipebox" title="Indus Fact">
							<div class="agile_work_grid w3_agileits_sub_work">
							<img src="images/gg1.jpg" alt=" " class="img-responsive" />
							<!--div class="agileits_w3layouts_work text-center">
								Indus Fact
							</div-->
							</div>
						</a>
					</div>
					
					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 w3_agile_work_grid">
					<div class="wthree_work_grid1">
						<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox" title="Indus Fact">
							<div class="agile_work_grid w3_agileits_sub_work">
							<img src="images/drop.png" alt=" " class="img-responsive" />
							<!--div class="agileits_w3layouts_work text-center">
								Indus Fact
							</div-->
							</div>
						</a>
					</div>
					
					
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 w3_agile_work_grid">
					<div class="wthree_work_grid1">
						<a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox" title="Indus Fact">
							<div class="agile_work_grid w3_agileits_sub_work">
							<img src="images/ftp	.jpg" alt=" " class="img-responsive" />
							<!--div class="agileits_w3layouts_work text-center">
								Indus Fact
							</div-->
							</div>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>	




</div>
</div>
<div class="container">
  <h2>My Drive</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  
  
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>File Name</th>
        <th>Publish</th>
        <th>Date</th>
		<th>Action</th>	
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
		<td>Doe</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
		<td>Doe</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
		<td>Doe</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
		<td>Doe</td>
      </tr>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

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


<!--script>
$('#file').change(function() {
  $('#converters').submit();
});
</script-->
<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['kml','geojson','csv']) == -1) 
  {
   alert("Invalid File Extension");
    return false;
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 200000000)
  {
   alert("File Size is very big");
   return false;
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"uploads.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>File Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>
