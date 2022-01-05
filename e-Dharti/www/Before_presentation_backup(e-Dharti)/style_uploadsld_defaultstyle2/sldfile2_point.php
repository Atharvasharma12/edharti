<?php

  //$contentType = 'application/vnd.ogc.sld+xml';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8000/geoserver/rest/styles/xyz21');
    curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver"); 

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array('Content-type: application/vnd.ogc.sld+xml'));
	
    $xmlStr2 = '<?xml version="1.0" encoding="UTF-8"?>
<StyledLayerDescriptor version="1.0.0" 
 xsi:schemaLocation="http://www.opengis.net/sld StyledLayerDescriptor.xsd" 
 xmlns="http://www.opengis.net/sld" 
 xmlns:ogc="http://www.opengis.net/ogc" 
 xmlns:xlink="http://www.w3.org/1999/xlink" 
 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  
<NamedLayer>
  <Name>point</Name>
  <UserStyle>
    <Title>Red Square </Title>
    <FeatureTypeStyle>
      <Rule>
        <PointSymbolizer>
              <Graphic>
                <Mark>
                  <WellKnownName>square</WellKnownName>
                  <Fill>
                    <CssParameter name="fill">#0000ff</CssParameter>
                  </Fill>
                </Mark>
              <Size>4</Size>
            </Graphic>
          </PointSymbolizer>
      </Rule>
    </FeatureTypeStyle>
  </UserStyle>
</NamedLayer>
</StyledLayerDescriptor>';
  curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlStr2);
  curl_exec($ch);
// close cURL resource, and free up system resources
curl_close($ch);
  // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   // curl_setopt($ch, CURLOPT_HEADER, false);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   // $rslt = curl_exec($ch);
    //$info = curl_getinfo($ch);
	?>