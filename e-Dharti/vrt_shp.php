

<?php
// Start the session
session_start();

//$inputfile=$_SESSION["inputfile"];	
$filename=$_SESSION["without_extension"];


// gdal_translate converts GIS data
// in this case, simply copy a GeoTIFF with no transforms
//$command ='ogr2ogr -f "ESRI Shapefile" sample_xy.dbf sample_xy.csv';
 //$a= $_GET['fa']; 
// echo $a;
$vrt=".vrt"; 


 $b= $filename.''.$vrt;
 //echo $b; 
 //echo "var";
$command="C:/OSGeo4W64/bin/ogr2ogr.exe -f \"ESRI shapefile\" C:/wamp64/www/e-Dharti/upload/$filename C:/wamp64/www/e-Dharti/upload/$b";

shell_exec($command);
echo '<script>window.location.href = "converter_output.php";</script>';
//echo"abc";
?>



