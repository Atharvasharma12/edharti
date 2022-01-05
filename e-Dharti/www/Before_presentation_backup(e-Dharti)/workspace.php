<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$email=$_SESSION["email"];
$workspace=$_SESSION["workspace"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/workspaces/");	

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

//curl_exec($ch);
curl_setopt($ch, CURLOPT_HTTPHEADER,
                          array("Content-type: application/xml"));
        $xmlStr = "<workspace><name>$workspace</name></workspace>";
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr);

curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);

$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
 
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");

//session_start(); 
$email=$_SESSION["email"];
$sql = "UPDATE registration SET workspacesatus='1' WHERE email='$email'";
if(pg_query($con, $sql)){
   echo '<script>window.location.href = "datastoreform.html";</script>';
   //echo "yes";
} 



?>