
<?php

include('Search3.php');
if($_GET['ur'])
{
$ur = $_GET['ur'];
echo "in search2" . $ur;
$search1 = new TwitterSearch();
$results = $search1->nextresults($ur);
}

if($_GET['q'])
{
$twitter_query = $_GET['q'];
$search2 = new TwitterSearch();
$results = $search2->results($twitter_query);
}
else
{
$twitter_query ="twitter";
$search3 = new TwitterSearch();
$results = $search3->results($twitter_query);
}
if($_GET['L1'] && $_GET['L2'])
{
$Lat= $_GET['L1'];
$Lon = $_GET['L2'];
$search4 = new TwitterSearch();
$results = $search4->Locresults($Lat,$Lon);

}

?>
<?php echo $results; ?>
