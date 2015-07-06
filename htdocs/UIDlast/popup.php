<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title></title>
<script type="text/javascript" src="js/jquery.js"></script>


<style type="text/css">

#dialog-overlay {

	/* set it to fill the whil screen */
	width:100%; 
	height:100%;
	
	/* transparency for different browsers */
	filter:alpha(opacity=50); 
	-moz-opacity:0.5; 
	-khtml-opacity: 0.5; 
	opacity: 0.5; 
	background:#000; 

	/* make sure it appear behind the dialog box but above everything else */
	position:absolute; 
	top:0; left:0; 
	z-index:3000; 

	/* hide it by default */
	display:none;
}


#dialog-box {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:auto;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-box .dialog-content {
	/* style the content */
	text-align:left;
	padding:10px;
	margin:13px;
	color:#666;
	font-family:arial;
	font-size:11px;
	width: 500px;
	height: 300px;
}

a.buttonRight{
	/* styles for button */
	margin:10px 0px 5px auto;
	text-align:center;
	background-color: #e33100;
	display: block;
	width:50px;
	padding: 5px 10px 6px;
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	line-height: 1;
	float: right;
	/* css3 implementation :) */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer;
	
}

a.buttonLeft{
	/* styles for button */
	margin:10px auto 5px 0px;
	text-align:center;
	background-color: #e33100;
	float: left;
	display: block;
	width:50px;
	padding: 5px 10px 6px;
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	line-height: 1;
	
	/* css3 implementation :) */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer;
	
}



a.button:hover {
	background-color: #c33100;	
}

/* extra styling */
#dialog-box .dialog-content p {
	font-weight:700; margin:0;
}

#dialog-box .dialog-content ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}



</style>

<script type="text/javascript">



//Popup dialog
function popup(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
	setTimeout('delayer()', 5000);
}
function delayer(){
    $('#dialog-overlay').hide();
	$('#dialog-box').hide();
}

</script>

</head>

<body onLoad="popup('')" >
<form id="form1" name="form1" method="post" action="">
 
  
<!-- <a href="javascript:popup('')">Submit!</a>-->
 
<div id="dialog-overlay"></div>
<div id="dialog-box">
	<div class="dialog-content">
    
    
		<div id="dialog-message"></div>
	
<h2 align="center"><b>View and compare plans</h2>
<!--<table width="400" height="200" align="center" border="1">
<tr valign="top">
<td style="width:100px;text-align:top;">       
</td>
<td style="width:100px;text-align:top;">
Recommended plan </td>
<td style="width:100px;text-align:top;">
Your current plan </td>
</tr>


<tr valign="top">
<td style="width:100px;text-align:top;"> 
Plan Name    
</td>
<td style="width:100px;text-align:top;">
Freedom 600</td>
<td style="width:100px;text-align:top;">
Garuda99</td>
</tr>



<tr valign="top">
<td style="width:100px;text-align:top;">       
Local call charges</td>
<td style="width:100px;text-align:top;">
Rs 1 per min </td>
<td style="width:100px;text-align:top;">
Rs 1 per minute </td>
</tr>

<tr valign="top">
<td style="background-color:BROWN;width:100px;text-align:top;">       
<b><font color="#FFFFFF">Std call charges</font></b></td>
<td style="background-color:BROWN;width:100px;text-align:top;">
<b><font color="#FFFFFF">Rs 1.25 per min </font></b></td>
<td style="background-color:BROWN;width:100px;text-align:top;">
<b><font color="#FFFFFF">Rs 2 per minute</font></b> </td>
</tr>

<tr valign="top">
<td style="width:100px;text-align:top;">       
Data usage charges</td>
<td style="width:100px;text-align:top;">
Rs 0.01/10Kb</td>
<td style="width:100px;text-align:top;">
Rs 0.01/10Kb</td>
</tr>


<tr valign="top">
<td style="width:100px;text-align:top;">       
SMS charges</td>
<td style="width:100px;text-align:top;">
Local Rs 0.5 ISD Rs 4.5 </td>
<td style="width:100px;text-align:top;">
Local Rs 0.5 ISD Rs 4.5  </td>
</tr>
</table>-->
<br>
 <a href="http://localhost:80/UID/Planometer1.php" class="buttonLeft">Confirm</a>
        <a href="http://localhost:80/UID/popup.php" class="buttonRight">Close</a>
	</div>
</div>
</form>
</body>
</html>