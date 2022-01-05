<?php
session_start();
$filename=$_SESSION["uploadfilename"];
echo $filename;
$f=$_SESSION["filenamewith_r"];
echo $f; 	 		
$zip = new ZipArchive;
$file="C:/wamp64/www/e-Dharti/zip_shape/$f.zip";

//echo $file;
$res = $zip->open($file);
if ($res === TRUE) {
  $zip->extractTo('C:/wamp64/www/e-Dharti/unzip_upload/'.$f);
  $zip->close();
  echo 'yes!';
} else {
  echo 'no!';
}
//echo '<script>window.location.href = "zip_file_unzip.php";</script>';
?>