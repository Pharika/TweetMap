<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<style type="text/css">
input.red {background-color: #cc0000;}
/*..........................................................*/
/*CSS for Popup*/
/* Future notification popup*/
/*..........................................................*/
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
	width:300px;

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

/* extra styling */
#dialog-box .dialog-content p {
	font-weight:700; margin:0;
}

#dialog-box .dialog-content ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/*meter popups*/
/*..........................................................*/
#dialog-overlay1 {

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

#dialog-overlay2 {

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



#dialog-box1 {
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

#dialog-box1 .dialog-content1 {
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

#dialog-box2 {
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
	height:200px;
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-box2 .dialog-content2 {
	/* style the content */
	text-align:left;
	padding:10px;
	margin:13px;
	color:#666;
	font-family:arial;
	font-size:11px;
	width: 400px;
	height: 200px;
}
/*..........................................................*/
/* make a payment Confimation*/
/*..........................................................*/
#dialog-overlay3 {

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


#dialog-box3 {
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

#dialog-box3 .dialog-content3 {
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
#dialog-box3 .dialog-content3 p {
	font-weight:700; margin:0;
}

#dialog-box3 .dialog-content3 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/**/
/*..........................................................*/
#dialog-box4 .dialog-content4 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
#dialog-overlay4 {

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


#dialog-box4 {
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

#dialog-box4 .dialog-content4 {
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
/*..........................................................*/
/*View Accounts/Cards */
/*..........................................................*/

#dialog-overlay5 {

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


#dialog-box5 {
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

#dialog-box5 .dialog-content5 {
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
/* extra styling */
#dialog-box5 .dialog-content5 p {
	font-weight:700; margin:0;
}

#dialog-box5 .dialog-content5 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/*View Accounts/Cards */
/*..........................................................*/
#dialog-overlay6 {

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


#dialog-box6 {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:500px;
     height:300px;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-box6 .dialog-content6 {
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

/* extra styling */
#dialog-box6 .dialog-content6 p {
	font-weight:700; margin:0;
}

#dialog-box6 .dialog-content6 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/*View Accounts/Cards */
/*..........................................................*/
#dialog-overlay7 {

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


#dialog-box7 {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:500px;

	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-box7 .dialog-content7 {
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

/* extra styling */
#dialog-box7 .dialog-content7 p {
	font-weight:700; margin:0;
}

#dialog-box7 .dialog-content7 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/* Ereceipt*/
/*..........................................................*/
#dialog-overlay8 {

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


#dialog-box8 {
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

#dialog-box8 .dialog-content8 {
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
#dialog-box8 .dialog-content8 p {
	font-weight:700; margin:0;
}

#dialog-box8 .dialog-content8 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/* Ereceipt*/
/*..........................................................*/
#dialog-overlay9 {

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


#dialog-box9 {
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

#dialog-box9 .dialog-content9 {
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
#dialog-box9 .dialog-content9 p {
	font-weight:700; margin:0;
}

#dialog-box9 .dialog-content9 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/* Email Ereceipt*/
/*..........................................................*/
#dialog-overlay10{

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


#dialog-box10 {
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

#dialog-box10 .dialog-content10 {
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
#dialog-box10 .dialog-content10 p {
	font-weight:700; margin:0;
}

#dialog-box10 .dialog-content10 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/* Email Ereceipt*/
/*..........................................................*/
#dialog-overlay11{

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


#dialog-box11 {
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

#dialog-box11 .dialog-content11 {
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
#dialog-box11 .dialog-content11 p {
	font-weight:700; margin:0;
}

#dialog-box11 .dialog-content11 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/* Save payment mode*/
/*..........................................................*/
#dialog-overlay12{

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


#dialog-box12 {
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

#dialog-box12 .dialog-content12 {
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
#dialog-box12 .dialog-content12 p {
	font-weight:700; margin:0;
}

#dialog-box12 .dialog-content12 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*-----------------------------------------------
Save  profile information 
-----------------------------------------------*/
#dialog-overlay13{

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

#dialog-box13 {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:500px;
     height:300px;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-box13 .dialog-content13 {
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

/* extra styling */
#dialog-box13 .dialog-content13 p {
	font-weight:700; margin:0;
}

#dialog-box13 .dialog-content13 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}

/*-----------------------------------------------
Save Account information 
-----------------------------------------------*/
#dialog-overlay14{

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


#dialog-box14 {
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

#dialog-box14 .dialog-content14 {
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
#dialog-box14 .dialog-content14 p {
	font-weight:700; margin:0;
}

#dialog-box14 .dialog-content14 ul {
	margin:10px 0 10px 20px; 
	padding:0; 
	height:50px;
}
/*..........................................................*/
/*............Popup buttons..............*/
/*..........................................................*/
a.buttonCenter{
	/* styles for button */
	
	text-align:center;
	background-color: #e33100;
	display: block;
	width:50px;
	padding: 5px 10px 6px;
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	line-height: 1;
	float: center;
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
a.button{
	/* styles for button */
	margin:10px auto 5px 0px;
	text-align:center;
	background-color: #e33100;
	float:none;
	alignment-adjust:central
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
# buttoncheck{
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

a.buttonpay{
	/* styles for button */
	margin:10px auto 5px 0px;
	text-align:center;
	background-color: #e33100;
	float:left;
	alignment-adjust:central
	display: block;
	width:120px;
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
a.buttonrecpt{
	/* styles for button */
	margin:10px 0px 5px auto;
	text-align:center;
	background-color: #e33100;
	display: block;
	width:80px;
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
/*..........................................................*/
/*..........................................................*/

.your_plans {
	text-align: center;
}
. {
}

.meter {
	color: #CC0000;
}

#planquicklook
{
font: bold 20px sans-serif;
position:relative;
top:-260px;
left:620px
}

#planquicklook th
{
	font-size:16px;
}

#planquicklook a
{
	font-size:20px;
}

#balancetable
{
	position:relative;
	top:-30px;
	left:-130px
}

#datetable
{
	font: bold 1em sans-serif;
	border-collapse:collapse;
}
#callhistory
{
	font-family:sans-serif;
	width:100%;
	border-collapse:collapse;
}
#callhistory td, #callhistory th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#callhistory th 
{
	font-family:sans-serif;
	font-size:0.7em;
	text-align:left;
	padding-top:5px;
	padding-bottom:4px;
	background-color:#A7C942;
	color:#ffffff;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
#callhistory tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
#wow_tip{
	width:150px;
	background:#222;
	position:absolute;
	display:none;
	color:#FFF;
	padding:5px;
	-moz-border-radius: 7px;
    -webkit-boorder-radius: 7px;
    -khtml-border-radius: 7px;
    border-radius: 10px;
}

/* BeginOAWidget_Instance_2137022: #datepicker */
		#datepicker .ui-widget {
			font-family: inherit;
		}
			
		#datepicker .ui-datepicker {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		
		#datepicker .ui-datepicker-title {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			font-size: 1.1em;
			color: #000;
			font-weight: normal;
			line-height: 1.8em;
		}
		#datepicker .ui-state-default, .ui-widget-content .ui-state-default {
			border-color: #e6e6e6;
			background-color: #e6e6e6;
			color: #555555;
		}
		
		#datepicker .ui-state-default, .ui-state-default a {
			color: #555555;
		}	
		
			
		#datepicker .ui-state-highlight, .ui-widget-content .ui-state-highlight {
			border-color:#FCEFA1;
			background-color:#FCEFA1;
			color:#363636;
		}		
		
		#datepicker .ui-state-active, .ui-widget-content .ui-state-active { 
			border-color: #FFFFFF;
			background-color: #FFFFFF;
			color: #212121; 
		}
		
		#datepicker .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus 	
		{
			border-color: #5F5F5F;
			background-color: #5F5F5F;
			color: #212121;
		}
		
		#datepicker .ui-widget-header 	
		{
			border-color: #5F5F5F;
			background-color: #808080;
			border-width: 1px;
		}
		
		/* Text attributes for the Days of Week Text */ 
		#datepicker .ui-datepicker table th
		{
			font-size: .8em;
			color: #000;
			font-weight: bold;
		}
	/* EndOAWidget_Instance_2137022 */

/* BeginOAWidget_Instance_2137022: #datepicker_2 */
.demoHeaders { margin-top: 2em; }

		#datepicker_2 .ui-widget {
			font-family: inherit;
		}
			
		#datepicker_2 .ui-datepicker {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		
		#datepicker_2 .ui-datepicker-title {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			font-size: 1.1em;
			color: #000;
			font-weight: normal;
			line-height: 1.8em;
		}


		#datepicker_2 .ui-state-default, .ui-widget-content .ui-state-default {
			border-color: #e6e6e6;
			background-color: #e6e6e6;
			color: #555555;
		}
		
		#datepicker_2 .ui-state-default, .ui-state-default a {
			color: #555555;
		}	
		
			
		#datepicker_2 .ui-state-highlight, .ui-widget-content .ui-state-highlight {
			border-color:#FCEFA1;
			background-color:#FCEFA1;
			color:#363636;
		}		
		
		#datepicker_2 .ui-state-active, .ui-widget-content .ui-state-active { 
			border-color: #FFFFFF;
			background-color: #FFFFFF;
			color: #212121; 
		}
		
		#datepicker_2 .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus 	
		{
			border-color: #5F5F5F;
			background-color: #5F5F5F;
			color: #212121;
		}
		
		#datepicker_2 .ui-widget-header 	
		{
			border-color: #5F5F5F;
			background-color: #808080;
			border-width: 1px;
		}
		
		/* Text attributes for the Days of Week Text */ 
		#datepicker_2 .ui-datepicker table th
		{
			font-size: .8em;
			color: #000;
			font-weight: bold;
		}
		
