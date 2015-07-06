<html>
<head><link rel="stylesheet" href="srch.css" type="text/css" media="screen" /> 	</head>
<body style="background-color: #F4F4F3">
<script type="text/javascript">

</script>
<?php

include('Search3.php');

if($_GET['q'])
{
$twitter_query = $_GET['q'];
$search = new TwitterSearch();
$results = $search->results($twitter_query);
}
else
{
$twitter_query ="twitter";
$search = new TwitterSearch();
$results = $search->results($twitter_query);
}

?>
<div class="Tfor">
Tweets for : <?php echo  $twitter_query; ?>
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
$name=$result->author->name;
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