<?php
// Start the session
session_start();
?>


<?php


if(isset($_POST["submit"]))
{
 
	  $iname=$_POST['inputfile'];
	 $oname=$_POST['outputfile'];
	  
	  $without_extension = pathinfo($iname, PATHINFO_FILENAME);
	  $_SESSION["iname"] = "$iname";
	  $_SESSION["without_extension"] = "$without_extension";
	 //$f=$_SESSION["test"];	
	 //$filename=$_SESSION["without_extension"];
	//$f=$_POST['file1'];
	//$f1=$_POST['f_name1'];
	
//$f=$_POST['file'];
//echo $f;
//$f1=$_POST['f_name'];
$dbf=".dbf";
$ff=$without_extension.''.$dbf;
echo $ff;

//$command ='ogr2ogr -f "ESRI Shapefile" sample_xy.dbf sample_xy.csv';


//$command="C:/OSGeo4W64/bin/ogr2ogr.exe -f \"ESRI shapefile\" C:/wamp64/www/travel/upload/$ff C:/wamp64/www/peepals_map/travel/$iname";
//$command="C:\OSGeo4W64\bin\ogr2ogr.exe -f \"ESRI shapefile\" C:\wamp64\www\peepals_map\upload\$ff C:\wamp64\www\peepals_map\upload\$f";
//$command="C:\OSGeo4W64\bin\ogr2ogr.exe -f \"ESRI shapefile\" C:\wamp64\www\peepals_map\upload\sample_xy.dbf C:\wamp64\www\peepals_map\upload\sample_xy.csv";
//echo $command;
//shell_exec($command);

//printf("created");





$a=".vrt";
$filepath="C:/wamp64/www/travel/upload/$without_extension";
$myfile = fopen($filepath.''.$a, "w") or die("Unable to open file!");
$txt = "<OGRVRTDataSource>
  <OGRVRTLayer name=$without_extension>
    <SrcDataSource>C:/wamp64/www/travel/upload/$iname</SrcDataSource>
    <SrcLayer>$without_extension</SrcLayer>
    <GeometryType>wkbPoint</GeometryType>
    <LayerSRS>+proj=stere +lat_0=90 +lat_ts=71 +lon_0=-39 +k=1 +x_0=0 +y_0=0 +datum=WGS84 +units=m +no_defs</LayerSRS>
    <GeometryField encoding='PointFromColumns' x='x' y='y'/>
  </OGRVRTLayer>
</OGRVRTDataSource>";
fwrite($myfile, $txt);
//$txt = "Jane Doe\n";
//fwrite($myfile, $txt);
fclose($myfile);

// $url = 'vrt_shp.php';
  //  $url .= '?fa=$f1';
    
	

//    header('Location: '.$url);

//header("Location: vrt_shp.php?var=".$f1.""); 



}
?>
<script>
  window.location.href = "csv_shp.php";
</script>
