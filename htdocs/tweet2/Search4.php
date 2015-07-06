<html>
<head><link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> </head>
<body>

<?php
include('Search3.php');
//echo "hello php";
if($_GET['L1'] && $_GET['L2'])
{
	$Lat= $_GET['L1'];
	$Lon = $_GET['L2'];
	if ($_GET['rad'])
		{
		$rad = $_GET['rad'];
		}
		else
		{
		$rad = 1;
		}

echo  " Lati:" . $Lat;
echo  " Longi:" . $Lon;
echo "radius:".$rad;
 
$search = new TwitterSearch();
$results = $search->Locresults($Lat,$Lon,$rad);

}
?>
<div class="Tfor">
Tweets near that place:
</div>
<table  border="1" width="500">
<?php
$c=0;
//foreach( $results[results] as $result ) 
foreach( $results->entry as $result )   // for ATOM
{
$c=$c+1;
?>
<tr><td>
<?php

//echo "<h3>". $result[from_user] ."</h3><img src=\"". $result[profile_image_url]."\" style=\"float: left;\"><p>". $result[text]."</p><div style=\"clear:both;\">&nbsp;</div>";
//echo "GEO:" .$result[geo];
echo "<h3><a href=\"". $result->author->uri ."\">". $result->author->name ."<a/></h3><img src=\"". $result->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $result->content."</p><div style=\"clear:both;\">&nbsp;</div>";
$namespaces = $result->getNameSpaces(true); 
$google = $result->children($namespaces['google']); 
$Tw = $result->children($namespaces['google']); 
echo "Loctaion: " . $google->location; 
echo "Geo:" . $Tw->geo;
?>
</td></tr>
<?php

}
//echo "counter".$c;
?>
</table>
</body>
</html>