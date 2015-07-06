<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Plan-o-meter</title>
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
<style type="text/css">
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
a.buttonplano{
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
.your_plans {
	text-align: center;
}
</style>

<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">



//Popup dialog
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
</script>
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
                <p>Makes Changes in the ASEdit Blue coloured box ( this is editable region ) </p>
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="AUEdit" -->
                <h3 class="your_plans"> Your Plans </h3>
                         <div id="breadcrumbs2">
                  <h5>&nbsp;</h5>
                  <div id="TabbedPanels4" class="VTabbedPanels">
                    <ul class="TabbedPanelsTabGroup">
                      <li class="TabbedPanelsTab" tabindex="0">Broadband 769</li>
                      <li class="TabbedPanelsTab" tabindex="0">Garuda 990</li>
                    </ul>
                    <div class="TabbedPanelsContentGroup">
                      <div class="TabbedPanelsContent"></div>
                      <div class="TabbedPanelsContent">
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
                              <span class="radioRequiredMsg">Please make a selection.</span></span> </p>                                 <form id="form1" name="form1" method="post" action="">
                                  <a href="javascript:popup1('')" class="buttonplano">View Plan</a>
                                  <a href="javascript:popup2('')" class="buttonplano">Update Plan</a>
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
 <a href="http://localhost:81/UID/Planometer1.php" class="buttonLeft">Confirm</a>
        <a href= "javascript: closepopup1()" class="buttonRight">Close</a>
	</div>
</div>

<div id="dialog-overlay2"></div>
<div id="dialog-box2">
	<div class="dialog-content2">
   	<div id="dialog-message2"></div>
	
<h2 align="center" draggable="true" style="border:thick"><b>Are you sure you want to change your present plan to Freedom 600 rate plan?<b></h1>
<br>
 <a href="http://localhost:81/UID/Planometer1.php" class="buttonLeft">Confirm</a>
        <a href="javascript: closepopup2()" class="buttonRight">Close</a>
	</div>
</div>
</form>                                                                                                                                                              <p>&nbsp;</p></td>


                            <td>&nbsp;</td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                      </div>
                    </div>
                  </div>
                  <p>&nbsp;</p>
                </div>
<p>&nbsp;</p>
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BPEdit" -->Makes Changes in the BPEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BHEdit" -->Makes Changes in the BHEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="SerEdit" -->Makes Changes in the SerEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ProEdit" -->Makes Changes in the ProEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
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
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="MobEdit" -->Makes Changes in the MobEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="InterEdit" -->Makes Changes in the InterEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FixedEdit" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region )
               <script type="text/javascript">
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4", {defaultTab:1});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1", {validateOn:["blur", "change"]});
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
                </script> <!-- InstanceEndEditable --></div>
               <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FindPlan" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
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
<!-- InstanceEnd --></html>