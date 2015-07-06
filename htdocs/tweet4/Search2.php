<html>
<head>
<link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 
</head>
<body style="background-color: #ADD8E6;">
<?php
if($_GET['q'])
{
//echo $_GET['q'];
     $flag = 1;
     $twitter_query = $_GET['q'];
	 
    ?><h3 align="center">Tweets For word <?php echo $twitter_query; ?></h3>
		 <?php

     $url = "http://search.twitter.com/search.atom?q=" . urlencode( $twitter_query ) . "&lang=en&rpp=20&page=1";
     $curl = curl_init();
     curl_setopt( $curl, CURLOPT_URL, $url );
	 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	 $res = curl_exec( $curl );
	 curl_close( $curl );		
	 $results = new SimpleXMLElement( $res );
}

elseif($_GET['L1'] && $_GET['L2'])
{
     if($_GET['adf'])
      { 
	     $loop = 1;
         $ad1=$_GET['adf'];
         //echo " adf:" . $ad1;
         //echo "length:" .strlen($ad1);
         $m=strlen($ad1);
         $m1=$m-5;
         $ripadf = substr($ad1,0,$m1);
         //echo " ripadf:" . $ripadf;
		 $url1 = "http://search.twitter.com/search.atom?q=" . urlencode($ripadf)."&lang=en&rpp=10&page=1";
         //$url1="http://search.twitter.com/search.atom?q=" . urlencode($adde1 . " OR " . $adde2) . "&lang=en&rpp=10&page=1"; 
         $curl = curl_init();
		 curl_setopt( $curl, CURLOPT_URL, $url1 );
		 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		 $rest = curl_exec( $curl );
		 curl_close( $curl );		
		 $Oresults = new SimpleXMLElement( $rest );
		 
	  }
     if($_GET['latgrp']&&$_GET['longrp'])
      {
	     $loop = 2;
         $latgrp = $_GET['latgrp'];
         $longrp = $_GET['longrp'];
         //echo "name:" . $latgrp;
         $latp = explode(",", $latgrp);
         //echo "name:" . $longrp;
         $longp= explode(",", $longrp);
         //echo "latp:" . $latp[0]. "longp:" . $longp[0];
         for($i=0;$i<10;$i++)
          {
	         $geocode= file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?latlng=".$latp[$i].",".$longp[$i]."&sensor=false" );
	         $output = json_decode($geocode);
             $address[$i]=$output->results[0]->address_components[2]->long_name;
	         //echo"address:" . $address;
          }
	     // echo "Geoadd 1:" . $address[0] . "Geoadd 2:" . $address[1]. "Geoadd 3:" . $address[2]; 
	     //$url2="http://search.twitter.com/search.atom?q=" . urlencode($address[0] . " OR " . $address[1] . " OR " . $address[2]) . "&lang=en&rpp=10&page=1"; 
	     
		 $url2="http://search.twitter.com/search.atom?q=" . urlencode($address[0]) . "&lang=en&rpp=5&page=1"; 
	     $curl = curl_init();
		 curl_setopt( $curl, CURLOPT_URL, $url2 );
		 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		 $rest2 = curl_exec( $curl );
		 curl_close( $curl );		
		 $Oresults = new SimpleXMLElement( $rest2 );
	     
		 $url3="http://search.twitter.com/search.atom?q=" . urlencode($address[1]) . "&lang=en&rpp=5&page=1"; 
	     $curl = curl_init();
		 curl_setopt( $curl, CURLOPT_URL, $url3 );
		 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		 $rest3 = curl_exec( $curl );
		 curl_close( $curl );		
		 $Oresults1 = new SimpleXMLElement( $rest3 );
	
	     $url4="http://search.twitter.com/search.atom?q=" . urlencode($address[2]) . "&lang=en&rpp=5&page=1"; 
	     $curl = curl_init();
		 curl_setopt( $curl, CURLOPT_URL, $url4 );
		 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		 $rest4 = curl_exec( $curl );
		 curl_close( $curl );		
		 $Oresults2 = new SimpleXMLElement( $rest4 );	
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
	 if($loop==1){
         ?><h3 align="center">Tweets Within a Radius <?php echo $rad; ?> miles </h3>
		 <?php
		 }
		 elseif($loop==2){
		 ?><h3 align="center">Tweets Within The Region </h3>
		 <?php
		 }
		 
		 $Lat= $_GET['L1'];
         $Lon = $_GET['L2'];
         //echo " latitude:" . $Lat;
         //echo " longitude:" . $Lon;
         //echo " radius:" . $rad;
         
		 $url = "http://search.twitter.com/search.atom?geocode=" . $Lat .",".$Lon.",".$rad."mi". "&lang=en&rpp=20&page=1";
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
	 $ur=$_GET['ur'];
     $url = $_GET['ur'];
     //echo "in search2" . $url;
     $curl = curl_init();
	 curl_setopt( $curl, CURLOPT_URL, $url );
	 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	 $res = curl_exec( $curl );
	 curl_close( $curl );		
	 $results = new SimpleXMLElement( $res );
}

else
{
     $flag = 1;
     $twitter_query = "twitter";
    ?><h3 align="center">Tweets For <?php echo $twitter_query; ?></h3>
		 <?php
	 $url = "http://search.twitter.com/search.atom?q=" . urlencode( $twitter_query ) . "&lang=en&rpp=50&page=1";
     $curl = curl_init();
	 curl_setopt( $curl, CURLOPT_URL, $url );
	 curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	 $res = curl_exec( $curl );
	 curl_close( $curl );		
	 $results = new SimpleXMLElement( $res );
}

?>
<table align="center" border="2px single black" width="500" height="600"  BORDERCOLOR="#000000" BGCOLOR="#96CDCD" >
<?php
$c=0;
     function profileXML($user){
         $isReturnTrue = 0;
		 if($user)	{
             $objDOM = new DOMDocument();
             if($objDOM->load("http://api.twitter.com/1/users/show.xml?screen_name=".$user)){
                 $note = $objDOM->getElementsByTagName("user"); 
                 foreach($note as $value ){
                     $location = $value->getElementsByTagName("location");
                     $location  =$location->item(0)->nodeValue;
                     $profile["location"]=$location;
	                }
		         if($profile["location"]){
			         $isReturnTrue = 1;
			         $profile = $profile["location"];
		            }
			    }
			}
		 if($isReturnTrue == 1){
		      return $profile;
	        }
	     else{
		      return false;
	        }
		}	
		  //$profile1 = $profile["location"];
            
         //return $profile1;	
     foreach( $results->entry as $result )   // for ATOM
      {
         ?>
         <tr><td>
         <?php
         $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?'); 
         $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o'); 
         echo "<h3><a href=\"". $result->author->uri ."\">". $result->author->name ."<a/></h3><img src=\"". $result->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $result->content."</p><div style=\"clear:both;\">&nbsp;</div>";
         if ($flag ==1) {
             $name=$result->author->name;
             $name1=preg_replace("/ \([^\)]+\)/","",$name);
			 if(profileXML($name1)){
                 $loc[$c] = (profileXML($name1));
                 //echo $loc[$c];
                 $loc2[$c]=str_replace($a, $b, $loc[$c]); 
                 $pattern = array('/iPhone:/','/AoeT:/');
                 $replace = array('','');
                 $location1[$c]= preg_replace($pattern, $replace, $loc2[$c]);
                 //echo "Location: ". $location1[$c];
                }
			}	
        elseif ($flag ==2){
             $namespaces = $result->getNameSpaces(true);
             $loc = $result->children($namespaces['google']);
             $loc1[$c] = $loc->location;
             //echo "Location: ".$loc1[$c];
             $loc2[$c]=str_replace($a, $b, $loc1[$c]); 
             $pattern = array('/iPhone:/','/AoeT:/');
             $replace = array('','');
             $location1[$c]= preg_replace($pattern, $replace, $loc2[$c]);
             //echo "Location: ". $location1[$c];
            }
         ?>
         </td></tr>
         <?php
         $c=$c+1;
     }
?>


</table >
<!--..............................................................................................-->

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
         //echo $ur;
		 $url = "search2.php?ur=" . urlencode($ur);
         echo "<a href=\"" . $url . "\" >PREV</a>";
       }
    if($r->attributes()->rel=="next")
       {
         $ur=$r->attributes()->href;
         $url = "search2.php?ur=" . urlencode($ur);
         echo "<a href=\"" . $url . "\" >NEXT</a>";
       }
  }

