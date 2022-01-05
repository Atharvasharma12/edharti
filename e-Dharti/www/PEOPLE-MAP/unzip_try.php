<?php

$zip = new ZipArchive;
$sourceFolder="C:/Users/hp/Desktop/shapefile/x/";
$file="railways.zip";
$res = $zip->open("$sourceFolder"."$file");
for ($i = 0; $i < $zip->numFiles; $i++)
{
$filename = $zip->getNameIndex($i);
$newname;
$arr=explode('.',$file );
if(substr_count($arr[0],"_")==2)
{
$underscorearr=explode('_',$arr[0] );
$newname=$underscorearr[1].'_'.$underscorearr[2];
}
else
{
$newname=$arr[0];
}
$nameindex=$i+1;
$newname.='.00'.$nameindex;

$zip->renameName($filename,$newname);
}

$d="C:/wamp64/www/PEOPLE-MAP/zip/";

$success=$zip->extractTo($d);
$zip->close();

?>