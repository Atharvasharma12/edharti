<?php
// create a new cURL resource
$ch = curl_init();
//$file=xml(realpath('C:\wamp64\www\peoplemap\demos.xml')) or die("error:can not create object");
//print_r($file);
// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");
// grab URL and pass it to the browser	
//curl_exec($ch);
curl_setopt($ch, CURLOPT_HTTPHEADER,
                          array("Content-type: application/xml"));
        $xmlStr = "<workspace><name>Disha</name></workspace>";
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr);

		/*curl_setopt($ch, CURLOPT_HTTPHEADER,
                          array("Content-type: application/xml"));
        $xmlStr = "<featureType><name>pointland</name></featureType>";
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr);
$response = curl_exec($ch);
*/
curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
?>