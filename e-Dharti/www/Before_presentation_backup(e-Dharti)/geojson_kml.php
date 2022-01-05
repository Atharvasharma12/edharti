

<?php
// Start the session
session_start();
?>


<?php


$inputfile=$_SESSION["inputfile"];
$outputfile=$_SESSION["outputfile"];
$coordinate=$_SESSION["coordinate"];
$without_extension = pathinfo($inputfile, PATHINFO_FILENAME);
$_SESSION["without_extension"]="$without_extension";

//echo $inputfile;
//echo $outputfile;
//echo $coordinate;
//echo $without_extension;


$kml=".kml";

$gmalexe=$without_extension.''.$kml;
//$shp=".shp";
//$ff=$without_extension.''.$shp;
//echo $ff;

$command="C:/OSGeo4W64/bin/ogr2ogr.exe -f \"KML\" -a_srs EPSG:4326 C:/wamp64/www/e-Dharti/upload/$gmalexe C:/wamp64/www/e-Dharti/upload/$inputfile";
 
shell_exec($command);
echo '<script>window.location.href = "con_output_witho_publish.php";</script>';

?>