
<?php
// Start the session
session_start();
?>


<?php
//upload.php
if($_FILES['file']['name'] != '')
	//if(isset($_GET["submit"])&& $_FILES['file']['name'] != '')
{
	

	 
$test = $_FILES['file']['name'];
//$name = basename($_FILES["file"]["name"]);

 
 $_SESSION["test"] = "$test";
 
 $filesize=$_FILES[$file]['size'];
  $file_size =$_FILES['file']['size'];
  $file_tmp =$_FILES['file']['tmp_name'];
  $file_type=$_FILES['file']['type'];
 $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
 $_SESSION["file_extension"] = "$file_extension";
 $without_extension = pathinfo($test, PATHINFO_FILENAME);
  $_SESSION["without_extension"] = "$without_extension";
 $location = './upload/' . $test;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';

 //header('Location: xyz.php'); 
}

 
?>
<!--script>
  window.location.href = "converter1.php";
</script-->



