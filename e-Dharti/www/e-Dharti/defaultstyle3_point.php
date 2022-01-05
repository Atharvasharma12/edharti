<?php
session_start();
echo $stylename=$_SESSION["stylename"];
$email=$_SESSION["email"];
$workspace=$_SESSION["workspace"];
$filename_ram=$_SESSION["filenamewith_rr"];
$filesize=$_SESSION["files"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layers/$workspace:$filename_ram");

curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, 'admin:geoserver');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
	  curl_setopt($ch, CURLOPT_HTTPHEADER,
              array('Content-type: application/xml'));
    $xmlStr2 = "<layer><name>$filename_ram</name><type>VECTOR</type><defaultStyle><name>$stylename</name><workspace>$workspace</workspace></defaultStyle></layer>";
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resourcesl
curl_close($ch);
$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "peoplemap";
$con =  pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
$sql = "INSERT INTO publishlayer(email,filename,workspace,datastore,dateandtime,style,stylename,sldname,filesize) VALUES ('".$email."','".$filename_ram."','".$workspace."','".$workspace."',NOW(),'point','".$stylename."','point_style.sld','".$filesize."')"; 
 //  $data = pg_query($con, $query);	
if (pg_query($con, $sql)) {
   echo '<script>window.location.href = "publishmap.php";</script>';
   //echo "yes";
}




		?>












