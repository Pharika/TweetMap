<?php
Class TwitterSearch
{
 function __construct()
 {
 }
 function results($twitter_query)
 {

 $url = "http://search.twitter.com/search.atom?q=" . urlencode( $twitter_query ) . "&lang=en&rpp=10&page=1";
 
		$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$result = curl_exec( $curl );
		curl_close( $curl );
		
		
		$return = new SimpleXMLElement( $result );
		return $return;
 }
 function Locresults($Lat,$Lon,$rad)
 {
 
 $url = "http://search.twitter.com/search.atom?geocode=" . $Lat .",".$Lon.",".$rad."mi". "&lang=en&rpp=10";
 
		$curl = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		$result = curl_exec( $curl );
		curl_close( $curl );
		//$string=file_get_contents($url);
		//$return=json_decode($result,true);
		$return = new SimpleXMLElement( $result );
		return $return;
 }
 }
?>