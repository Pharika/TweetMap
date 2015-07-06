
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"> 
  <head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/> 
    <title>Google Maps JavaScript API Example: Event Arguments</title> 
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAPE4WoS1rHy2fjeKDNLTPNhRkSy9yzul_YnVdsjGSmU1DXZqN6RTmR5XzQSdD7xjmcpWdUlD9Lxohnw"
            type="text/javascript"></script> 
	<link rel="stylesheet" href="search.css" type="text/css" media="screen" /> 	
	<link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
	<script type="text/javascript"> 
  var map;
var geocoder;
var address;

function initialize() {
  map = new GMap2(document.getElementById("map_canvas"));
  map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());
		
        map.setCenter(new GLatLng(40.730885,-73.997383), 15);
  GEvent.addListener(map, "click", getAddress);
  geocoder = new GClientGeocoder();
}

	function getAddress(overlay, latlng) {
  if (latlng != null) {
 window.open('Search2.php?L1=' + encodeURIComponent(latlng.y) + '&L2=' + encodeURIComponent(latlng.x) + '&rad=' + encodeURIComponent(document.getElementById('radiusbox').value),'two');
  map.clearOverlays();
  marker = new GMarker(latlng);
  map.addOverlay(marker);
 map.openInfoWindow(latlng,"Latitude:" + latlng.x + "Longitude:" + latlng.y);
  }
}
	
</script>
	
  </head>

 <BODY onload="initialize()" onunload="GUnload()" style="background-color: #4099FF;">
        <label>Enter the Radius of the search in miles:</label>
	<input type ="text" name="rad" id = "radiusbox"/> 
	<div id = "map_canvas" style="width: 600px; height: 800px">
	
	</div>
	

 </BODY>
</HTML>