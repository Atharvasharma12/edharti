<?php
//$Style9="xyz22";
session_start();
if (isset($_POST['submit'])) {
$shape=$_POST['shape'];
$color=$_POST['color'];
$size=$_POST['size'];
$_SESSION["shape"] = "$shape";
$_SESSION["color"] = "$color";
$_SESSION["size"] = "$size";


$ran=(rand(10,100));
$stylename="point_style".$ran;
//echo $stylename;
$_SESSION["stylename"] = "$stylename";
//echo $stylename;





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/styles");	
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));
    $xmlStr2 = "<style><name>$stylename</name><filename>$stylename.sld</filename></style>";
		
	
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
}
echo '<script>window.location.href = "sldfile2_point.php";</script>';


		?>