?>
</table>
<!--/////////////////////////////////////////////////////////////////-->
<table  align="center" border="1" width="500"  BORDERCOLOR="#000000" BGCOLOR="#96CDCD">
<?php
if($ad1 || $latgrp || $longrp || $ur)
{
if($ripadf)
{
 ?><h3 align="center">Tweets With the place <?php echo $ripadf; ?></h3>
		 <?php
}
if($address[0])
{
 ?><h3 align="center">Tweets With the place <?php echo $address[0]; ?></h3>
		 <?php
}
$c=0;
foreach( $Oresults->entry as $Oresult )   // for ATOM
  {
     ?>
     <tr><td>
     <?php
     echo "<h3><a href=\"". $Oresult->author->uri ."\">". $Oresult->author->name ."<a/></h3><img src=\"". $Oresult->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $Oresult->content."</p><div style=\"clear:both;\">&nbsp;</div>";
     $name=$Oresult->author->name;
     ?>
     </td></tr>
     <?php
  }
  }
?>
</table>

<!-- ///////////////////////////////////////////////////////////////////////-->

<table align="center" border="1" width="500" BORDERCOLOR="#000000" BGCOLOR="#96CDCD">
<?php
if($address[1])
{
 ?><h3 align="center">Tweets With the place <?php echo $address[1]; ?></h3>
		 <?php
$c=0;
foreach( $Oresults1->entry as $Oresult1 )   // for ATOM
  {
     ?>
     <tr><td>
     <?php
     echo "<h3><a href=\"". $Oresult1->author->uri ."\">". $Oresult1->author->name ."<a/></h3><img src=\"". $Oresult1->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $Oresult1->content."</p><div style=\"clear:both;\">&nbsp;</div>";
     $name=$Oresult1->author->name;
     ?>
</td></tr>
<?php
  }
  }
?>
</table>

<!--////////////////////////////////////////////////////////////////////////////-->

<table  align="center" border="1" width="500"  BORDERCOLOR="#000000" BGCOLOR="#96CDCD">
<?php
if($address[2])
{
 ?><h3 align="center">Tweets With the place <?php echo $address[2]; ?></h3>
		 <?php
$c=0;
foreach( $Oresults2->entry as $Oresult2 )   // for ATOM
   {
     ?>
     <tr><td>
     <?php
     echo "<h3><a href=\"". $Oresult2->author->uri ."\">". $Oresult2->author->name ."<a/></h3><img src=\"". $Oresult2->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $Oresult2->content."</p><div style=\"clear:both;\">&nbsp;</div>";
     $name=$Oresult2->author->name;
     ?>
</td></tr>
<?php
   }
   }
?>
</table>
<!--////////////////////////////////////////////////////////////////////////////////-->
<script type="text/javascript"> 
     var add="<?php echo $app ?>";
     window.open('mapv.php?Loca=' + encodeURIComponent(add),'three');
</script>

</body>
</html>