/* EndOAWidget_Instance_2137022 */
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr th table tr td h4 {
	font-size: 75%;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr th table tr td {
	font-size: 75%;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table {
	font-size: small;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #breadcrumbs2 a {
	font-family: Verdana, Geneva, sans-serif;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #breadcrumbs2 a {
	font-family: MS Serif, New York, serif;
}
.center_align {
	text-align: center;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible .center_align {
	text-align: center;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p .center_align {
	text-align: center;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible  #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p .center_align {
	font-family: "Courier New", Courier, monospace;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible  #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p .center_align {
	color: #03C;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p .center_align strong {
	color: #306;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible p {
	color: #0C9;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td {
	text-align: center;
	font-size: x-small;
}

.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td p {
	color: #000;
	font-size: x-small;
	font-family: Verdana, Geneva, sans-serif;
	text-align: center;
}
.garuda {
	color: #000;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td p .garuda {
	font-size: small;
	text-align: center;
}
.view_button {
	background-color: #C60;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td p strong {
	font-size: small;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td table tr th strong {
	font-family: Tahoma, Geneva, sans-serif;
	color: #03F;
}
.container .content #TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #TabbedPanels2 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible #breadcrumbs2 #TabbedPanels4 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible table tr td table {
	color: #30F;
}

</style>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background: #ADB96E;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/

.content {

	padding: 10px 0;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background: #CCC49F;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- ............................................... -->
<!-- new date-->
<!-- ............................................... -->
<link type="text/css" href="jquery-ui-1.8.16.custom/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery-ui-1.8.16.custom/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js"></script>

<!-- new date end-->
<!-- ............................................... -->
<!-- Collapsable Panel-->
<!-- ............................................... -->
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<!-- ............................................... -->
<!--Validation Radio-->
<!-- ............................................... -->
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<!-- ............................................... -->
<!-- tool tip-->
<!-- ............................................... -->
<script src="javascript/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="javascript/wowtip.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2466546" binding="#OAWidget" />
</oa:widgets>
-->
</script>

<script type="text/javascript">
<!-- ............................................... -->
//Popup dialog for future plan subscribe 
<!-- ............................................... -->
function popup(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
			
}

<!-- ............................................... -->
//Popup dialog for view plan on meter page 
<!-- ............................................... -->
function popup1(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box1').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box1').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay1').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box1').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message1').html(message);
	$('#dialog-box2').hide();
	$('#dialog-overlay2').hide();
			
}
<!-- ............................................... -->
// Update plan on meter page
<!-- ............................................... -->
function popup2(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box2').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box2').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay2').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box2').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message2').html(message);
	$('#dialog-box1').hide();
	$('#dialog-overlay1').hide();
			
}

function closepopup1() {
			$('#dialog-overlay1').hide();
	$('#dialog-box1').hide();
			
}
function closepopup2() {
			$('#dialog-overlay2').hide();
	$('#dialog-box2').hide();
			
}

<!-- ............................................... -->
//Popup dialog for make payment in pay my bills
<!-- ............................................... -->
function popup3(message) {
		
	var popup = $(window);
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box3').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box3').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay3').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box3').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message3').html(message);
	
}
	
function closepopup3() {
			$('#dialog-overlay3').hide();
	$('#dialog-box3').hide();
			
}



<!-- ............................................... -->
//Popup dialog for processing after make a payment 
<!-- ............................................... -->
function popup4(message) {
	
	closepopup3();
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box3').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box3').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay4').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box4').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message4').html(message);
	setTimeout('delayer()', 3000);
	
}
function delayer(){
    $('#dialog-overlay4').hide();
	$('#dialog-box4').hide();
	document.getElementById('Paybill').style.display = "none";
    document.getElementById('paySucc').style.display = "block";
}
<!-- ............................................... -->
//Popup dialog for viewing Accounts/cards 
<!-- ............................................... -->
function popup5(message) {
		
	var popup = $(window);
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box5').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box5').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay5').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box5').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message5').html(message);
	
}
	
function closepopup5() {
			$('#dialog-overlay5').hide();
	$('#dialog-box5').hide();
			
}
<!-- ............................................... -->
//Popup dialog for viewing Accounts/cards
<!-- ............................................... -->


function popup6(message) {
		
	var popup = $(window);
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box6').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box6').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay6').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box6').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message6').html(message);
	
}
	
function closepopup6() {
			$('#dialog-overlay6').hide();
	$('#dialog-box6').hide();
			
}
<!-- ............................................... -->
//Popup dialog for viewing Accounts/cards
<!-- ............................................... -->


function popup7(message) {
		
	var popup = $(window);
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box7').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box7').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay7').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box7').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message7').html(message);
	
}
	
function closepopup7() {
			$('#dialog-overlay7').hide();
	$('#dialog-box7').hide();
			
}
<!-- ............................................... -->
//Popup dialog for view plan on meter page 
<!-- ............................................... -->
function popup8(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box8').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box8').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay8').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box8').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message8').html(message);
	
			
}
function closepopup8() {
			$('#dialog-overlay8').hide();
	$('#dialog-box8').hide();
			
}

<!-- ............................................... -->
//Print e-receipt 
<!-- ............................................... -->
function popup9(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box9').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box9').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay9').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box9').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message9').html(message);
				
}
function closepopup9() {
			$('#dialog-overlay9').hide();
	$('#dialog-box9').hide();
			
}
<!-- ............................................... -->
//Popup dialog for view plan on meter page 
<!-- ............................................... -->
function popup10(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box10').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box10').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay10').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box10').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message10').html(message);
	
			
}
function closepopup10() {
			$('#dialog-overlay10').hide();
	$('#dialog-box10').hide();
			
}
<!-- ............................................... -->
//emailed succesfull popup 
<!-- ............................................... -->
function popup11(message) {
	
	
	closepopup10();	
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box11').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box11').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay11').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box11').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message11').html(message);
	
			
}
function closepopup11() {
			$('#dialog-overlay11').hide();
	$('#dialog-box11').hide();
			
}
<!-- ............................................... -->
//save payment mode popup credit
<!-- ............................................... -->
function popup12(message) {
	
	
// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box12').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box12').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay12').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box12').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message12').html(message);
	
			
}
function closepopup12() {
			$('#dialog-overlay12').hide();
	$('#dialog-box12').hide();
			
}
<!-- ............................................... -->
//save profile info 
<!-- ............................................... -->

function popup13(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box13').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box13').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay13').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box13').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message13').html(message); 	
			
}
function closepopup13() {
			$('#dialog-overlay13').hide();
	$('#dialog-box13').hide();
			
}
<!-- ............................................... -->
//save payment mode popup Accont
<!-- ............................................... -->

function popup14(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-box14').height());  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box14').width()/2); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay14').css({height:maskHeight, width:maskWidth+200}).show();
	$('#dialog-box14').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message14').html(message); 	
			
}
function closepopup14() {
			$('#dialog-overlay14').hide();
	$('#dialog-box14').hide();
			
}
<!-- ............................................... -->
<!-- ............................................... -->

function goBackCredit()
{
	document.getElementById('CardInfo').style.display = "none";
	document.getElementById('PaymentMode').style.display = "none";
	document.getElementById('PaymentInfo').style.display = "block";
}
<!-- ............................................... -->
<!-- ............................................... -->

function goBackBank()
{
	document.getElementById('BankAccInfo').style.display = "none";
	document.getElementById('PaymentMode').style.display = "none";
	document.getElementById('PaymentInfo').style.display = "block";
}

<!-- ............................................... -->
<!-- ............................................... -->
function goTo(){
	document.getElementById('usage').style.display = "none";
    document.getElementById('meter').style.display = "block";
}

<!-- ............................................... -->
<!-- ............................................... -->
function AddCard(){
	document.getElementById('PaymentInfo').style.display = "none";
    document.getElementById('PaymentMode').style.display = "block";
}

<!-- ............................................... -->
<!-- ............................................... -->
function findplan(str){
	
if (str=="Short-term")
  {
   document.getElementById("rightplan").style.display='none';
   document.getElementById("findmyplan1").style.display='block';
  return;
  } 
  if (str=="Long-term")
  {
   document.getElementById("rightplan").style.display='none';
   document.getElementById("findmyplan2").style.display='block';
  return;
  } 
}
<!-- ............................................... -->
<!-- ............................................... -->

function reset_search(){
 document.getElementById("rightplan").style.display='block';
   document.getElementById("findmyplan2").style.display='none';
      document.getElementById("findmyplan1").style.display='none';
	
}
<!-- ............................................... -->
<!-- ............................................... -->
function ShowInfo(action) {
  if (action == 'Account') {
    document.getElementById('CardInfo').style.display = "none";
    document.getElementById('BankAccInfo').style.display = "block";
  } else {
    document.getElementById('BankAccInfo').style.display = "none";
    document.getElementById('CardInfo').style.display = "block";
  }
}
<!-- ............................................... -->
<!-- remove row -- >
<!-- ............................................... -->
function deleteRow(row)
{
	document.getElementById('BankAccs').deleteRow(row);
}
function deleteRowCard(row)
{
	document.getElementById('Cards').deleteRow(row);
}
<!-- ............................................... -->
<!-- remove row -- >
<!-- ............................................... -->

function PayModeAdd()
{
	closepopup12();
	closepopup14();
		document.getElementById('PaymentMode').style.display = "none";
    document.getElementById('NewPayModeAdded').style.display = "block";

}
</script>

