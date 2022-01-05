<?php
session_start();
$datastore=$_POST['datastore'];
//$dname=$_SESSION["dname"];
$email=$_SESSION["email"];
$workspace=$_SESSION["workspace"];
//echo $dname;

$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
 
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");


$query = pg_query($con,"INSERT INTO layerinfo (workspace, datastore, filename, date, publishstatus) VALUES ('$email', '$dname', '$filename')"); 


//echo $datastore;
$ch = curl_init();

	
	//feature	
	
	
	 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/$workspace/datastores/$datastore/featuretypes/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<featureType><name>sample_xy</name></featureType>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
echo '<script>window.location.href = "publishmap.php";</script>';
		?>