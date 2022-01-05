<?php

$ch = curl_init();

	 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/styles");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<style><name>road_good</name><filename>road_st.sld</filename></style>";
		
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
echo '<script>window.location.href = "sldfile2.php";</script>';
		?>