<script type="text/javascript">
function setOptions(chosen) {


if (chosen == "1") {
 document.getElementById("curbal").innerText="Current Balance : Rs 350";
 document.getElementById("totamt").innerText="Total Amount Due: Rs 350";
}
if (chosen == "2") {
 document.getElementById("curbal").innerText="Current Balance : Rs 650";
  document.getElementById("totamt").innerText="Total Amount Due: Rs 650";
}
if (chosen == "3") {
 document.getElementById("curbal").innerText="Current Balance : Rs 1000";
  document.getElementById("totamt").innerText="Total Amount Due: Rs 1000";
}
}

function setPayMode() {
chosen = ""
len = document.radioform.group1.length
var selbox = document.myform1.cardList
selbox.options.length = 0

for (i = 0; i <len; i++) {
if (document.radioform.group1[i].checked) {
chosen = document.radioform.group1[i].value
}

}
if (chosen == "1") {
	//alert("Bank");
selbox.options[selbox.options.length] = new
Option('Select Account','onezero');
selbox.options[selbox.options.length] = new
Option('Savings-7569','oneone');
 selbox.options[selbox.options.length] = new
Option('Checking-4534','onetwo');
}
if (chosen == "2") {
	//alert("card");
	selbox.options[selbox.options.length] = new
Option('Select Card','twozero');
 selbox.options[selbox.options.length] = new
Option('Master Card - 4352','twoone');
  selbox.options[selbox.options.length] = new
Option('Credit Card - 7789','twotwo');
}

}

function editProfileDiv()
{
	document.getElementById('editInfo').style.display = "none";
    document.getElementById('editProfile').style.display = "block";
}

function backToProfileDiv()
{
	document.getElementById('editProfile').style.display = "none";
    document.getElementById('editInfo').style.display = "block";
}
</script>
<!--<script type="text/javascript">

			$(function(){		
				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
			});
		</script> 
        -->



<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <div class="header">
    <table width="957" border="0">
      <tr>
        <td width="391"><a href="#"><img src="images/mtnl_logo.png" alt="Insert Logo Here" name="Insert_logo" width="391" height="66" id="Insert_logo" style="background: #C6D580; display:block;" /></a></td>
        <td width="248">&nbsp;</td>
        <td width="304"><table width="298" border="1">
          <tr>
            <td><p><font size="2">Welcome Sita, You last logged in on 5th Dec 2011</font>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
             &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
              <input type="submit" name="logout" id="logout" value="Log out" />
            </p>
              </td>
          </tr>
        </table></td>
      </tr>
    </table>
  
  <!-- end .header --></div>
  <div class="content">
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">My Account</li>
        <li class="TabbedPanelsTab" tabindex="0">Individual</li>
        <li class="TabbedPanelsTab" tabindex="0">Business</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <div id="TabbedPanels2" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0"><a href="Task1-Account summary.php" target="_self">Account Summary</a></li>
              <li class="TabbedPanelsTab" tabindex="0"> Account Usage</li>
              <li class="TabbedPanelsTab" tabindex="0">Pay Your Bills</li>
              <li class="TabbedPanelsTab" tabindex="0">Billig History</li>
              <li class="TabbedPanelsTab" tabindex="0">Services</li>
              <li class="TabbedPanelsTab" tabindex="0">Profile</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ASEdit" -->
               <div id="breadcrumbs"> 
                  <h5><a href="#">My Account</a> &gt;Account Summary
                  </h5>
                </div>
                  <table width="939" height="58" border="0">
                    <tr>
                      <th align="left" scope="row"><h3>WELCOME SITA,</h3>
                        <table width="333" height="123" border="0" align="center" id="balancetable" >
                          <tr>
                            <th  align="center" width="435"  scope="row">
                             <h5>TOTAL BALANCE DUE: Rs 1000</h5>
                            <h6>(09/15/2011) - (10/15/2011)</h6>
                            <h5><input type="submit" name="button" id="button" value="Make a Payment " /></h5>
                           </th>
                            <h2 class="demoHeaders">Datepicker</h2>

		<p>Date: <input type="text" id="datepicker"></p>
                            </td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                       
                        <table id="planquicklook" width="320" height="280" border="1">
                          <tr>
                            <th width="908" height="34" scope="row"><h3>QUICK LOOK OF YOUR PLANS</h3></th>
                          </tr>
                          <tr>
                            <td align="LEFT" bgcolor="#FFFFCC" scope="row">Mobile-</td>
                          </tr>
                          <tr>
                            <td align="LEFT" scope="row" ><h4><a href="Task1-Account Summary.php" >Garuda 9901317127 </a><br/>
                              Balance due :  Rs 650 <br />
                              Due Date : 11/03/2011
                               <input  type="submit" name="button2" id="button2" value="Quick Payment" />
                            </td>
                            <td>
                          </tr>
                          <tr>
                            <td align="LEFT" bgcolor="#FFFFCC" scope="row">Internet-</td>
                          </tr>
                          <tr>
                            <td align="LEFT" scope="row"><h4><a href="Task1-Account Summary.php">Broadband Freedom 769 </a><br/>
                              Balance due :  Rs 350 <br/>
                              Due Date : 11/03/2011
                              <input  type="submit" name="button3" id="button3" value="Quick Payment" />
                            </td>
                          </tr>
                        </table>
                       </th>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
               
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="AUEdit" -->
              <div id="breadcrumbs">
                <font size="2.5"><a href="#">My Account</a> &gt; <a href="#">Account Usage</a> &gt; <a href="#">Garuda 990</a> </font>
              </div>
              <h5 align="center">YOUR PLANS&nbsp;  
              </h5>
              
              <div  id="TabbedPanels4" class="VTabbedPanels">
                  <ul align="center" class="TabbedPanelsTabGroup">
                    <li class="TabbedPanelsTab" tabindex="0">BroadBand Freedom 769</li>
                    <li class="TabbedPanelsTab" tabindex="0">Garuda 9901317127 </li>
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">Content 1</div>
                    <div class="TabbedPanelsContent">
                      <div id="usage">     
                       <table align="center" width="750" height="60" border="0">
                         <tr>
                           <td align="center" width="550">
                          <p><h3>Current Balance : Rs 650 </br> Due Date : 11/30/2011</h3>
                          </br> <input name="button5" type="submit" value="Make a Payment" onclick="TabbedPanels2.showPanel(2)"/> </p>
                           </td>
                          
                           <td align="right" width="200">
                                  <p align="right"> <a href="javascript:goTo()" class="">
                                  <h3> <span class="meter">Thumbs Down!!</span></h3>
                                  <h3> <span class="meter">Your Paying More</span></h3>
                                  <img border="1" src="images/Thumbs_down.jpg" width="100" height="78" />
                                  <h3> <span class="meter">Click here to  SAVE</span></h3>
                                  </a>
                                  </p>

                           </td>
                        </tr>
                       </table>
                      <div id="TabbedPanels5" class="HTabbedPanels">
                         <ul class="HTabbedPanelsTabGroup">
                           <li class="TabbedPanelsTab" tabindex="0">Analyse Usage</li>
                           <li class="TabbedPanelsTab" tabindex="0">Call History<br /></li>
                           <li class="TabbedPanelsTab" tabindex="0">Plan Details</li>
                         </ul>
                         <div class="TabbedPanelsContentGroup">
                             <!--analyse usage-->
                              <div class="TabbedPanelsContent">
                              <table border="0" width="750">
                                <tr>
                                  <td align="left">
                                    <img border="1"  src="images/chart.PNG" width="620" height="200" />
                                  </td>
                                </tr>
                              </table>
                              </div>
                               <!--call history-->
                                 <div class="TabbedPanelsContent">
                                    <table width="700" border="0"> <!--Invisible table inside Call History for positioning -->
                                      <tr>
                                       <th scope="row">
                                         <table id="datetable" align="center" width="100" height="50" border="1"> <!-- Date Table -->
                                           <tr>
                                             <td scope="row">
                                               <table  border="0"><!-- table for positioning dtae fields .. two rows -->
                                                 <tr>
                                                    Filter based on Dates
                                                    <td scope="row" >                                 
                                                 <!--     <p>From Date: <input type="text" id="datepic"></p>
                                                    </td>
                                                    <td scope="row" >
                                                       <p> To Date: <input type="text" id="datepic1"></p>                                                    </td>-->
                                                       <td>
                                                       
                                                  </tr>
                                                  <tr>
                                                    <td  align="center" scope="row">
                                                       <input name="button4" type="submit" value="Update" />
                                                    </td>
                                                  </tr>
                                               </table>
                                               <!-- End of Datapicker table-->
                                             </td>
                                           </tr>
                                         </table>
                                         </br>
                                         <h5> Call History From Last Billed Date </h5>
                                    
                                  <table  align="center"  border="0" id="callhistory">
                                    <tr>
                                      <th scope="row">Date/Time</th>
                                      <th scope="row">Number Called</th>
                                      <th scope="row">Duration(min)</th>
                                      <th scope="row">Cost(Rs)</th>
                                      <th scope="row">Discount Type</th>
                                    </tr>
                                    <tr>
                                     <td>10/23/2011 1600</td>
                                     <td>9901316036</td>
                                     <td>3.00</td>
                                     <td>1.50</td>
                                     <td>Local In-Network </td>
                                   </tr>
                                   <tr>
                                     <td>10/23/201  09.00</td>
                                     <td>9934862388</td>
                                     <td>3.30</td>
                                     <td>1.23</td>
                                     <td>Local Out-Network</td>
                                  </tr>
                                  <tr>
                                    <td>10/22/201  12.30</td>
                                     <td>9935238868</td>
                                     <td>10.00</td>
                                     <td>15.00</td>
                                     <td>STD</td>
                                 </tr>
                                 <tr>
                                     <td>10/21/201  10.00</td>
                                     <td>9678238868</td>
                                     <td>1.00</td>
                                     <td>1.50</td>
                                     <td>lOCAL </td>
                                </tr>
                                <tr>
                                    <td>10/21/201  09.00</td>
                                     <td>9935238868</td>
                                     <td>20.00</td>
                                     <td>30.00</td>
                                     <td>STD</td>
                                 </tr>
                                </table>
                               </th>
                               </tr>
                              </table>
                              </div> <!-- call history closed-->
                                                        
                              <div class="TabbedPanelsContent">plan details </div>
                            </div>
                       </div><!-- Htabbedpane 5 closed-->
                    </div><!-- id usage-->
                    
              <div id="meter" style="display:none">
               <p align="center">In meter page</p>
                <table width="694" border="0">
                          <tr>
                            <td width="563">  <h2>Plan-O-Meter:  <span class="garuda">Garuda 990 Rating  </span><font color="red" face="Verdana, Geneva, sans-serif" style="&lt;&gt;"><blink> Thumbs Down</blink></font></h2></td>
                            <td width="121"><img src="images/Thumbs_down.jpg" alt="thumbdown" width="121" height="78" /></td>
                          </tr>
                          <tr>
                            <td height="464" align="right" valign="top"><p><strong>Past Usage Analysis</strong></p>
                              <table width="341" border="0" align="center" frame="below">
                                <tr>
                                <th width="304" height="25" bgcolor="#FFFFFF" scope="col"><strong>Average Free calls exceeded (Monthly)*</font></strong></th>
                                <th width="21" bgcolor="#FFFFFF" scope="col">300</font></th>
                              </tr>
                              <tr>
                                <td height="24" align="left" valign="top" bgcolor="#FFFFFF"><p><strong style="font-size: x-small; font-family: Tahoma, Geneva, sans-serif; color: #03C;">Average Data exceeded (Monthly in MB)*</font></strong></p></td>
                                <td valign="top" bgcolor="#FFFFFF"><strong>40</font></strong></td>
                              </tr>
                          </table>
                              <p>
                                <?php
                                 	include "C:/xampp/htdocs/UID/libchart/classes/libchart.php";
                                 	$chart = new LineChart();
                                 	$dataSet = new XYDataSet();
                                  	$dataSet->addPoint(new Point("11-01", 273));
                                  	$dataSet->addPoint(new Point("11-02", 421));
                                 	$dataSet->addPoint(new Point("11-03", 642));
                                   	$dataSet->addPoint(new Point("11-04", 799));
                                	$dataSet->addPoint(new Point("11-05", 1009));
                                 	$dataSet->addPoint(new Point("11-06", 1406));
                                  	$dataSet->addPoint(new Point("11-07", 1820));
                                   	$dataSet->addPoint(new Point("11-08", 1500));
                                	$dataSet->addPoint(new Point("11-09", 700));
                                	$dataSet->addPoint(new Point("11-10", 1400));
                                  	$dataSet->addPoint(new Point("11-11", 450));
                                	$chart->setDataSet($dataSet);	
                                	$chart->setTitle("Free Calls exceeded for the year 2011");
                                  	$chart->render("demo/generated/demo5.png");
	
	
                                 	$chart = new LineChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("11-01", 20));
	$dataSet->addPoint(new Point("11-02", 40));
	$dataSet->addPoint(new Point("11-03", 60));
	$dataSet->addPoint(new Point("11-04", 10));
	$dataSet->addPoint(new Point("11-05", 0));
	$dataSet->addPoint(new Point("11-06", 14));
	$dataSet->addPoint(new Point("11-07", 18));
	$dataSet->addPoint(new Point("11-08", 15));
	$dataSet->addPoint(new Point("11-09", 70));
	$dataSet->addPoint(new Point("11-10", 14));
	$dataSet->addPoint(new Point("11-11", 45));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Data(MB) exceeded for the year 2011");
	$chart->render("demo/generated/demo6.png");
