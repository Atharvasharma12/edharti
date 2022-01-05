<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//session_start(); 
//$dname=$_POST['dname'];


//$email=$_SESSION["email"];
$workspace=$_SESSION["workspace"];

//$_SESSION["dname"] = $dname; 
//echo $dname;

$ch = curl_init();



 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/$workspace/datastores/");	

 
 //datastore
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");
	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr1 = "<dataStore>
     <name>$workspace</name>
     <connectionParameters>
     <host>localhost</host>
     <port>5432</port>
     <database>peoplemap</database>
     <schema>public</schema>	
     <user>postgres</user>
     <passwd>postgres</passwd>
     <dbtype>postgis</dbtype>
     </connectionParameters>
     </dataStore>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr1);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
  echo '<script>window.location.href = "layer1.php";</script>';
  
		?>