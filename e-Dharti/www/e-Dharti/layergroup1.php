<?php

if(!isset($_POST["submit"]))
	{	
 $filen = $_POST['file'];
 //if(empty($aDoor))
 // {
	//  echo("You didn't select any buildings.");
	 // }
//else{
$N = count($filen);
//echo $N;
//echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
		{
			$ff=$filen[$i] . " ";
			
			
			
			//echo $ff;
			//$name="h";
			 "<layerGroup><name>dfd</name><layers>";
				  for($j=1; $j< $N ;$j++)
				  {
					 echo "layer".$ff."<br/>";
					//echo $l2;
				  }
		    "</layers><styles>
    <style>roads_style</style>
    <style>polygon</style>
    <style>polygon</style>
  </styles>
</layerGroup>"; 


			
			
			

    }

  }

	//echo($filen[$i] . " ");
	 ?>