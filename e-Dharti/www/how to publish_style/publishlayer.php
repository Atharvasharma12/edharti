<?php

$ch = curl_init();
/*
 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");
// grab URL and pass it to the browser	
//curl_exec($ch);
curl_setopt($ch, CURLOPT_HTTPHEADER,
                          array("Content-type: application/xml"));
        $xmlStr = "<workspace><name>disha</name></workspace>";
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr);


	
	
 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/disha/datastores/");	

 
 //datastore
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");
	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr1 = "<dataStore>
     <name>xyz</name>
     <connectionParameters>
     <host>localhost</host>
     <port>5432</port>
     <database>db_DEMO</database>
     <schema>public</schema>	
     <user>postgres</user>
     <passwd>postgres</passwd>
     <dbtype>postgis</dbtype>
     </connectionParameters>
     </dataStore>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr1);
*/
	
	//feature	
	 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/anjali1/datastores/sates/featuretypes/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<featureType><name>natural</name></featureType>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
echo '<script>window.location.href = "style1.php";</script>';
		?>