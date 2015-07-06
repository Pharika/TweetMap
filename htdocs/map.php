<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://maps.google.com/maps?file=api&v=1&key=ADD_YOUR_KEY_HERE" type="text/javascript"></script>
</head>
<body>
<div id="map" style="width: 400px; height: 300px"></div>

<!--<script type="text/javascript">
var map = new GMap(document.getElementById("map"));
var point = new GPoint(76.2739795,9.9211342);
map.centerAndZoom(point, 3);
var marker = new GMarker(point);
map.addOverlay(marker);
</script>
-->
<script type="text/javascript"  >
//<![CDATA[
 
    var map = new GMap(document.getElementById("map"));
    map.centerAndZoom(new GPoint(-92.27722, 34.74875), 4);
 
    var point = new GPoint(-92.27722, 34.74875);
    var marker = new GMarker(point);
    map.addOverlay(marker);
 
    GEvent.addListener(map, 'click', function(overlay, point) {
        map.clearOverlays();
        if (overlay) {
            map.removeOverlay(overlay);
 
      } else if (point) {
 
            map.recenterOrPanToLatLng(point);
            var marker = new GMarker(point);
            map.addOverlay(marker);
           
 
     }
 
     });
 
// Recenter Map and add Coords by clicking the map
GEvent.addListener(map, 'click', function(overlay, point) {
            document.getElementById("latbox").value=point.y;
            document.getElementById("lonbox").value=point.x;
});
    //]]>
    </script> 

<FORM target="two" action="map2.php"  method="get">	
<TABLE> 
<TR><TD ALIGN="left"></TD><TD><INPUT SIZE=13 TYPE="HIDDEN" ID="latbox" NAME="lat" value="" ></TD></TR> 
<TR><TD ALIGN="left"></TD><TD><INPUT SIZE=13 TYPE="HIDDEN" ID="lonbox" NAME="lon" value="" ></TD></TR> 
<TR><TD ALIGN="left"></TD><TD> <INPUT TYPE=SUBMIT></TR> 
</TABLE> 
</FORM> 
  </body> 

</html>

