
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



$dbf=".dbf";
$ff=$without_extension.''.$dbf;
//echo $ff;

$command="C:/OSGeo4W64/bin/ogr2ogr.exe -f \"ESRI shapefile\" C:/wamp64/www/e-Dharti/upload/$ff C:/wamp64/www/e-Dharti/upload/$inputfile";
shell_exec($command);


$a=".vrt";
$filepath="C:/wamp64/www/e-Dharti/upload/$without_extension";
$myfile = fopen($filepath.''.$a, "w") or die("Unable to open file!");
$txt = "<OGRVRTDataSource>
  <OGRVRTLayer name=$without_extension>
    <SrcDataSource>C:/wamp64/www/e-Dharti/upload/$inputfile</SrcDataSource>
    <SrcLayer>$without_extension</SrcLayer>
    <GeometryType>wkbPoint</GeometryType>
        <LayerSRS>+proj=stere +lat_0=90 +lat_ts=71 +lon_0=-39 +k=1 +x_0=0 +y_0=0 +datum=WGS84 +units=m +no_defs</LayerSRS>
    <GeometryField encoding='PointFromColumns' x='x' y='y'/>
  </OGRVRTLayer>
</OGRVRTDataSource>";
fwrite($myfile, $txt);

fclose($myfile);
echo '<script>window.location.href = "vrt_shp.php";</script>';
?>