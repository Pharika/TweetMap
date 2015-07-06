<html>
<body>
<?php


if($_GET['q'])
{
echo $_GET['q'];
$twitter_query = $_GET['q'];
$url = "http://search.twitter.com/search.atom?q=" . urlencode( $twitter_query ) . "&lang=en&rpp=10&page=1";
$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );		
		$results = new SimpleXMLElement( $res );
}

elseif($_GET['L1'] && $_GET['L2'])
{
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
echo " latitude:" . $Lat;
echo " longitude:" . $Lon;
echo " radius:" . $rad;
$url = "http://search.twitter.com/search.atom?geocode=" . $Lat .",".$Lon.",".$rad."mi". "&lang=en&rpp=10&page=1";
$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );		
		$results = new SimpleXMLElement( $res );
}
elseif($_GET['ur'])
{
$url = $_GET['ur'];
echo "in search2" . $url;
$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );		
		$results = new SimpleXMLElement( $res );
}
else
{
$twitter_query = "twitter";
$url = "http://search.twitter.com/search.atom?q=" . urlencode( $twitter_query ) . "&lang=en&rpp=10&page=1";

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
<?php
foreach($results->link as $r)
        {
         if($r->attributes()->rel=="next")
            {
                $ur=$r->attributes()->href;
               	echo $ur;
				$url = "search2.php?ur=" . urlencode($ur);
                echo "<a href=\"" . $url . "\" >NEXT</a>";
                
            }
        }


?>

</script>
</body>
</html>