<?php
$file = fopen("H:\data\sample.csv","r");
$a=fgetcsv($file);

//print_r(fgetcsv($file));
echo sizeof($a);

for($i=0;$i<=$a;$i++)
{
if(Array($i)== 'x' && 'y' ||  'xcoord' && 'ycoord' || 'xcoordinate' && 'ycoordinate'|| 'coordx' && 'coordy' || 'coordinatex' && 'coordinatey' || 'longitude' && 'latitude' || 'long' && 'lat'||'X' && 'Y' || 'XCOORD' && 'YCOORD'|| 'XCOORDINATE' && 'YCOORDINATE' || 'COORDX' && 'COORDY'|| 'COORDINATEX' && 'COORDINATEY'|| 'LONGITUDE' && 'LATITUDE' || 'LONG' && 'LAT')
{ return true;}	
	 
	

else {
return false;
	
}}
fclose($file);
?>