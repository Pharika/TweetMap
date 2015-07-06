<html>
<head>
<link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
</head>
<body style="background-color: #5FBDCE;">
<?php

if($_GET['q'])
{
echo $_GET['q'];
$flag = 1;
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
if($_GET['addr1'] && $_GET['addr2'])
{
$adde1=$_GET['addr1'];
$adde2=$_GET['addr2'];
echo " address1:". $adde1;
echo " address2:". $adde2;
$ad1=$_GET['adf'];
echo " adf:" . $ad1;

$url1 = "http://search.twitter.com/search.atom?q=" . urlencode( $ad1)."&lang=en&rpp=10&page=1";
//$url1="http://search.twitter.com/search.atom?q=" . urlencode($adde1 . " OR " . $adde2) . "&lang=en&rpp=10&page=1"; 


$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url1 );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$rest = curl_exec( $curl );
		curl_close( $curl );		
		$Oresults = new SimpleXMLElement( $rest );
		

}

$flag = 2;
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
$flag = 2;
$url = $_GET['ur'];
//echo "in search2" . $url;
$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$res = curl_exec( $curl );
		curl_close( $curl );		
		$results = new SimpleXMLElement( $res );
}
//if(!$_GET['ur']&& !$_GET['q'] && !$_GET['L1'] && !$_GET['L2'] && !$_GET['rad'] && !$_GET['adde1'] && !$_GET['adde2'])
else
{
$flag = 1;
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
<table align="center" border="1" width="500" BORDER="2" BORDERCOLOR="#000000" BGCOLOR="#96CDCD" >
<?php
$c=0;
function profileXML($user)
 {
$objDOM = new DOMDocument();
$objDOM->load("http://api.twitter.com/1/users/show.xml?screen_name=".$user);
$note = $objDOM->getElementsByTagName("user");
 foreach($note as $value )
       {
 $location = $value->getElementsByTagName("location");
 $location  =$location->item(0)->nodeValue;
 $profile["location"]=$location;
 $profile1 = $profile["location"];

        }    
return $profile1;
}
foreach( $results->entry as $result )   // for ATOM
{
?>
<tr><td>
<?php
$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?'); 
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o'); 
echo "<h3><a href=\"". $result->author->uri ."\">". $result->author->name ."<a/></h3><img src=\"". $result->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $result->content."</p><div style=\"clear:both;\">&nbsp;</div>";
if ($flag ==1)
{
$name=$result->author->name;
$name1=preg_replace("/ \([^\)]+\)/","",$name);
$loc[$c] = (profileXML($name1));
//echo $loc[$c];
$loc2[$c]=str_replace($a, $b, $loc[$c]); 
$pattern = array('/iPhone:/','/AoeT:/');
$replace = array('','');
$location1[$c]= preg_replace($pattern, $replace, $loc2[$c]);
echo "Location: ". $location1[$c];
}
elseif ($flag ==2)
{
$namespaces = $result->getNameSpaces(true);
$loc = $result->children($namespaces['google']);
$loc1[$c] = $loc->location;
//echo "Location: ".$loc1[$c];
  $loc2[$c]=str_replace($a, $b, $loc1[$c]); 
$pattern = array('/iPhone:/','/AoeT:/');
$replace = array('','');
$location1[$c]= preg_replace($pattern, $replace, $loc2[$c]);
echo "Location: ". $location1[$c];
}
?>
</td></tr>
<?php
$c=$c+1;

}
//echo "counter".$c;

?>

</table >
<?php
$app=$location1[0];
for($i=1;$i<10;$i++)
{
$app=$app."%".$location1[$i];
}
//echo "app:" . $app;

foreach($results->link as $r)
        {
		if($r->attributes()->rel=="previous")
            {
                $ur=$r->attributes()->href;
               	//			echo $ur;
				
                $url = "search2.php?ur=" . urlencode($ur);
                echo "<a href=\"" . $url . "\" >PREV</a>";
            }
         if($r->attributes()->rel=="next")
            {
                $ur=$r->attributes()->href;
              	//			echo $ur;
				
                $url = "search2.php?ur=" . urlencode($ur);
                echo "<a href=\"" . $url . "\" >NEXT</a>";
            }
        }

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

<script type="text/javascript"> 
//var add = new Array("55414","55121","55111");
//alert("hello"+ add[0]);
var add="<?php echo $app ?>";
window.open('mapv3.php?Loca=' + encodeURIComponent(add),'three');
</script>

</body>
</html>