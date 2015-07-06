<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
     <style type="text/css">
         html { height: 100% }
         body { height: 100%; margin: 0px; padding: 0px }
         #map_canvas { height: 100% }
     </style>
     <link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	 
<script type="text/javascript">
var map;
var marker= null;
var geocoder;
var address;
var r1=null;
var r2=null;
var myrectangle;
var dragRectangle;
var markersArray = [];
var latlngstr=' ';
var check;
var lat3 ;
var long3 ;
var radius ;
var latarray = new Array(10);
var longarray = new Array(10);
var Addarray = new Array(10);

function initialize() {
     geocoder = new google.maps.Geocoder();
     var myLatlng = new google.maps.LatLng(40.730885,-73.997383);
     var myOptions = {
         zoom: 15,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
        }
     map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
     eventOnClick1=google.maps.event.addListener(map, 'click', function(event) {
          getAddress(event.latLng);
        });
    }
//......................................................................................... 

function getAddress(location) {
     var clickedLocation = new google.maps.LatLng(location);
     if (myrectangle != null) {
         myrectangle.setMap(null);
	    }
     if(marker) {
         deleteOverlays();
        }
     revGeo(location);
    }
//.........................................................................................
function revGeo(point)
{
    var lat = point.lat();
    var lng = point.lng();
	var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
         if (results[1]) {
		         marker = new google.maps.Marker({
                 position: latlng,
                 map: map
			    });
		  
             map.setCenter(latlng);
             var res= results[6].formatted_address;
		     var infowindow = new google.maps.InfoWindow({
			     content: "latitude:" + point.lat() + "Longitude:" + point.lng() + "address" + res
                });
             infowindow.open(map, marker);
            }
		 var AdStr=res.split(",");
		 var n=AdStr.length;
		 var spl1=AdStr[n-3];
		 var spl2= AdStr[n-2];
		 window.open('Search2.php?L1=' + encodeURIComponent(point.lat()) + '&L2=' + encodeURIComponent(point.lng()) + '&rad=' + encodeURIComponent(document.getElementById('radiusbox').value) + '&addr1=' + encodeURIComponent(spl1)+ '&addr2=' + encodeURIComponent(spl2) + '&adf=' + encodeURIComponent(res),'two'); 
        } 
	 else {
		 alert("Geocoder failed due to: " + status);
        }
    });
 }

//.........................................................................................
function radiocheck()	{
	  if (document.f1.plc[1].checked) {
	         //alert(document.f1.plc[1].value);
	         if(marker) {
                 deleteOverlays();
                }
        	 google.maps.event.removeListener(eventOnClick1);
		     eventOnClick2=google.maps.event.addListener(map, 'click', function(event) {
                 mapClickRectangle(event.latLng);
                 });
             eventOnMove=google.maps.event.addListener(map,'mousemove', function(event) { 	
	              mapDragRectangle(event.latLng) 	
                });  
	        }
	  if (document.f1.plc[0].checked)  {
	        // alert(document.f1.plc[0].value);
	         google.maps.event.removeListener(eventOnClick2);
			 eventOnClick1=google.maps.event.addListener(map, 'click', function(event) {
                 getAddress(event.latLng);
                });
            }
	}
//.........................................................................................
function mapClickRectangle(location) {
     r2 = null;
     if (!r1){  
       	 // First click
          r1=location;
		  if (myrectangle != null) {
             myrectangle.setMap(null);
	        }
          myrectangle=null;
		}
     else {   
	     // Second click
	   	 r2=location;
         google.maps.event.removeListener(eventOnMove);
	     myrectangle=null;
         draw_rectangle(r1,r2);	
	     r1=null;
        }
    }
//.........................................................................................
function mapDragRectangle(point) {
    
	}
//.........................................................................................	
function draw_rectangle(a,b){
     var x1=a.lat();
 	 var y1=a.lng();
	 var x2=b.lat();
	 var y2=b.lng();
	 var coords=[
	 new google.maps.LatLng(x1,y1),     
     new google.maps.LatLng(x2,y1), 	
     new google.maps.LatLng(x2,y2),
	 new google.maps.LatLng(x1,y2)
     ];
   	 myrectangle = new google.maps.Polygon({
         paths: coords,
         strokeColor: "#FF0000",
         strokeOpacity: 0.8,
         strokeWeight: 1,
	     clickable:false,
         fillColor: "#96bdfe",
         fillOpacity: 0.35
        }); 
     myrectangle.setMap(map);   
   
     for (i=0;i<10;i++) {
		 latarray[i] = randomXToY(a.lat(),b.lat(),5);
         longarray[i] = randomXToY(a.lng(),b.lng(),5);
        }
     calculateDistance(a.lat(),a.lng(),b.lat(),b.lng());
     document.getElementById('lati').value=a;
	 document.getElementById('long').value=b;
    }	
 
 
