<?php
$Style9="xyz21";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/styles");	
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<style><name>$Style9</name><filename>point_styl9.sld</filename></style>";
		
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
//echo '<script>window.location.href = "layers.php";</script>';
		?>