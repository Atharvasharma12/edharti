<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$email=$_SESSION["email"];
//$name=$_SESSION["name"];
//$dnames=$_SESSION["dname"];
$workspace=$_SESSION["workspace"];
//echo $dnames;
//$pfilename= $_SESSION["smallfn"];
$filenamewith_r=$_SESSION["filenamewith_r"];
$filenamewith_rr= strtolower($filenamewith_r);
$_SESSION["filenamewith_rr"] = "$filenamewith_rr";

 //$filenamewith_r;
 $ch = curl_init();

	
	//feature	
	 curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/$workspace/datastores/$workspace/featuretypes/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<featureType><name>$filenamewith_rr</name><srs>EPSG:4326</srs></featureType>";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
echo '<script>window.location.href = "typeselection.php";</script>';
		?>