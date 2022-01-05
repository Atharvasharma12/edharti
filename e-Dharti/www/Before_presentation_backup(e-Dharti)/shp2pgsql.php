<?php


$command = "C:/Program Files/PostgreSQL/9.6/bin/shp2pgsql -I -s 4326 C:/wamp64/www/PEOPLE-MAP1/upload/sample_xy sample_xy | psql -U postgres -P postgres -d peoplemap";
  //echo $command;
  
  //$output = exec($command);
  //print_r($output);
   shell_exec($command);
 //exec($command,$out,$ret);
  //echo '<script>window.location.href = "xyz.php";</script>';
?>