<html>
<head>
</head>
<body>

<?php
if($_GET['q'])
{
echo $_GET['q'] . "welcome";
}
if($_GET['q2'])
{
echo $_GET['q2'];
}
?>

<a href="prj1.php?q2=<?php echo "happy" ?> ">NEXT</a>
</body>
</html>
