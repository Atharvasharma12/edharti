
<html>
<head>
</head>
<body>
<form action="controlofgroup.php" method="post">


   
<input type="checkbox" name="formDoor[]" value="indiantaluks_geo86" />Acorn Building<br />
<input type="checkbox" name="formDoor[]" value="railways25" />railways25<br />
<input type="checkbox" name="formDoor[]" value="C" />Carnegie Complex<br />
<input type="checkbox" name="formDoor[]" value="D" />Drake Commons<br />
<input type="checkbox" name="formDoor[]" value="E" />Elliot House

<input type="submit" name="formSubmit" value="Submit" />

</form>
</body>
</html>
<!--

/*
$tname="india_sta";
echo $color;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8000/geoserver/rest/layergroups");	
curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver");

	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array("Content-type: application/xml"));	
	//$title="states";
	$xmlStr2 = "<layerGroup>
  <name>$tname</name>
  <layers>
    <layer></layer>
	</layers>
  <styles>
    <style>point_style21</style>
    <style>point_style66</style>
    
  </styles>
</layerGroup>";
 curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);

	
	curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
*/
	--> 