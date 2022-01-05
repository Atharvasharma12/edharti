<?php
session_start();

if(!isset($_POST["submit"]))
	{	
$tname=$_SESSION["tname"];
$workspace=$_SESSION["workspace"];
//echo $tname;
/*
 $filen = $_POST['file'];
 //echo $tname=$_SESSION["tname"];
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
			
		}	
			
			//echo $ff;
			//$name="h";
			/*
			 "<layerGroup><name>dfd</name><layers>";
				  for($j=1; $j< $N ;$j++)
				  {
					  //$layer="layer".$ff."<br/>";
					  $layer="layer".$ff;
					 
					//echo $l2;
				  }
				*/  
				   


			
			
			

    

  

	//echo($filen[$i] . " ");
	
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layergroups");	
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));	
	//$title="states";
	$xmlStr2 = "<layerGroup>
  <name>$tname</name>
  <workspace><name>$workspace</name></workspace>
  
  <layers>
    <layer>indiantaluks_geo86</layer>
	<layer>railways25</layer>
    </layers>
  <styles>
    <style>point_style21</style>
    <style>point_style66</style>
    
  </styles>
</layerGroup>";
 curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
}
echo '<script>window.location.href = "grouppublishmap.php";</script>';
	 ?>