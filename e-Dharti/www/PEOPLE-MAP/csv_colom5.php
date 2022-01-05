<?php

// Opening the file for reading...
$fp = fopen('H:\data\sample_xy.csv', 'r');

// Headrow
  $head = fgetcsv($fp, 4096, ';', '"');
 print_r($head); 
 
 if($head  == 'a,b')
	 echo 'yes';
 else 
	 echo 'no';
 

// Rows
/*while($column = fgetcsv($fp, 4096, ';', '"'))
{
    // This is a great trick, to get an associative row by combining the headrow with the content-rows.
    $column = array_combine($head, $column);

    echo $column['column1']; */
	
	?>