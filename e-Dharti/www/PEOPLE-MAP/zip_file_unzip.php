<?php

$zip = new ZipArchive;
 $a="waterways.zip";
$file="C:/Users/hp/Desktop/shapefile/$a"  ;

echo $file; 
$res = $zip->open($file);
if ($res === TRUE) {
  $zip->extractTo('C:\wamp64\www\PEOPLE-MAP\zip');
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
?>