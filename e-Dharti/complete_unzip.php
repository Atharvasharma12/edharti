<?php
//Start the session
session_start();
$filenamewith_r=$_SESSION["filenamewith_r"];
$uploadfilename=$_SESSION["uploadfilename"];
 
 //echo $filenamewith_r;
 
$zip = new ZipArchive;
// $a="sample_xy.zip";
$file="C:/wamp64/www/e-Dharti/zip_shape/$uploadfilename" ;

//echo $file; 
$res = $zip->open($file);
if ($res === TRUE) {
	//$aa="tes";
	$filenamewith_r=$_SESSION["filenamewith_r"];
	$newname=$filenamewith_r;
	
           //  mkdir('C:/wamp64/www/PEOPLE-MAP/zip/$fff');
$f="C:/wamp64/www/e-Dharti/unzip_upload/$newname";
//$d="C:/wamp64/www/PEOPLE-MAP/zip/";

  $zip->extractTo("$f");
  $zip->close();
  //echo 'woot!';
}
// else {
  //echo 'doh!';
//}



function sequentialImages($path, $sort=false) {
$i = 1;
$filenamewith_r=$_SESSION["filenamewith_r"];
$newname=$filenamewith_r;
$f="C:/wamp64/www/e-Dharti/unzip_upload/$newname";

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
	$newname=$filenamewith_r;
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
echo '<script>window.location.href = "checkworkspace.php";</script>';
?>