//......................................Random Function .................................	
function randomXToY(minVal,maxVal,floatVal){
     var randVal = minVal+(Math.random()*(maxVal-minVal));
	 return typeof floatVal=='undefined'?Math.round(randVal):randVal.toFixed(floatVal);
	}
//.........................................................................................
function Calcrad(x)	{
     return x*Math.PI/180;
	}
//.........................................................................................
function Calcdeg(x){
	 return x * 180/Math.PI;
	}
//.........................................................................................	
function calculateDistance(lat1,long1,lat2,long2){
	 var R = 3963; // miles
	 var dLat = Calcrad(lat2-lat1);
	 var dLon = Calcrad(long2-long1);
	 var m = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(Calcrad(lat1)) * Math.cos(Calcrad(lat2)) * Math.sin(dLon/2) * Math.sin(dLon/2);
	 var n = 2 * Math.atan2(Math.sqrt(m), Math.sqrt(1-m));
	 var d = R * n;
	 radius = d/2;
	 var Bx = Math.cos(Calcrad(lat2)) * Math.cos(dLon);
	 var By = Math.cos(Calcrad(lat2)) * Math.sin(dLon);
	 var latd3 = Math.atan2(Math.sin(Calcrad(lat1))+Math.sin(Calcrad(lat2)),Math.sqrt((Math.cos(Calcrad(lat1))+Bx)*(Math.cos(Calcrad(lat1))+Bx) + By*By) ); 
	 var longd3 = Calcrad(long1) + Math.atan2(By, Math.cos(Calcrad(lat1)) + Bx);
	 lat3 = Calcdeg(latd3);
	 long3 = Calcdeg(longd3);
	 document.getElementById('nlati').value=lat3;
     document.getElementById('nlong').value=long3;
     document.getElementById('rad').value=radius;
	 window.open('Search2.php?L1=' + encodeURIComponent(lat3) + '&L2=' + encodeURIComponent(long3) + '&rad=' + encodeURIComponent(radius)+ '&latgrp=' + encodeURIComponent(latarray) + '&longrp=' + encodeURIComponent(longarray) ,'two');	
	}
//.........................................................................................	
	
function deleteOverlays() {
     if (marker) {
         marker.setMap(null);
        }
    }
//.........................................................................................
var latt="<?php echo $_GET['Loca'];?>";
if(latt) {
 
     var locat= latt.split("%");
     for(i=0;i<10;i++) {
         codeAddress(locat[i]);
        }
    }
//.........................................................................................
function codeAddress(ad) {
     geocoder = new google.maps.Geocoder();
     geocoder.geocode( { 'address': ad}, function(results, status) {
	     if (status == google.maps.GeocoderStatus.OK) {
	             //map.setCenter(results[0].geometry.location);
	             var marker = new google.maps.Marker({
                 map: map,
                 position: results[0].geometry.location
                });
            } 
	     else {
             // alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }


</script>
</head>
<body onload="initialize()" style="background-color: #ADD8E6;">
     <form name="f1">
      </div>
		 <div id="maptwo" style="border:1px coral solid ;border-color:black;font-family:Georgia;font-size:16px;color:#000000;">
		 <input type="radio" name="plc" value="male" id="radi" onclick="radiocheck();"/>Tweets Near A Place<br />
	     <label>Radius(miles):</label>
	     <input type ="text" name="rad" id = "radiusbox"/> 
	     <br>
         <input type="radio" name="plc" value="female" id="rec" onclick="radiocheck();"/>Tweets Within An Area(Click twice at two different places)
		 <br>
		 <br>
		 </div>
	     
		 <div id = "map_canvas" style="width:620px; height: 800px"></div>
	     
		 <div id="bot">
         R1: <input type ="hidden"size="70" name="L1" id = "lati"\>
         <br>
	     R2:<input type ="hidden" size="70" name="L2" id = "long"\> 
	     <br>
	     New point Lat:<input type ="hidden" name="NL1" id = "nlati" \>
	     <br>
	     New point Lon:<input type ="hidden" name="NL2" id = "nlong"\> 
	     <br>
	     Radius: <input type ="hidden" name="rd" id = "rad"\>
	     </div>
	 </div>
   </form> 
</body>
</html>
