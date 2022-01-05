<?php

$zip = new ZipArchive;
 $a="railways.zip";
$file="C:/Users/hp/Desktop/shapefile/$a"  ;

echo $file; 
$res = $zip->open($file);
if ($res === TRUE) {
	$aa="tes";
 $f= mkdir('$aa');

$d="C:/wamp64/www/PEOPLE-MAP/zip/";

  $zip->extractTo("$d"."$f");
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
?>