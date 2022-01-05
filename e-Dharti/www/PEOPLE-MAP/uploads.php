<?php
// Start the session
session_start();
?>


<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
	

	 
$test = $_FILES['file']['name'];
$fisize = $_FILES['file']['size'];
//$name = basename($_FILES["file"]["name"]);

 //$filesize = filesize($test);
 $_SESSION["test"] = "$test";
// $filesize=filesize("file");
 //$filesize=$_FILES['$test']['size'];
 
 
 //if ($_FILES['upfile']['size'] > 1000000) {
    //    throw new RuntimeException('Exceeded filesize limit.');
    //}
	
	
 $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
 $_SESSION["file_extension"] = "$file_extension";
 $without_extension = pathinfo($test, PATHINFO_FILENAME);
  $_SESSION["without_extension"] = "$without_extension";
 $location = './upload/' . $test;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 
$filesizes= $fisize.'bytes';


 //echo  $filesize;
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';

 //header('Location: xyz.php'); 
}

 
?>
<script>
  window.location.href = "converter1.php";
</script>
