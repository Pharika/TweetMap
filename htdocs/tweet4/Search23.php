<html>
<head>
<link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
</head>
<body style="background-color: #5FBDCE;">
<?php


//...............Latitude &longitude ..............
if($_GET['L1'] && $_GET['L2'])
{

if($_GET['addr1'] && $_GET['addr2'])
{
$adde1=$_GET['addr1'];
$adde2=$_GET['addr2'];
echo " address1:". $adde1;
echo " address2:". $adde2;

//$url1 = "http://search.twitter.com/search.atom?q=" . urlencode( $adde1) . urlencode("+ OR +"). urlencode($adde2) . "&lang=en&rpp=10&page=1";
$url1="http://search.twitter.com/search.atom?q=" . urlencode($adde1 . " OR " . $adde2) . "&lang=en&rpp=10&page=1"; 


$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url1 );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$rest = curl_exec( $curl );
		curl_close( $curl );		
		$Oresults = new SimpleXMLElement( $rest );
		

}

if($_GET['rad'])
{
$rad=$_GET['rad'];
}
else
{
$rad=1;
}
$Lat= $_GET['L1'];
$Lon = $_GET['L2'];
$ad1=$_GET['adf'];
echo " latitude:" . $Lat;
echo " longitude:" . $Lon;
echo " radius:" . $rad;
echo " adf:" . $ad1;

$url = "http://search.twitter.com/search.atom?geocode=" . $Lat .",".$Lon.",".$rad."mi". "&lang=en&rpp=10&page=1";

$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );		
		$results = new SimpleXMLElement( $res );
		
}

?>
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
$name=$result->author->name;
//echo  $result->link[1]->attributes()->href ;
?>
</td></tr>
<?php

}
echo "counter".$c;

?>

</table>
<table  border="1" width="500">
<?php
$c=0;
//foreach( $results[results] as $result ) 

foreach( $Oresults->entry as $Oresult )   // for ATOM
{
//$c=$c+1;
?>
<tr><td>
<?php

//echo "<h3>". $result[from_user] ."</h3><img src=\"". $result[profile_image_url]."\" style=\"float: left;\"><p>". $result[text]."</p><div style=\"clear:both;\">&nbsp;</div>";
//echo "GEO:" .$result[geo];
echo "<h3><a href=\"". $Oresult->author->uri ."\">". $Oresult->author->name ."<a/></h3><img src=\"". $Oresult->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $Oresult->content."</p><div style=\"clear:both;\">&nbsp;</div>";
$name=$Oresult->author->name;
//echo  $result->link[1]->attributes()->href ;
?>
</td></tr>
<?php

}
echo "counter".$c;

?>

</table>

</body>
</html>