?>
                              
                              * Monthly Average is calculated from the date you are using the connection                              
                              <p>
                              <div id="CollapsiblePanel1" class="CollapsiblePanel">
                                <div class="CollapsiblePanelTab" tabindex="1">Free Calls Exceeded</div>
                              <div class="CollapsiblePanelContent"> <img src="demo/generated/demo5.png" alt="Line chart" style="border: 1px solid gray;"/>
</div>
                          </div>
                            <div id="CollapsiblePanel2" class="CollapsiblePanel">
                              <div class="CollapsiblePanelTab" tabindex="1">Data (MB) limit exceeded</div>
                              <div class="CollapsiblePanelContent"><img src="demo/generated/demo6.png" alt="Line chart" style="border: 1px solid gray;"/></div>
                            </div>
                            <p>&nbsp;</p>
                            <p><span class="reco">Recommendations for You!</span> <span id="spryradio1">
                              <label>
                                <br />
                                <input type="radio" name="Plan_radio_group" value="radio" id="Plan_radio_group_0" />
                                Freedom 700</label>
                              <br />
                              <label>
                                <input type="radio" name="Plan_radio_group" value="radio" id="Plan_radio_group_1" />
                                Garuda-1000</label>
                              <br />
                              <br />
                              <br />
                              <span class="radioRequiredMsg">Please make a selection.</span></span> </p>
                              <form id="form1" name="form1" method="post" action="">
                                   <a href="javascript:popup1('')" class="button">View Plan</a>
                                   <a href="javascript:popup2('')" class="button">Update Plan</a>
                                   <div id="dialog-overlay1"></div>
                                      <div id="dialog-box1">
	                                     <div class="dialog-content1">
                                            <div id="dialog-message1"></div>
	
<h2 align="center"><b>View and compare plans</h2>
<table width="400" height="200" align="center" border="1">
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
</table>

<br>
 <a href="http://localhost:81/UID/meter1.php" class="buttonLeft">Confirm</a>
        <a href= "javascript: closepopup1()" class="buttonRight">Close</a>
	</div>
</div>

<div id="dialog-overlay2"></div>
<div id="dialog-box2">
	<div class="dialog-content2">
   	<div id="dialog-message2"></div>
	
<h2 align="center" draggable="true" style="border:thick"><b>Are you sure you want to change your present plan to Freedom 600 rate plan?<b></h1>
<br>
 <a href="http://localhost:81/UID/meter1.php" class="buttonLeft">Confirm</a>
        <a href="javascript: closepopup2()" class="buttonRight">Close</a>
	</div>
