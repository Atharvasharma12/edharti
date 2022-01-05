
<?php

// including the shapefile reader class
    require ('ShapeFile.inc.php');

// importing the downloaded shapefile
    $shp = new ShapeFile("C:\Users\hp\Desktop\shapefile\Sacramentorealestatetransactions14.shp", array('noparts' => false));

echo "hello";
	
 ?>