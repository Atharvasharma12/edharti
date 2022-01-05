<?php

// gdal_translate converts GIS data
// in this case, simply copy a GeoTIFF with no transforms
//$command ='ogr2ogr -f "ESRI Shapefile" sample_xy.dbf sample_xy.csv';
$command="C:\OSGeo4W64\bin\ogr2ogr.exe -f \"ESRI shapefile\" C:\wamp64\www\PEOPLE-MAP\sample_xy.dbf C:\wamp64\www\PEOPLE-MAP\sample_xy.csv";

shell_exec($command);
printf("created");
?>