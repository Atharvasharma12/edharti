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
//echo $fisize;
 //$filesize = filesize($test);
 $_SESSION["test"] = "$test";
 $files=number_format($fisize / 1024, 2) . ' KB';
  $_SESSION["files"] = "$files";
 
// $filesize=filesize("file");
 //$filesize=$_FILES['$test']['size'];
 
 
 //if ($_FILES['upfile']['size'] > 1000000) {
    //    throw new RuntimeException('Exceeded filesize limit.');
    //}
	
	
 $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
 $_SESSION["file_extension"] = "$file_extension";
 $without_extension = pathinfo($test, PATHINFO_FILENAME);
  $_SESSION["without_extension"] = "$without_extension";
  $dot=".";
 $ramfile=$file_extension.''.$dot;
 $r=(rand(1,100));
  $uploadfilename=$without_extension.''.$r.''.$dot.''.$file_extension ;
  $_SESSION["uploadfilename"] = "$uploadfilename";
 $location = './upload/' . $uploadfilename;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 
//$filesizes= $fisize.'bytes';
//$_SESSION["$fisize"] = "$fisize";

//echo $files;
 //echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';

 //header('Location: xyz.php'); 
}

 
?>
<script>
  window.location.href = "converter1.php";
</script>
