





<?php
//$path_info = pathinfo('C:\wamp64\www\PEOPLE-MAP\zip\shapefile\Sacramentorealestatetransactions14.shp');

//echo $path_info['extension']; 

?>


<!--?php
$dir = "C:\wamp64\www\PEOPLE-MAP\zip\shapefile";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
     // echo "filename:" . $file . "<br>";
	  
	  $path_info = pathinfo($file);



if($path_info['extension']!='dbf' || 'prj' ||'shp' ||'shx')
	  
  //echo $path_info['extension']; 
  echo "error";
  else 
	  
  echo "right";
  
    }
    closedir($dh);
  }
}
?-->



<?php
$dir = "C:\wamp64\www\PEOPLE-MAP\zip\shapefile";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
//$b = scandir($dir,1);

print_r($a);
//print_r($b);


//for($i=0;$i<=3;$i++)
//{
	//if($a[$i]=='dbf' || 'prj' ||'shp' ||'shx')
	//	echo "yes" ;
	
	
//}

 $path_info = pathinfo($dir);
 
echo $path_info['extension'];         



?>