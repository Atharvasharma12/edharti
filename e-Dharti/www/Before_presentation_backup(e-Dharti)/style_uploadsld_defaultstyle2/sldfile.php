<?php

  //$contentType = 'application/vnd.ogc.sld+xml';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost:8000/geoserver/rest/styles/xyz9');
    curl_setopt($ch, CURLOPT_USERPWD, "admin:geoserver"); 

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	 curl_setopt($ch, CURLOPT_HTTPHEADER,
              array('Content-type: application/vnd.ogc.sld+xml'));
	
    $xmlStr2 = '<?xml version="1.0" encoding="ISO-8859-1"?>
<StyledLayerDescriptor version="1.0.0"
 xsi:schemaLocation="http://www.opengis.net/sld StyledLayerDescriptor.xsd"
 xmlns="http://www.opengis.net/sld"
 xmlns:ogc="http://www.opengis.net/ogc"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <!-- a Named Layer is the basic building block of an SLD document -->
  <NamedLayer>
        <Name>default_point</Name>
        <UserStyle>
        <!-- Styles can have names, titles and abstracts -->
          <Title>Default Point</Title>
          <Abstract>A sample style that draws a point</Abstract>
          <!-- FeatureTypeStyles describe how to render different features -->
          <!-- A FeatureTypeStyle for rendering points -->
          <FeatureTypeStyle>
                <Rule>
                  <Name>rule1</Name>
                  <Title>Red Square</Title>
                  <Abstract>A 6 pixel square with a red fill and no stroke</Abstract>
                        <PointSymbolizer>
                          <Graphic>
                                <Mark>
                                  <WellKnownName>triangle</WellKnownName>
                                  <Stroke>
                                        <CssParameter name="stroke">#66FF66</CssParameter>
                                  </Stroke>
                                  <Fill>
                                        <CssParameter name="fill">#66FF66</CssParameter>
                                  </Fill>
                                </Mark>
                          <Size>10</Size>
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