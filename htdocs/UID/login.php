<?php session_start();
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

//Connect to database from here
$link = mysql_connect('localhost', 'root', ''); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//select the database | Change the name of database from here
mysql_select_db('mtnl'); 

//get the posted values
$user_name=htmlspecialchars($_POST['username'],ENT_QUOTES);
$pass=htmlspecialchars($_POST['password'],ENT_QUOTES);


//now validating the username and password
$sql="SELECT username, passwd FROM mtnl.users WHERE username='".$user_name."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['passwd'],$pass)==0)
	{
		echo "yes";
		//now set the session from here if needed
		$_SESSION['username']=$user_name; 
		header("Location: Task1-Account Summary.php");
	}
	else
		header("Location: Templates/Template2.dwt.php"); 
}
else
	header("Location: Templates/Template2.dwt.php");


?>