</div>
</form>                                                                                                                                       <p>&nbsp;</p></td>
 <td>&nbsp;</td>
 </tr>
 </table>
  </div>
  </div>
  </div>
                </div> <!-- VTABBBED PANE 4-->
              
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BPEdit" -->
                 <div id="breadcrumbs"> 
                  <h5><a href="#">My Account</a> &gt;Pay Your bills
                  </h5>
                  </div>
                  <table border="1" width="940">
                   <tr>
                    <td width="690">
                       <div id="Paybill" >
                        <p align="center"><h4 align="center"> 3 Simple Steps To Pay your Bill</h4>
                         <p align="center"> 1) Choose A Plan or All plans </br> 2)Choose a payment mode from saved information </br>3)Make Total/Partial Payment</p></p> 
                                             
                        <table align="center" width="600" border="1">
                            <tr>
                              <td>
                                <table border="0" height="501" >
                                <tr>
                                <td width="500" height="20">
                                <strong>Step 1:</strong>
                                </td>
                                </tr>
                                 <tr>
                                   <td width="300" height="68"  align="center">
                                     <strong>Choose A Plan</strong></br>
                                      <label for="planList"></label>
                                      <form name="myform" size="1" >
                                        <select name="planList" size="1" id="planList" title="Select your Plan" width="200"  onchange=                                        "setOptions(document.myform.planList.options[document.myform.planList.selectedIndex].value);">
                                          <option value="1">Broadband freedom 769</option>
                                          <option value="2">Garuda 990</option>
                                          <option value="3" selected="selected">All</option>
                                        </select>
                                      </form>
                                     </td>
                                     <td align="center" width="300">
                                     <label id="curbal" size="50"><strong>Current Balance: Rs 1000</strong></label>
                                     </br> <p> <font size="1">(for chosen plan)</font></p></td>
                                 </tr>
                                   <tr>
                                <td width="600" height="5">
                                <hr/>
                                </td>
                                <td width="500" height="5">
                                <hr/>
                                </td>
                                </tr>
                                  <tr>
                                <td width="500" height="20">
                                <strong>Step 2"</strong>
                                </td>
                                </tr>
                                 <tr>
                                  <td  width="300" height="158">
                                      <p><strong>Select Payment Mode:</strong></p>
                                          <form name="radioform" >
                                             <input type="radio" name="group1" value="1" onclick="setPayMode()">Checking/Saving Accounts<br>
                                             <input type="radio" name="group1" value="2" onclick="setPayMode()">Credit/Debit Cards<br>
                                          </form>
                                     <p>
                                         <label for="cardList"></label>
                                         <input type="button" name="paymode" id="paymode" value="Add a new payment mode" />
                                     </p> 
                                  </td>
                                  <td width="300" height="158"><strong>Select Account/Card </strong>
                                      <p align="center"> <form name="myform1" >
                                         <select name="cardList" size="1" id="cardList" size="1" >
                                            <option value=>Select a payment mode</option>
                                         </select>
                                      </form>
                                      </p>
                                  </td>
                                 </tr>
                                   <tr>
                                <td width="500" height="5">
                                <hr/>
                                </td>
                                <td width="500" height="5">
                                <hr/>
                                </td>
                                </tr>
                                  <tr>
                                <td width="500" height="20">
                                <strong>Step 3:</strong>
                                </td>
                                </tr>
                                 <tr>
                                   <td height="237" colspan="2">
                                      
                                     <strong>Payment For: </strong>
                                      <p><label>
                                         <br />
                                        <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_0" />
                                        <label id="totamt" >Total Amount Due: Rs 1000</label> <font size="1" color="#0000CC">   <u>                                        Currency Conversion </u></font></label>
                                        <br />
                                        <label>
                                         <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_1" />
                                        </label>
                                        <strong>Enter Amount:</strong>
                                         <label for="amt"></label>
                                         <input type="text" name="amt" id="amt" />
                                      </p>
                                      <p> <font size="1">(can make a partial payment using multiple cards/accounts) </font></p>                                      <hr />
                                       <p align="center"> <form id="payform" name="payform" method="post" action="">
                                      
                                         <a href="javascript:popup3('')" class="buttonpay">Make a Payment</a>                                         <a href="" class="buttonRight">Reset</a>
                                         <div id="dialog-overlay3"></div>
                                           <div id="dialog-box3">
                                             <div class="dialog-content3">
                                         	   <div id="dialog-message3"></div>
                                                 <h2 align="center" draggable="true" style="border:thick">
                                                  <b>Confirm Payment<b>
                                                 </h2>
                                                 <table align="center" border="1">
                                                  <tr>
                                                    <td>
                                                    <table align="center" border="0">
                                                        <tr>
                                                           <td align="left">
                                                                Customer Name : Sita 
                                                           </td>                
                                                           <td align="right">
                                                                Bill Generation date: 10/16/2011
                                                           </td>                          
                                                        </tr>
                                                        <tr>
                                                           <td align="left">
                                                                Account ID: 1236729013247
                                                           </td>                
                                                           <td align="right">
                                                                Bill Payment date: 10/24/2011
                                                           </td>                          
                                                       </tr>
                                                       <tr> 
                                                           <td align="left">
                                                                 Address : <p>G-47,Block E </p>
                                                                 </br><p>Saharunpur</p>
                                                           </td>                
                                                          <td align="right">
                                                          </td>                          
                                                      </tr>
                                                      <tr>
                                                          <td align="left">
                                                               Card No: Checking Account 4534
                                                          </td>                
                                                          <td align="right">
                                                          </td>                          
                                                     </tr>
                                                      <tr>
                                                         <td align="left">
                                                             Amount : Rs325
                                                        </td>                
                                                        <td align="right">
                                                        </td>                          
                                                     </tr>
                                                    </table>
                                                   </td>
                                                  </tr> 
                                                 </table>
                                                 <br>
                                                 <a href="javascript: popup4()" class="buttonLeft">Confirm</a>
                                                 <a href="javascript: closepopup3()" class="buttonRight">Close</a>
                                             </div>
                                           </div>
                                           <div id="dialog-overlay4"></div>
                                             <div id="dialog-box4">
                                         	  <div class="dialog-content4">
                                         	   <div id="dialog-message4"></div>
                                                <h2 align="center" draggable="true" style="border:thick">
                                                <b>Processing <b>
                                                </h2>
                                              </div>
                                             </div>
                                      </form></p>
                                    </td>
                                  </tr>   
                                </table>
                                
                              </td>
                            </tr>
                           </table>
                          </div> 
                        <div id="paySucc" style="display:none">
                          <p align="center">Payment successful</p>
                          <table align="center" border="1">
                           <tr>
                            <td>
                             <table align="center" border="0">
                               <tr>
                                 <td>
                                  <p align="center">
                                  Payment Details
                                  </br> </br>
                                  Plan- Garuda 990
                                  </br>
                                  Account ID-1236729013247
                                  </br>
                                  Amount Paid- Rs 325
                                  </br>
                                  Date Paid-10/30/2011
                                  </br>
                                  Payment Type- Checking Account 4534
                                  </br>
                                  Confirmation Code-IDFTUN 
                                  </br>
                                  </p>
                                 </td>
                               </tr>
                               <tr>
                                <td align="left">
                                  <a href="javascript: GoToPayment()" class="buttonpay">Make Another Payment</a>
                                </td>
                                <td align="right">
                                  <a href="javascript: popup8()" class="buttonrecpt">E-Receipt</a>
                                </td>            
                               </tr>
                              </table> 
                             </td>
                            </tr>
                           </table>
                          </div>
                         </td>
                         <td align="center" width="250">
                         <img src="images/offer1.png" width="225" height="600" /></td>
                        </tr>
                       </table>
             
                             
               <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BHEdit" -->Makes Changes in the BHEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="SerEdit" -->Makes Changes in the SerEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ProEdit" -->
              <div id="breadcrumbs1"> 
                  <h5><a href="#"><font size="2.5">My Account</a> &gt;Profile </h5>
                </div>
              <div id="TabbedPanels6" class="VVTabbedPanels">
                <ul class="TabbedPanelsTabGroup">
                      <li class="TabbedPanelsTab" tabindex="0">Your Profile</li>
                      <li class="TabbedPanelsTab" tabindex="0">Add Payment Information</li>
                      <li class="TabbedPanelsTab" tabindex="0">Auto Payment Setup</li>
                      <li class="TabbedPanelsTab" tabindex="0">Bill Payment Alert</li>
                </ul>
                <div class="TabbedPanelsContentGroup">
                  <div class="TabbedPanelsContent">
                  <table border="0" width="800" bordercolor="#330099">
                   <tr>
                    <td width="600" ><!-- first blue col -->
                     <table border="0" bordercolor="#CC3300" >
                       <tr ><!--1st red row -->
                         <td width="580">
                           <p align="center"><strong>User Profile</strong></p>
                            <hr/>
                         </td>
                       <tr>
                       <tr ><!--2nd red row -->
                         <td width="580">
                          <div id="editInfo" style=display:block>
                          <p align="center"><strong>
                            <label for="profile-details"></label>
                              <table  width="350" align="center" border="1">
                                <tr>
                                 <td>
                                  <p align="center"><strong>Personal Information</strong></p>
                                 </td>
                               </tr>
                               <tr>
                                 <td>
                                   <table align="center" border="0">
                                    <tr>
                                     <th align="left">Name:</th>
                                     <td align="left">Sita</td>
                                    </tr>
                                    <tr>
                                     <th align="left">Account ID:</th>
                                     <td align="left">1236729013247</td>
                                    </tr>
                                    <tr>
                                     <th align="left">Address:</th>
                                     <td align="left"><p align="left"> G-47 Block E
                                                       </br>
                                                       Saharanpur </p>
                                     </td>
                                    </tr>
                                    <tr>
                                      <th align="left">Contact Number:</th>
                                      <td align="left">9901311271</td>
                                    </tr>
                                    <tr>
                                     <th align="left">Date Of Birth:</th>
                                     <td align="left">05/10/1985</td>
                                    </tr>
                                   </table>
                                 </td>
                               </tr>
                              </table>
                              <br /> <br /> 
                              <table align="center" border="0" width="350">
                               <tr>
                                <td align="left">
                    <input type="button" name="editinfo" id="editinfo" value="Edit Personal Information" onclick="editProfileDiv()"/> 		
                                 </td>                       
                                 <td>
                        <input type="submit" name="editaccount" id="editaccount" value="Edit Account Settings" onclick=" "/>
                                 </td>
                               </tr>
                              </table>
                              </strong>
                             </p>
                          </div>  <!-- end of Edit info-->
                          
                         </td>
                       </tr>
                     </table  >
                         </td><!-- first blue col ends -->
                          <td width="180"> <!-- Sec blue col -->
                            <img src="images/mtnl_3g.jpg" width="180" height="400" />
                          </td>
                         </tr>
                        </table>
                          <div id="editProfile" style="display:none">
                             <center> <table align="center" border="0"> <tr><td> <form>
                             <tr> <td align="left">Name: <input type="text" width="50" /> <br /> <br/> </td> </tr>
                               <tr> <td align="left">Account ID:  <input type="text" width="50" /> <br /> <br/> </td> </tr>
                               <tr> <td align="left">Address: <input type="text" width="100" /> <br /> <br/> </td></tr>
                               <tr> <td align="left">Home Phone: <input type="text" width="10" /> <br /> <br/> </td></tr>
                               <tr> <td align="left">Cell Phone: <input type="text" width="10" /> <br /> <br/> </td></tr>
                             <tr><td><input type="button" value="Save" onclick="popup13()"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="reset" value="Reset" onclick="clear()" /> </form> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="button" value="Back to Profile" onclick="backToProfileDiv()"/></td> </tr> </table>
                             </center>     
                           </div>
                            <div id="dialog-overlay13"></div>
                              <div id="dialog-box13">
                              	<div class="dialog-content13">
                                   <div id="dialog-message13"></div>                            
                                     <p><font size="2"> The new information has been successfully saved to your account </font></p>
                                      <br /> <br /> <br /> 
                                      <center><a href="javascript: closepopup13()" class="buttonCenter">Close</a> </center>
                               </div>
                           </div><!-- end of overlay13-->
                  </div><!-- TabbedPanelsContent1-->
                  <div class="TabbedPanelsContent">
                    <div id="PaymentInfo">
                        <p align="center"><strong>Payment Information Saved to your account </strong> </p>
                        <hr/>
                        <p align="center">
                          <input type="button" name="paymode2" id="paymode2" value="Add a new payment mode" onClick="AddCard()"/>
                        </p>
                        <p align="center">Net Banking Accounts:</p>
                          <table id="BankAccs" align="center" width="500" border="1">
                           <tr>
                            <td width="185">Bank Account</td>
                            <td width="491">Status</td>
                           </tr>
                           <tr id="row1">
                            <td>Wells Fargo, NA- Checking 4521</td>
                            <td>Primary
                            <div align="right">
                              <font size="2.5" color="#000099">
                                <a href="javascript:popup5('')">View</a>	&nbsp;&nbsp;&nbsp;&nbsp;   
                                <u><a href="javascript:deleteRow(1)">Remove</a></u>
                              </font>
                           </div>
                           </td>
                          </tr>
                          <tr id="row2">
                            <td>US Bank, Checking Account 7769</td>
                            <td>Secondary
                             <div align="right">
                               <font size="2.5" color="#000099">
                                 <a href="javascript:popup6('')">View</a>&nbsp;&nbsp;&nbsp;&nbsp;   
                                 <u><a href="javascript:deleteRow(2)">Remove</a></u>
                                </font>
                             </div>
                            </td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                        <p align="center">Credit/Debit Cards:</p>
                        <table id="Cards" align="center" width="500" border="1">
                          <tr>
                            <td width="185"> Credit/Debit Card</td>
                            <td width="491">Status</td>
                          </tr>
                          <tr>
                            <td>Wells Fargo, Visa Debit Card</td>
                            <td>Primary
                             <div align="right">
                               <font size="2.5" color="#000099">
                                 <a href="javascript:popup7('')">View</a> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <a href="javascript:deleteRowCard(1)">Remove</a>
                               </font>
                             </div>
                            </td>
                          </tr>
                        </table>
                    </div><!-- end of payment info -->
                        
                    <div id="PaymentMode" style="display:none">
                    <p align="center"><strong> Payment Information </strong></p>
                    <hr/>
                        <table align="center" border="0">
                          <tr> 
                           <td>
                            <p><strong> Choose Payment Mode</strong></p>
                             <p>
                             <label>
                           <input type="radio" name="RadioGroup1" value="Account" id="RadioGroup1_0" onclick="ShowInfo(this.value)" />
                             Net Banking Account
                             </label>
                             <br />
                             <label>
                             <input type="radio" name="RadioGroup1" value="Card" id="RadioGroup1_1" onclick="ShowInfo(this.value)" /> 
                             Credit Card
                              </label>
                             <br />
                             </p>
                            </td>
                          </tr>
                        </table>    
                        
                        <table align="center" border="0">
                         <tr> 
                         <td>
                        
                   <div id="CardInfo" style="display:none"> 
                   <table border="1" align="center">
                   <tr>
                   <td>
                         <p align="center"> Enter the following details</p>
                         <form>
                             <table border="0">
                               <tr> 
                               <td>
                        Account Holder's name*  
                        <label for="name2"></label>
                        <input type="text" name="name" id="name2" /></td> </tr>
                         <tr> <td>
                        <label>                        Card Number* </label>
                        <label for="cardno"></label>
                        <input type="text" name="cardno" id="cardno" /></td> 
                         </tr>
                         <tr> <td>
                        <label>                          Billing address*                           
                        </label>
                        <label for="billaddress"></label>
                        <input type="text" name="billaddress" id="billaddress" /></td> </tr>
                       <tr> <td>
                      <p>Expiration Date*: 
                        <label for="month"></label>
                        <select name="month" size="1" id="month">
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <label for="yr"></label>
                        <select name="yr" id="yr">
                          <option>2011</option>
                          <option>2012</option>
                          <option>2013</option>
                        </select>
                      </p> </td></tr>
                      <tr><td>
                      <p>Security Code*: 
                        <label for="sec-code"></label>
                        <input type="text" name="sec-code" id="sec-code" />
                        <br />
                      </p> </td></tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td> 
                        <table border="0">
                        <tr>
                        <td>
                        <input type="button" name="cancel" id="cancel" value="Go Back" onclick="javascript:goBackCredit()"/> 
                          
                         </td>
                         <td>
                          <input type="reset" name="reset" id="reset" value="Reset" onclick="clear()"/>   
                         </td> 
                         <td>
                          <input type="button" name="Save" id="Save" value="Save" onclick="javascript:popup12('')" /> 
                         </td>
                          </tr>
                          </table>
                        </td>
                        
                      </tr>
                         </table>                         
                       </form>
                       </td>
                       </tr>
                       </table>
                   </div>                     <!-- Enpod of card info-->
                      
                   <div id="BankAccInfo" style="display:none"> 
                   <table border="1" align="center">
                    <tr>
                     <td>
                 
                    <p align="center"> Enter the following details</p>
                   <form>
                      	<table border="0">
                         <tr> <td>
                        Account Holder's name*  
                        <label for="name2"></label>
                        <input type="text" name="name" id="name2" /></td> </tr>
                         <tr> <td>
                        <label>                        Account Number*</label>
                        <label for="cardno"></label>
                        <input type="text" name="cardno" id="cardno" /></td> 
                         </tr>
                         <tr> <td>
                        <label>                          Routing Number*                           
                        </label>
                        <label for="billaddress"></label>
                        <input type="text" name="billaddress" id="billaddress" /></td> </tr>
                         <tr>
                        <td> 
                          <table>
                            <tr>
                              <td>
                                 <input type="button" name="cancel" id="cancel" value="Go Back" onclick="javascript:goBackBank()" />
                                 
                              </td>
                              <td>
                                 <input type="reset" name="reset" id="reset" value="Reset" onclick="clear()" />   
                               </td>
                               <td>
                                  <input type="button" name="Save" id="Save" value="Save" onclick="javascript:popup14('')" /> 
                                </td>
                                </tr>
                                </table>
                        
                        </td>
                      </tr>
                     </table>             
                     </form>           
                     </td>
                     </tr>
                     </table>
                 </div> <!-- BankAccInfo-->
                      </td>
                      </tr>
                      </table>
                     
                        </div>
                         <div id="NewPayModeAdded" style="display:none">
                      <p align="center">Your card has been Successfully Added</p>
                      <p align="center"><input name="" type="button" value="Add Another Account/Card" /></p>
                      <p align="center"><input name="" type="button" value="View Your Accounts/Cards" /></p>
                      </div>
                       
                      </div>
                     
                      
                      <div class="TabbedPanelsContent">Content 3</div>
                      <div class="TabbedPanelsContent">Content 4</div>
                    </div>
                    </div>
               
              <!-- InstanceEndEditable --></div>
            </div>
          </div>
        </div>
        <div class="TabbedPanelsContent">
          <div id="TabbedPanels3" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">Mobile</li>
              <li class="TabbedPanelsTab" tabindex="0">Internet</li>
              <li class="TabbedPanelsTab" tabindex="0">Fixed Line</li>
              <li class="TabbedPanelsTab" tabindex="0">RightPlan</li>

            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="MobEdit" -->
       <div id="mobilepage">

  <div id="breadcrumbs"> <a href="#">Home</a> &gt; <a href="#">Individual</a> &gt; <a href="#">Mobile</a> &gt; <a href="#">3G </a>&gt;Prepaid</div>
  Welcome to mobile world
                <table width="915" border="0" style="font:x-small">
                  <tr>
                    <td width="230" height="290"><table width="164" border="0" style="font:x-small; font-size: 12px;">
                      <tr>
                        <td width="158"><u><b>3G</b></u></td>
                      </tr>
                      <tr>
                        <td><i>Prepaid</i></td>
                      </tr>
                      <tr>
                        <td><table width="200" border="1">
  <tr>
    <td>Trump common 3G</td>
  </tr>
  <tr>
    <td>Trump vidyarthi 3G</td>
  </tr>
