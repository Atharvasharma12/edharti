
<?php



 $inputfile = $_GET['inputfile'];
 $outputfile = $_GET['outputfile'];
 $coordinate = $_GET['coordinate'];
 
// echo  $inputfile;
 //echo $outputfile;
 //echo  $coordinate;
 

$ext = pathinfo($inputfile, PATHINFO_EXTENSION);
//echo $ext;
session_start();

$_SESSION["inputfile"] = "$inputfile";
$_SESSION["outputfile"]="$outputfile";
$_SESSION["coordinate"]="$coordinate";




// Returns html
//echo $ext;
if($ext=='csv' && $outputfile=='ESRI Shapfile')
{
	echo '<script>window.location.href = "dbf_vrt1.php";</script>';
}
if($ext=='kml' && $outputfile=='ESRI Shapfile')
{
	echo '<script>window.location.href = "kml_shp.php";</script>';
}

 
if($ext=='geojson' && $outputfile=='ESRI Shapfile')
{
	echo '<script>window.location.href = "geojson_shp.php";</script>';
}

if($ext=='geojson' && $outputfile=='GML')
{
	echo '<script>window.location.href = "geojson_gml.php";</script>';
}
if($ext=='geojson' && $outputfile=='KML')
{
	echo '<script>window.location.href = "geojson_kml.php";</script>';
}


//echo $outputfile;
//if($ext=='csv' && $outputfile=='ESRI Shapfile')
//{
	//echo '<script>window.location.href = "vrt_shp.php";</script>';
//}

//if($ext=='kml' && $outputfile=='ESRI Shapfile')
//{
	
//echo '<script>window.location.href = "kml_shp.php";</script>';
//}
//else{
//	echo no;
//}



?>
 
 
 
