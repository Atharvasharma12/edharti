<?php
session_start();


 $filename=$_SESSION["test"];
 //echo $filename;
 

$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Returns html
//echo $ext;

 


$outputfile = $_GET['outputfile'];

//echo $outputfile;
if($ext=='csv' && $outputfile=='ESRI Shapfile')
{
	echo '<script>window.location.href = "vrt_shp.php";</script>';
}

if($ext=='kml' && $outputfile=='ESRI Shapfile')
{
	
echo '<script>window.location.href = "kml_shp.php";</script>';
}
else{
	echo no;
}



?>
 
 
 