</table>
&nbsp;</td>
                      </tr>
                      <tr>
                        <td><i>Postpaid</i></td>
                      </tr>
                      <tr>
                        <td><table width="200" border="1">
                          <tr>
                            <td>Pay per sec</td>
                          </tr>
                          <tr>
                            <td>One India</td>
                          </tr>
                          <tr>
                            <td>Super Freedom</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="454"><table width="392" style="font:x-small">
                      <tr>
                        <td width="380"><h3>Trump common 3G</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">SIM Name</td>
                            <td width="164">Trump Prepaid Starter</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>Rs. 1 per min</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>Rs. 1.25 per min</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>Rs. 0.01/20 KB</td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.5 , ISD Rs. 4.5</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table></td>
                    <td width="217"><table width="217" border="1">
                      <tr>
                        <td width="207" height="88">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="108"><label></label>&nbsp;<label style="font:small"><b>Quick Links</b></label><br><input name="" type="button" value="Instant Pay" /><br><input name="" type="button" value="Recharge Online" /></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="51">&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="Smart search" style="float:left" onclick="TabbedPanels3.showPanel(3)" />                     
                     <input type="submit" name="button2" id="button2" value="Apply" style="float:right"/></td>
                    <td>&nbsp;</td>
                  </tr>
                </table> 
