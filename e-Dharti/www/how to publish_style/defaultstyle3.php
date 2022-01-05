<?php

$ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layers/anjali1:natural");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
	  curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<layer><name>natural</name><type>VECTOR</type><defaultStyle><name>road_good</name><workspace>anjali1</workspace></defaultStyle></layer>";
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resourcesl
curl_close($ch);
//echo '<script>window.location.href = "layers.php";</script>';

		?>












