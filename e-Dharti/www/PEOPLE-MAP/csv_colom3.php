<?php

$arr = array(array(),array());
$num = 0;
$row = 0;
$handle = fopen("H:\data\sample.csv", "r");

$file = fopen("H:\data\sample.csv","r");
$a=fgetcsv($file);
echo sizeof($a);

while($data = fgetcsv($handle,1000,",")){   
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
        echo    $arr[$row][$c] = $data[$c];
    }
    $row++;
}