</div>
                 
            
            
            
            
            
            
            
             <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="InterEdit" -->Makes Changes in the InterEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FixedEdit" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) 
                <script type="text/javascript">
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4", {defaultTab:1});
var TabbedPanels5 = new Spry.Widget.TabbedPanels("TabbedPanels5");
var TabbedPanels6 = new Spry.Widget.TabbedPanels("TabbedPanels6");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});

                </script>
              <!-- InstanceEndEditable --></div>
               <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FindPlan" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) 
			  
               <div id="breadcrumbs"> 
                  <p><a href="#">Home</a> &gt; <a href="#">Choose the right plan</a>&gt;                </p>
                </div>
                <div id="rightplan" >
                <table width="443" border="0">
                
                  <tr>
                    <td height="51" colspan="2"><table width="437" border="0">
                      <tr>
                        <td width="335"><label for="select">How much do you want to spend per month? (Rs) </label></td>
                        <td width="17"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="This helps us to find the best range for your plan."></div></td>
                        <td width="71"><select name="select" id="select">
                          <option value="100">&lt;200</option>
                          <option value="200">200</option>
                          <option value="300">300</option>
                          <option value="400">400</option>
                          <option value="500">500</option>
                          <option value="600">&gt;500</option>
                        </select></td>
                      </tr>
                    </table></td>
                  
                  </tr>
                  <tr>
                    <td width="227" height="45"><table width="225" border="0">
                      <tr>
                        <td width="93">Plan duration</td>
                        <td width="13"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="If your stay is less than 6 months - Select <i>Short-term</i>, if more than 6 months - Select <i>Long term</i>" ></div></td>
                        <td width="105"><select name="select2" id="select3">
                          <option value="Short-term">Short-term</option>
                          <option value="Long-term">Long-term</option>
                        </select></td>
                      </tr>
                    </table></td>
                    <td width="206"><label for="select7"> Profession</label>
                      <select name="select3" id="select4">
                      <option value="Student">Student</option>
                      <option value="Professional">Professional</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="45"><table width="214" border="0">
                        <tr>
                          <td width="84">Text Usage</td>
                          <td width="16"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="If you want to do more than 20 messages per day- Select <i>Heavy</i>, between 10 to 20 - Select<i> Medium</i>, less than 10 - Select <i>Low</i>"></div></td>
                          <td width="86"><select name="select4" id="select5">
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                          </select></td>
                        </tr>
                      </table></td>
                    <td><table width="200" border="0">
                      <tr>
                        <td><table width="200" border="0">
                          <tr></tr>
                          <tr>
                            <td>Voice/call usage</td>
                            <td><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title=""></div></td>
                            <td><select name="select5" id="select8">
                              <option value="Low">Low</option>
                              <option value="Medium">Medium</option>
                              <option value="High">High</option>
                            </select></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="51"><table width="200" border="0">
                      <tr>
                        <td width="77"><label for="select14">Data usage</label></td>
                        <td width="26"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title=""></div></td>
                        <td width="83"><select name="select6" id="select10">
                          <option value="Low">Low</option>
                          <option value="Medium">Medium</option>
                          <option value="High">High</option>
                        </select></td>
                      </tr>
                    </table></td>
                    <td><table width="200" border="0">
                      <tr>
                        <td width="106">Extra features</td>
                        <td width="15"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title=""></div></td>
                        <td width="65"><select name="select7" id="select12">
                          <option value="3G">3G</option>
                          <option value="4G">4G</option>
                        </select></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="42"><input type="submit" name="button" id="button" value="Find my plan" onclick="findplan(document.getElementById('select3').value)" /></td>
               
                 <td><input type="submit" name="button2" id="button2" value="Reset" /></td>
                  </tr>
                  </table>
<p>&nbsp;</p>
                <p>
                 </div>
                 
                 <div id="findmyplan1" style="display:none">
                <div style="width: 505px; height: 400px; overflow: scroll; border: 1px dashed black; font:x-small;margin: 0px auto 0px auto; padding: 0px 0px 0px 0px">
                     <table width="505" border="1" style="font: small; font-size: small;">
                  <tr>
                    <td colspan="2"><label><b>Best plans for you </b></label>&nbsp;</td>
                    
                  </tr>
                  <tr>
                    <td width="195"><a href="Trump Common 3G">Trump Common 3G</a></td>
                    <td width="300"><table width="291" border=".5" style="font:small">
                      <tr>
                        <td width="131">Local call charges</td>
                        <td width="150">Rs. 0.30 per min</td>
                      </tr>
                      <tr>
                        <td>Std call charges</td>
                        <td>Rs. 0.50 per min</td>
                        </tr>
                      <tr>
                        <td>Data usage</td>
                        <td> Rs. 0.01/10 Kb</td>
                        </tr>
                      <tr>
                        <td>SMS charges</td>
                        <td>Local Rs. 0.50 Inernational Rs. 2.50</td>
                        </tr>
                      <tr>
                        <td>Talk Value</td>
                        <td>Rs. 150/month</td>
                      </tr>
                      <tr>
                        <td>MRP</td>
                        <td>Rs 222</td>
                      </tr>
                      <tr>
                        <td>Validity</td>
                        <td>6 months</td>
                      </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><a href="Trump Common 3G">Pay per second</a></td>
                    <td><table width="291" border=".5" style="font:small">
                      <tr>
                        <td width="131">Local call charges</td>
                        <td width="150">Rs. 0.1 per sec</td>
                      </tr>
                      <tr>
                        <td>STD call charges</td>
                        <td>Rs. 1 per min</td>
                      </tr>
                      <tr>
                        <td>Data usage</td>
                        <td> Rs. 0.1/12 Kb</td>
                      </tr>
                      <tr>
                        <td>SMS charges</td>
                        <td>Local Rs. 0.10 Inernational Rs. 2.50</td>
                      </tr>
                      <tr>
                        <td>MRP</td>
                        <td>Rs. 150</td>
                      </tr>
                      <tr>
                        <td>Validity</td>
                        <td>1 year</td>
                      </tr>
                      <tr>
                        <td>Talk Value</td>
                        <td>Rs 50/month</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><a href="Trump Common 3G">Garuda Normal Plan</a></td>
                    <td><table width="291" border=".5" style="font:small">
                      <tr>
                        <td width="131">Local call charges</td>
                        <td width="150">Rs. 0.40 per min</td>
                      </tr>
                      <tr>
                        <td>STD call charges</td>
                        <td>Rs. 0.60 per min</td>
                      </tr>
                      <tr>
                        <td>Data usage</td>
                        <td> Rs. 0.1/10 Kb</td>
                      </tr>
                      <tr>
                        <td>SMS charges</td>
                        <td>Local Rs. 0.50 Inernational Rs. 2.50</td>
                      </tr>
                      <tr>
                        <td>MRP</td>
                        <td>Rs. 100</td>
                      </tr>
                      <tr>
                        <td>Validity</td>
                        <td>30 days</td>
                      </tr>
                      <tr>
                        <td>Talk Value</td>
                        <td>Rs 25/month</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                     </table>
                </div>
           
          
               <input type="checkbox" name="checkbox" id="checkbox" onclick="javascript:popup('')" />
               <label for="checkbox">Do you want information about future plans?</label>
               <input type="button" name="reset" id="reset" value="New search" onclick="javascript:reset_search('')">
                 </div>
                  <div id="findmyplan2" style="display:none">
                <div style="width: 505px; height: 300px; overflow: scroll; border: 1px dashed black; font:x-small;margin: 0px auto 0px auto; padding: 0px 0px 0px 0px">
                     <table width="505" border="1" style="font: small; font-size: small;">
                  <tr>
                    <td colspan="2"><label><b>Best plans for you </b></label>&nbsp;</td>
                    
                  </tr>
                  <tr>
                    <td width="195"><a href="Trump Common 3G">Excel Plan</a></td>
                    <td width="300"><table width="291" border=".5" style="font:small">
                      <tr>
                        <td width="169"> Monthly Fixed Charges </td>
                        <td width="112">Rs. 99</td>
                      </tr>
                      <tr>
                        <td>Std call charges</td>
                        <td>Rs. 1.25 per min</td>
                        </tr>
                      <tr>
                        <td>SMS charges</td>
                        <td>Local Rs. 0.50 Inernational Rs. 2.50</td>
                      </tr>
                      <tr>
                        <td>Talk Value</td>
                        <td>Rs. 18/month</td>
                      </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td><a href="Trump Common 3G">Economy</a></td>
                    <td><table width="303" border=".5" style="font:small">
                      <tr>
                        <td width="170"> Monthly Fixed Charges </td>
                        <td width="123">Rs. 100</td>
                      </tr>
                      <tr>
                        <td>STD call charges</td>
                        <td>Rs. 0.10 per sec</td>
                      </tr>
                      <tr>
                        <td>SMS charges</td>
                        <td>Local Rs. 0.25 Inernational Rs. 2.50</td>
                      </tr>
                      <tr>
                        <td>Talk Value</td>
                        <td>Rs 50/month</td>
                      </tr>
                    </table></td>
                  </tr>
                     </table>
                </div>
            <input type="checkbox" name="checkbox" id="checkbox" onclick="javascript:popup('')" />
               <label for="checkbox">Do you want information about future plans?</label>
                <input type="button" name="reset" id="reset" value="New search" onclick="javascript:reset_search('')">
               
                 </div>
              <script type="text/javascript">
// BeginOAWidget_Instance_2466546: #OAWidget

   $(function(){
    $(".chk").wowtip();//call without theme, will follow the basic black theme//
	$(".chk2").wowtip({theme:'orange'});//currently only one theme available "orange"//
}); 

