<?php
echo "hello ther";
$url=$_GET['ur'];
echo "url:" . urlencode($url);
$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$result = curl_exec( $curl );
		curl_close( $curl );
		//$string=file_get_contents($url);
		//$return=json_decode($result,true);
		$return = new SimpleXMLElement( $result );
		?>
		
		<table  border="1" width="500">
<?php
$c=0;
//foreach( $results[results] as $result ) 

foreach( $return->entry as $result )   // for ATOM
{
$c=$c+1;
?>
<tr><td>
<?php

//echo "<h3>". $result[from_user] ."</h3><img src=\"". $result[profile_image_url]."\" style=\"float: left;\"><p>". $result[text]."</p><div style=\"clear:both;\">&nbsp;</div>";
//echo "GEO:" .$result[geo];
echo "<h3><a href=\"". $result->author->uri ."\">". $result->author->name ."<a/></h3><img src=\"". $result->link[1]->attributes()->href ."\" style=\"float: left;\"><p>". $result->content."</p><div style=\"clear:both;\">&nbsp;</div>";
//echo  $result->link[1]->attributes()->href ;
?>
</td></tr>
<?php

}
echo "counter".$c;

?>

</table>


