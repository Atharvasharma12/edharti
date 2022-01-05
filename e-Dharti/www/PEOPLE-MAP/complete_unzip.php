<?php

$zip = new ZipArchive;
 $a="railways.zip";
$file="C:/Users/hp/Desktop/shapefile/$a" ;

//echo $file; 
$res = $zip->open($file);
if ($res === TRUE) {
	//$aa="tes";
	
	$newname="anjali123";
	
           //  mkdir('C:/wamp64/www/PEOPLE-MAP/zip/$fff');
$f="C:/wamp64/www/PEOPLE-MAP/zip/$newname/";
//$d="C:/wamp64/www/PEOPLE-MAP/zip/";

  $zip->extractTo("$f");
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}



function sequentialImages($path, $sort=false) {
$i = 1;
$newname="anjali123";
$f="C:/wamp64/www/PEOPLE-MAP/zip/$newname/";
 $path=("$f");
 //echo $f;
 //echo $path;
 $files = glob($path."/{*.shp,*.shx,*.prj,*.dbf,*.cpg,*.qix}",GLOB_BRACE|GLOB_NOSORT);
 
 if ( $sort !== false ) {
  usort($files, $sort);
 }
 
 $count = count($files);
 foreach ( $files as $file ) {
       //$newname = str_pad($i, strlen($count), '0', STR_PAD_LEFT);
	$newname="anjali123";
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
