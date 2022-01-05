

<?php
//echo file_exists("C:/Users/hp/Desktop/shapefile/x/");

?>



<!--?php
$folderPath = 'C:/Users/hp/Desktop/shapefile/x';
$file = glob($folderPath . '*');
$countFile = 0;
if ($file != false)
{
    $countFile = count($file);
}
print_r($countFile);
?-->

<!--?php
$dir = "C:/Users/hp/Desktop/shapefile/x/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    // echo  $file  ."<br>";
	
	  $path_info = pathinfo($file);
	  $e=$path_info['extension']; 
	// echo $e;
	
	  $onlyfilename= basename($file,".".$e);
	  //echo $onlyfilename;
	  
	 // $b="1";
	//   $fooboo = "$onlyfilename" . "$b";
	 //  echo $fooboo;
	   
	 // echo basename($fooboo);
	  
	  

	  
	   
}}}
closedir($dh);

?>


<1--?php

if ($handle = opendir('C:/Users/hp/Desktop/shapefile/x')) {
    while (false !== ($fileName = readdir($handle))) {
        $newName = str_replace("SKU#","",$fileName);
        rename( $onlyfilename, $newName);
    }
    closedir($handle);
}
?>




<?php
function sequentialImages($path, $sort=false) {
 $i = 1;
 $path="C:/Users/hp/Desktop/shapefile/x";
 $files = glob($path."/{*.shp,*.shx,*.prj,*.dbf,*.cpg,*.qix}",GLOB_BRACE|GLOB_NOSORT);
 
 if ( $sort !== false ) {
  usort($files, $sort);
 }
 
 $count = count($files);
 foreach ( $files as $file ) {
       //$newname = str_pad($i, strlen($count), '0', STR_PAD_LEFT);
	 $newname="aa";
  $ext = substr(strrchr($file, '.'), 1);
  $newname = $path.'/'.$newname.'.'.$ext;
  if ( $file != $newname ) {
   rename($file, $newname);  
  }
  $i++;
 }
}


function sort_by_mtime($file1, $file2) {
 $time1 = filemtime($file1);
 $time2 = filemtime($file2);
 if ( $time1 == $time2 ) {
  return 0;
 }
 return ($time1 < $time2) ? 1 : -1;
}


sequentialImages('files','sort_by_mtime');
?>




