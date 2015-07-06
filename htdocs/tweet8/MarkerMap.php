
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
var r1=null;
var r2=null;
var myrectangle;
var dragRectangle;

function initialize() {
  map = new GMap2(document.getElementById("map_canvas"));
  map.addControl(new GLargeMapControl());
        map.addControl(new GMapTypeControl());
		map.addControl(new GScaleControl());		
        map.setCenter(new GLatLng(40.730885,-73.997383), 15);
        eventOnClick1=GEvent.addListener(map, "click", getAddress);
        geocoder = new GClientGeocoder();
        dragRectangle=false;
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
		
function radiocheck()	{
	  if (document.f1.plc[1].checked)
	     {
	         //alert(document.f1.sex[1].value);
	        GEvent.removeListener(eventOnClick1);
			map.clearOverlays();
	        eventOnClick2=GEvent.addListener(map, 'click', mapClickRectangle);
            eventOnMove=GEvent.addListener(map, 'mousemove', mapDragRectangle);
	      }
	  if (document.f1.plc[0].checked)
	     {
	        // alert(document.f1.sex[0].value);
	        GEvent.removeListener(eventOnClick2);
			eventOnClick1=GEvent.addListener(map, 'click', getAddress);
	     }
	}
	
function mapClickRectangle(overlay,point)
{
r2 = null;
    if (!r1)
    {   // First click
        r1=point;
		 if (myrectangle != null) {
       	map.removeOverlay(myrectangle);
	}
        myrectangle=null;
        //dragRectangle=true;
    }
    else
    {   // Second click
	   	r2=point;
        GEvent.removeListener(eventOnMove);
	    myrectangle=null;
        //dragRectangle=false;
        draw_rectangle(r1,r2);	
	    r1=null;
    }
}

function mapDragRectangle(point)
{
 // if (dragRectangle)
   // {
	     // draw_rectangle(r1,point);
//	}
}

function draw_rectangle(a,b)
{

    if (myrectangle != null) 
	{
	map.removeOverlay(myrectangle);
	}
	
    myrectangle = new GPolygon(new Array(a,new GPoint(a.x,b.y),b,new GPoint(b.x,a.y),a),'#fd942d',1,1,'#96bdfe',.5); //make proerty clickable = false it should work.
    map.addOverlay(myrectangle);
	document.getElementById('lati').value=a;
	document.getElementById('long').value=b;
	calculateDistance(a.x,a.y,b.x,b.y);
	}

	function Calcrad(x)
	{
	return x*Math.PI/180;
	}
	
	function Calcdeg(x)
	{
	return x * 180/Math.PI;
	}
function calculateDistance(lat1,long1,lat2,long2)
{
		var R = 3963; // miles
		var dLat = Calcrad(lat2-lat1);
		var dLon = Calcrad(long2-long1);
		
		var m = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(Calcrad(lat1)) * Math.cos(Calcrad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2);
		
		var n = 2 * Math.atan2(Math.sqrt(m), Math.sqrt(1-m));
		
		var d = R * n;
		var radius = d/2;
		//alert(radius);
		var Bx = Math.cos(Calcrad(lat2)) * Math.cos(dLon);
		var By = Math.cos(Calcrad(lat2)) * Math.sin(dLon);
		var latd3 = Math.atan2(Math.sin(Calcrad(lat1))+Math.sin(Calcrad(lat2)),Math.sqrt((Math.cos(Calcrad(lat1))+Bx)*(Math.cos(Calcrad(lat1))+Bx) + By*By) ); 
		var longd3 = Calcrad(long1) + Math.atan2(By, Math.cos(Calcrad(lat1)) + Bx);
		var long3 = Calcdeg(latd3);
		var lat3 = Calcdeg(longd3);
		//alert('Lat1 = '+lat1+' Long1 = '+long1+' Lat2 = '+lat2+' Long2 = '+long2+' Lat3 = '+lat3+ ' Long3 = '+long3);
		document.getElementById('nlati').value=lat3;
     	document.getElementById('nlong').value=long3;
	    document.getElementById('rad').value=radius;
	    window.open('Search2.php?L1=' + encodeURIComponent(lat3) + '&L2=' + encodeURIComponent(long3) + '&rad=' + encodeURIComponent(radius),'two');
	
}
var latt="<?php echo $_GET['Loca'];?>";
if(latt)
{
var locat= latt.split("%");
geocoder = new GClientGeocoder();
for(i=0;i<10;i++)
{
if (geocoder) {
alert("hello" + locat[i]);
address=locat[i];
geocoder.getLatLng(address,function(point) {
if (!point) {
alert(address + " not found");
} else {
alert("point:" + point);
// map.setCenter(point, 13);
var marker = new GMarker(point);
map.addOverlay(marker);
}
}
);
}
}
}
  

	  
</script>
	
  </head>

 <BODY onload="initialize()" onunload="GUnload()" style="background-color: #4099FF;">
 <form name="f1">
        </div>
		<div>
		<label>Enter the Radius of the search in miles:</label>
	<input type ="text" name="rad" id = "radiusbox"/> 
	<br>
	<input type="radio" name="plc" value="male" id="radi" onclick="radiocheck();"/>FIND TWEETS NEAR A PLACE<br />
<input type="radio" name="plc" value="female" id="rec" onclick="radiocheck();"/> FIND TWEETS IN A SPECIFIED REGION(CLICK AT TWO DIFFERENT PLACES)
	
	</div>
	<div id = "map_canvas" style="width: 500px; height: 400px">
	</div>
	<div id="bot">
R1: <input type ="text"size="70" name="L1" id = "lati"\>
<br>
	R2:<input type ="text" size="70" name="L2" id = "long"\> 
	<br>
	New point Lat:<input type ="text" name="NL1" id = "nlati" \>
	<br>
	New point Lon:<input type ="text" name="NL2" id = "nlong"\> 
	<br>
	Radius: <input type ="text" name="rd" id = "rad"\>
	</div>
	</div>
</form>
 </BODY>
</HTML>