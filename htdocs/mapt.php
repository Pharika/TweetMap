
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"> 
  <head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/> 
    <title>Google Maps JavaScript API Example: Event Arguments</title> 
     <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAPE4WoS1rHy2fjeKDNLTPNhRkSy9yzul_YnVdsjGSmU1DXZqN6RTmR5XzQSdD7xjmcpWdUlD9Lxohnw"
            type="text/javascript"></script> 
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
    address = latlng;
    geocoder.getLocations(latlng, showAddress);
  }
}

function showAddress(response) {
  map.clearOverlays();
  if (!response || response.Status.code != 200) {
    alert("Status Code:" + response.Status.code);
  } else {
    place = response.Placemark[0];
    point = new GLatLng(place.Point.coordinates[1],place.Point.coordinates[0]);
    marker = new GMarker(point);
    map.addOverlay(marker);
	document.getElementById("latbox").value=place.Point.coordinates[1];
    document.getElementById("lonbox").value=place.Point.coordinates[0];
    marker.openInfoWindowHtml(
        '<b>orig latlng:</b>' + response.name + '<br/>' + 
        '<b>latlng:</b>' + place.Point.coordinates[1] + "," + place.Point.coordinates[0] + '<br>' +
        '<b>Address:</b>' + place.address);
  }
}
 
 
    </script> 
	
  </head> 
  <body onload="initialize()" onunload="GUnload()" style="background-color: #F4F4F3"> 
    <div id="map_canvas" style="width: 500px; height: 300px"></div> 
	<FORM target="two" action="Search4.php"  method="get">	
<TABLE> 
<TR><TD ALIGN="left"></TD><TD><INPUT SIZE=13 TYPE="HIDDEN" ID="latbox" NAME="L1" value="" ></TD></TR> 
<TR><TD ALIGN="left"></TD><TD><INPUT SIZE=13 TYPE="HIDDEN" ID="lonbox" NAME="L2" value="" ></TD></TR> 
<TR><TD ALIGN="left"></TD><TD> <INPUT TYPE=SUBMIT></TR> 
</TABLE> 
</FORM> 
  </body> 
</html> 