// EndOAWidget_Instance_2466546
                  </script>
                </p>
                <br/>
                <br/>
              
			   
			   
			   <!-- InstanceEndEditable --></div>
            </div>
          </div>
        </div>
        <div class="TabbedPanelsContent"> </div>
      </div>
    </div>
    
  <!-- end .content --></div>
  <div class="footer">
  <table width="958" border="1">
    <tr>
      <td width="221" height="29"> <div align="center">About Us</div></td>
      <td width="272"><div align="center">SiteMap</div></td>
      <td width="248"><div align="center">Careers</div></td>
      <td width="189"><div align="center">Contact Us</div></td>
    </tr>
  </table>
  <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2", {defaultTab:0});
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
</script>
</body>
<!-- InstanceEnd -->
<div id="dialog-overlay5"></div>
                                           <div id="dialog-box5">
                                           	<div class="dialog-content5">
                                             <div id="dialog-message5"></div>
                                             <center>
                                              <h2> Your Checking Account (Primary Account) Details </h2>
                                                <table border="1">
                                                <tr> <td> 
                                                <table border="0">
                                                  <tr><td><b> Bank Name: </b></td> <td> Wells Fargo </td> </tr>
                                                <tr><td><b> Account Type: </b></td> <td> Checking Account </td> </tr> 
                                                <tr><td><b> Account Holder's name: </b></td> <td> Sita </td> </tr> 
                                                <tr><td><b> Account Number: </b></td> <td> 223456789 </td> </tr> 
                                                <tr><td><b> Routing number: </b></td> <td> 11034567 </td> </tr>                                                 </table>
                                                </td></tr></table> <br /><br />
                                                <a href="javascript: closepopup5()" class="buttonCenter">Close</a> 
                                                </center>                                                
                                                </div>
                                          </div> 
                                          
                         <div id="dialog-overlay6"></div>
                                           <div id="dialog-box6">
                                           	<div class="dialog-content6">
                                             <div id="dialog-message6"></div>
                                             <center>
                                             <h2> Your checking account (Secondary Account) Details </h2>
                                                <table border="1">
                                                <tr> <td> 
                                                <table border="0">
                                                 <tr><td><b> Bank Name: </b></td> <td> US Bank </td> </tr>
                                                <tr><td><b> Account Type: </b></td> <td> Checking Account </td> </tr> 
                                                <tr><td><b> Account Holder's name: </b></td> <td> Sita </td> </tr> 
                                                <tr><td><b> Account Number: </b></td> <td> 223456789 </td> </tr> 
                                                <tr><td><b> Routing number: </b></td> <td> 11034567 </td> </tr>                                                 </table>
                                                </td></tr></table> <br /><br />
                                                <a href="javascript: closepopup6()" class="buttonCenter">Close</a> 
                                                </center>                                                
                                                </div>
                                          </div>                       
                         <div id="dialog-overlay7"></div>
                                           <div id="dialog-box7">
                                           	<div class="dialog-content7">
                                             <div id="dialog-message7"></div>
                                             <center>
                                             <h2> Your Credit Card Details </h2>
                                                <table border="1">
                                                <tr> <td> 
                                                <table border="0">
                                                <tr><td><b> Account Holder's name: </b></td> <td> Sita </td> </tr> 
                                                <tr><td><b> Card Number: </b></td> <td> xxxx-xxxx-xxxx-8999 </td> </tr> 
                                                <tr><td><b> Billing Address: </b></td> <td> 302, MG Road, New Delhi </td> </tr> 
                                                <tr><td><b> Expiration Date: </b></td> <td> 09/13 </td> </tr>
                                                 <tr><td><b> Security Code: </b></td> <td> 786 </td> </tr>                                                 </table>
                                                </td></tr></table> <br /><br />
                                                <a href="javascript: closepopup7()" class="buttonCenter">Close</a> 
                                                </center>                                                
                                                </div>
                                          </div>               
 <div id="dialog-overlay8"></div>
               <div id="dialog-box8">
                	<div class="dialog-content8">
                         <div id="dialog-message8"></div>
                           <!-- <h2 align="center" draggable="true" style="border:thick">
                                <b>E-Receipt<b>-->
                              <table border="1" align="center" width="450" height="200" >
                              <tr>
                               <td>
                                <table border="0" align="center" width="450" height="50" >
                                  <tr>
                                    <td align="left"  width="50" height="50">
                                       <img src="images/Mainlogo.PNG" width="50" height="50" />
                                    </td>
                                    <td align="center">
                                        E-Receipt
                                    </td>                          
                                 </tr>
                                </table>
                                   
                                <table align="center" border="0" width="450" height="150">
                                  <tr>
                                    <td align="left">
                                       Customer Name : Sita
                                    </td>
                                    <td align="right">
                                      <p>Billing Cycle: 09/15/2011-10/15/2011 </p>
                                        </br>
                                      <p>Bill Payment Date : 10/24/2011</p>
                                    </td>                          
                                 </tr>
                                 <tr>
                                   <td align="left">
                                      Account ID:	1236729013247
                                   </td>
                                   <td align="right">
                                      Payment Type- Checking Account 4534 
                                   </td>                          
                                 </tr>
                                 <tr> 
                                    <td align="left">
                                       Billing Address : <p>G-47,Block E </p>
                                       </br><p>Saharunpur</p>
                                    </td>                
                                    <td align="right">
                                       <p>Amount Paid : Rs 325</p>
                                       </br>
                                       <p>Confirmation Code-IDFTUN </p>
                                   </td>                          
                                 </tr>
                                 <tr>
                                    <td align="left">
                                       Contact Number : 9901311271
                                    </td>
                                    <td align="right">
                                    </td>                          
                                </tr>
                             </table>
                            </td>
                            </tr>
                            </table>
                             <br>
                             <a href="javascript: popup9()" class="buttonLeft">Print</a>
                             <a href="javascript: popup10()" class="buttonLeft">email</a>
                             <a href="javascript: closepopup8()" class="buttonRight">Close</a>
                          </div>
                      </div>
              <div id="dialog-overlay9"></div>
               <div id="dialog-box9">
                	<div class="dialog-content9">
                         <div id="dialog-message9"></div>
                            <h2 align="center" draggable="true" style="border:thick">
                                <b>Successfully Printed<b>
                            </h2>
                             <br>
                             <a href="javascript: closepopup9()" class="buttonRight">close</a>
                         </div>
                      </div>
               <div id="dialog-overlay10"></div>
                <div id="dialog-box10">
                	<div class="dialog-content10">
                         <div id="dialog-message10"></div>
                            <h2 align="center" draggable="true" style="border:thick"> </br>
                             <table align="center" border="1">
                             <tr>
                             <td>
                                <p align="center"> Email To : </p>
                                </br>
                                 <p align="center"> sita@gmail.com </p>
                                 </br>
                                 <p align="center"> or </p>
                                 </br>
                                 <p align="center"> Enter a new email id:<input name="lsadlkj" type="text" /> </p>
                                 </tr>
                                 </td>
                                 </table>
                            </h2>
                             <br>
                             <a href="javascript: closepopup10()" class="buttonRight">close</a>
                             <a href="javascript: popup11()" class="buttonLeft">email</a>
                         </div>
                      </div>
                      
              <div id="dialog-overlay11"></div>
               <div id="dialog-box11">
                	<div class="dialog-content11">
                         <div id="dialog-message11"></div>
                            <h2 align="center" draggable="true" style="border:thick">
                              <b>Receipt Emailed to sita@gmail.com<b>
                            </h2>
                             <br>
                             <a href="javascript: closepopup11()" class="buttonRight">close</a>
                         </div>
                      </div>
                      
                      <div id="dialog-overlay12"></div>
               <div id="dialog-box12">
                	<div class="dialog-content12">
                         <div id="dialog-message12"></div>
                            <h2 align="center" draggable="true" style="border:thick">
                              <p>Confirm Card details </p>
                            </h2>
                            
                            <table width="450"  border="1" align="center">
                            <tr>
                            <td>
                            <table align="center">
                              <tr>
                                 <td>
                                 <strong> Account/Card Type: </strong> Checking Account
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                               <strong>Account Holder's Name : </strong>Sita
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  <strong>Card Number :</strong> 5623 2369 3456 7789
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                 <strong> Billing address :</strong> <p> G-47 Block E</p>
                                  </br>
                                  <p> Saharanpur </p>
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                 <strong> Expiration Date : </strong>08/14
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                <strong>   Security Code : </strong> 435
                                 </td>
                              </tr>
                              </table>
                              </td>
                              </tr>
                              </table>
                             
                           
                                    <br>
                                    <input  class="red" type="submit" value="check " />
                              <a href="javascript:PayModeAdd()" class="buttonLeft">confirm</a>
                             <a href="javascript: closepopup12()" class="buttonRight">close</a>
                         </div>
                      </div>
                      
                      <!-- ---------------------------------------------------------------------------------- -->
                       <div id="dialog-overlay14"></div>
               <div id="dialog-box14">
                	<div class="dialog-content14">
                         <div id="dialog-message14"></div>
                            <h2 align="center" draggable="true" style="border:thick">
                              <p>Confirm Card details </p>
                            </h2>
                            <table border="1" align="center">
                              <tr>
                                 <td>
                                  Account/Card Type: Checking Account
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  Account Holder's Name : Sita
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  Card Number : 5623 2369 3456 7789
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  Billing address : <p> G-47 Block E</p>
                                  </br>
                                  <p> Saharanpur </p>
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  Expiration Date : 08/14
                                 </td>
                              </tr>
                               <tr>
                                 <td>
                                  Security Code : 435
                                 </td>
                              </tr>
                              </table>
                                    <br>
                                    <input  class="red" type="submit" value="check " />
                              <a href="javascript:PayModeAdd()" class="buttonLeft">confirm</a>
                             <a href="javascript: closepopup14()" class="buttonRight">close</a>
                         </div>
                      </div>
<!-- ---------------------------------- -->
<div id="dialog-overlay"></div>
<div id="dialog-box">
	<div class="dialog-content">
    
    
		<div id="dialog-message"></div>
	
<h2 align="left"><b>More Information</h2>
<table width="200" border="0">
  <tr>
    <td><label>First Name*</label></td>
    <td><input name="Fname" type="text" /></td>
  </tr>
 
  <tr>
    <td><label>Last Name*</label></td>
    <td><input name="Lname" type="text" /></td>
  </tr>
   <tr>
    <td><label>Middle Initial</label></td>
    <td><input name="Minitial" type="text" /></td>
  </tr>
  <tr>
    <td><label>Email*</label></td>
    <td><input name="Email" type="text" /></td>
  </tr>
  <tr>
    <td> <a href="http://localhost:81/UID/meter1.php" class="buttonLeft" style="color:#FFF">Subscribe</a></td>
    <td> <a href="http://localhost:81/UID/popup.php" class="buttonRight" style="color:#FFF">Cancel</a></td>
  </tr>
</table>

<br>

     
	</div>
</div>
               
</html>