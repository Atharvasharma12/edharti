<?php

  //$aDoor = $_POST['formDoor'];
 // if(empty($aDoor)) 
  //{
  // echo("You didn't select any buildings.");
  //} 
 // else 
  //{
   // $N = count($aDoor);

    //echo("You selected $N door(s): ");
  //  for($i=0; $i < $N; $i++)
   // {
		
    // $f=$aDoor[$i]."<br/>";
	 // echo $aDoor[0];
    //}
 // }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layergroups");	
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));	
			   
	$title="state_t";
	$xmlStr2 = "<layerGroup>
  <name>$title</name>
   <layer>indiantaluks_geo86</layer>
	<layer>railways25</layer>
  <layer></layer>
  <layers>
  <layer><layer>
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

//echo '<script>window.location.href = "grouppublishmap.php";</script>';
	 ?>