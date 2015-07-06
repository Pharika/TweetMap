<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
<link rel="stylesheet" href="search.css" type="text/css" media="screen" /> 	
	<link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true">
</script>
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
         var res= results[1].formatted_address;
		 var infowindow = new google.maps.InfoWindow({
        content: "latitude:" + point.lat() + "Longitude:" + point.lng() + "address" + res
        });
          infowindow.open(map, marker);
        }
      } else {
        alert("Geocoder failed due to: " + status);
      }
    });
  }

	
	
function deleteOverlays() {
  if (marker) {
     marker.setMap(null);
    }
}


</script>
</head>
<body onload="initialize()">
	<div id = "map_canvas" style="width:600px; height: 400px">
	</div>
</body>
</html>
