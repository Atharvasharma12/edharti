<?php
session_start();
//$stylename=$_SESSION["stylename"];
$workspace=$_SESSION["workspace"];
$filename_ram=$_SESSION["filenamewith_rr"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layers/$workspace:$filename_ram");

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, 'admin:geoserver');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
	  curl_setopt($ch, CURLOPT_HTTPHEADER,
              array('Content-type: application/xml'));
    $xmlStr2 = "<layer><name>$filename_ram</name><type>VECTOR</type><defaultStyle><name>point_style93</name><workspace>$workspace</workspace></defaultStyle></layer>";
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resourcesl
curl_close($ch);
//echo '<script>window.location.href = "layers.php";</script>';
		?>












