
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
	marker.openInfoWindowHtml(
        '<b>orig latlng:</b>' + response.name + '<br/>' + 
        '<b>latlng:</b>' + place.Point.coordinates[1] + "," + place.Point.coordinates[0] + '<br>' +
        '<b>Address:</b>' + place.address);
		
		//document.getElementById("twit").innerHTML= place.Point.coordinates[1];
		
		document.getElementById("lati").value=place.Point.coordinates[1];
        document.getElementById("long").value=place.Point.coordinates[0];
 		//alert(document.getElementById("lati").value);
var xmlhttp = null;
if(!window.XMLHttpRequest) {
   alert('Your browser is outdated');
} else {
   xmlhttp = new XMLHttpRequest();
   //alert("hello call");
   xmlhttp.open('GET', 'Search4.php?L1=' + encodeURIComponent(document.getElementById('lati').value) + '&L2=' + encodeURIComponent(document.getElementById('long').value) + '&rad=' + encodeURIComponent(document.getElementById('radiusbox').value), true);
   xmlhttp.onreadystatechange = handleResponse1;
   xmlhttp.send(null);
}

function handleResponse1() {
    //alert("hello0");
   if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
     // alert("hello1");
      //alert(xmlhttp.responseText);
      document.getElementById('twit').innerHTML = xmlhttp.responseText;
	  //alert("hello2");
   }
}
		
		
    
 }
}

 
  
	function gettweet()
	{
		//document.getElementById("twit").innerHTML= document.getElementById("searchbox").value;
		document.getElementById("src").value= document.getElementById("searchbox").value;
		

		
var xmlhttp = null;
if(!window.XMLHttpRequest) {
   alert('Your browser is outdated');
} else {
   xmlhttp = new XMLHttpRequest();
   //alert("hello call");
   xmlhttp.open('GET', 'Search2.php?q=' + encodeURIComponent(document.getElementById('src').value), true);
   xmlhttp.onreadystatechange = handleResponse;
   xmlhttp.send(null);
}

function handleResponse() {
     // alert("hello0");
   if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      //alert("hello1");
     alert(xmlhttp.responseText);
      document.getElementById('twit').innerHTML = xmlhttp.responseText;
	  //alert("hello2");
   }
}
}

  </script>
 </head>

 <BODY onload="initialize()" onunload="GUnload()" style="background-color: #4099FF;">
 <form align="center">
 <div id="top">
 Tweeting With Maps
 <br><br>
   Search twitter
  <input type ="text" name="q1" id = "searchbox"\>
	<input type ="button" value="Search" id = "b1" onclick="gettweet();"\>
	<label>Enter the Radius of the search in miles:</label>
	<input type ="text" name="rad" id = "radiusbox"/> 
 </div>
 <div id="container">
    
	<div id= "twit">

		</div>
		<input type ="hidden" name="q" id = "src"\>
	<div id = "map_canvas" style="width: 600px; height: 800px">
	
	
	</div>
	<input type ="hidden" name="L1" id = "lati"\>
	<input type ="hidden" name="L2" id = "long"\>

</div>
</form>
 </BODY>
</HTML>
