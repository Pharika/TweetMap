<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #FFF;
	margin: 0;
	padding: 0;
	color: #FFF;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0px;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 0px;
	padding-left: 10px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #FFF;
	font-size: 14px;
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
	text-decoration:none;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
	top: 30px;
	left: 165px;
	width: 960px;
	margin: 0 auto; 
	/* the auto value on the sides, coupled with the width, centers the layout */	
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/

.content {
	padding: 10px 10px 0 40px;
}

/* ~~ The footer ~~ */
.footer {
	background-color: #FFFFFF;
	font-size: small;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0px;
	padding-left: 0;
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
#quicklinks {
	position:fixed;
	top:290px;
	left:908px;
	color: #FFF;
}
#indimage {
	position:absolute;
	top:60px;
	left:480px;
}
#entimage {
	position:absolute;
	top:182px;
	left:568px;
}

#newuser {	
position:fixed;
top:60px;
left:740px;
}



.rotate {
	/* for IE */
	writing-mode: tb-rl;
	filter: flipv fliph;
	/* now the other browsers */
	-moz-transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
	-o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
}

#newuser strong u {
	font-size: larger;
}
#transformProperty2 .rotate strong {
	font-size: 1em;
	color: #FFF;
}

.container .content table tr td #transformProperty .rotate strong {
	font-size: 1em;
	color: #000;
}

.container .content table tr td table tr td #CollapsiblePanel1 .CollapsiblePanelContent #sprytextfield1 label {
	font-size: small;
}
.passwd_field {
	font-size: small;
	color: #333;
}


.container .content table tr td {
	background-image: 
}
.container .content table tr th {
	background-image:
	background-image: url(../images/brown.png);
	background-image: url(../images/brown.png);
}
.container .content table tr td {
	background-color: #FFF;
}
.container .content table tr td h1 strong {
	font-size: 36px;
}
</style>
<script src="../SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryCollapsiblePanel1.css" rel="stylesheet" type="text/css" />

<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="../Spry-UI-1.7/includes/SpryDOMUtils.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryDOMEffects.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryWidget.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryPanelSelector.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryPanelSet.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryFadingPanels.js" type="text/javascript"></script>
<script src="../Spry-UI-1.7/includes/SpryContentSlideShow.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../CSSOnlyMenu4/css/menu4.css" rel="stylesheet" type="text/css" />
<link href="CSSOnlyMenu4/css/menu4.css" rel="stylesheet" type="text/css" />



<style type="text/css">
/* BeginOAWidget_Instance_2141545: #OAWidget */

#menu4 ul {
	font-family: Verdana, Geneva, sans-serif;
    font-size: 30px;
    letter-spacing: -3px;
    border-top:5px dotted #66b8d8;
    border-bottom:5px dotted #66b8d8;
    margin:20px;
}
#menu4 ul li a{
    color: #66b8d8;
    padding: 10px 5px 10px 10px;
    width: 170px;
}
#menu4 ul li a:hover span.title{
    color:#00adef;
}
#menu4 ul li a span.text{
    font-family: Georgia, serif;
    font-size: 13px;
    color:#c7e7f3;
}
		
/* EndOAWidget_Instance_2141545 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2141545" binding="#OAWidget" />
  <oa:widget wid="2141541" binding="#ImageSlideShow" />
</oa:widgets>
-->
</script>
<style type="text/css">
/* BeginOAWidget_Instance_2141545: #OAWidget */

#menu4 ul {
	font-family: Verdana, Geneva, sans-serif;
    font-size: 30px;
    letter-spacing: -3px;
    border-top:5px dotted #66b8d8;
    border-bottom:5px dotted #66b8d8;
    margin:20px;
}
#menu4 ul li a{
    color: #66b8d8;
    padding: 10px 5px 10px 10px;
    width: 170px;
}
#menu4 ul li a:hover span.title{
    color:#00adef;
}
#menu4 ul li a span.text{
    font-family: Georgia, serif;
    font-size: 13px;
    color:#c7e7f3;
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
	color:#090;
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
	width:70px;
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
	width:80px;
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


A:hover {cursor:alias; color: #C0FFC0; background-color: lightslategray; text-decoration: none}
		
/* EndOAWidget_Instance_2141545 */
.container .content table tr td table tr td {
	background-image: url(../images/brown.png);
}
.container .content table tr td {
	background-image: url(../images/brown.png);
	margin-top: 0px;
}
.container .content table tr td table tr td #CollapsiblePanel1 .CollapsiblePanelContent #sprypassword1 .passwd_field {
	font-family: "Courier New", Courier, monospace;
}
.container .content table tr td table tr td #CollapsiblePanel1 .CollapsiblePanelContent #sprypassword1 .passwd_field {
	font-family: Verdana, Geneva, sans-serif;
}
.container .content table tr td table tr td #CollapsiblePanel1 .CollapsiblePanelContent p br {
	color: #000;
}
</style>
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
function closepopup1() {
			$('#dialog-overlay1').hide();
	$('#dialog-box1').hide();
			
}
</script>

<link href="../Spry-UI-1.7/css/ContentSlideShow/wanderlust/wanderlust-brown.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body style="overflow:scroll; height:620px" onload="popup1('')">
   <div id="dialog-overlay1"></div>
<div id="dialog-box1">
	<div class="dialog-content1">
    
    
	  <div id="dialog-message1"></div>
	
    
    <font color="#663300">
    <table width="600" border="0">
  <tr>
    <td><img src="../images/plan.jpg" width="145" height="122" /></td>
    <td><b>Are you a New User? Confused what plan suits you?</b></td>
  </tr>
</table>

<br /> 
<br />MTNL now presents:
<h1 style="color: #630"><i>
SMART SEARCH</i></h1>
</font>
<br>
<input name="" type="checkbox"  /> Don't show this message again!
<br /><br />
 <a href="http://localhost/UID/Templates/temp2.dwt.php" class="buttonLeft"> Go to Smart Search</a>
      <a href= "javascript: closepopup1()" class="buttonRight">Skip and Continue</a>
	</div>
    
</div>

<div class="container">

  <div class="content">
  <table width="909" border="0">
  <tr height="100">
    <td width="201" height="100" valign="top" bgcolor="#FFFFFF" scope="col"><p>&nbsp;</p>
      <p><img src="../images/MTNL-Logo.jpg" width="166" height="120" align="top" />
      Mahanagar Telephone Nigam Limited</p>
    </td>
    <th width="698" height="100" bgcolor="#FFFFFF" scope="col"><div id="ImageSlideShow">
      <div class="article">
        <div class="photo"> <img src="../images/offer1.jpg" alt="San Francisco, CA" height="50" />
          <div class="caption">MTNL 3G</div>
        </div>
        <div class="story">
          <div class="banner">
            <div class="title">MTNL DELHI LAUNCHES 3G</div>
            <div class="subTitle"></div>
          </div>
          <div class="content">
            <p>The MTNL tradition for excellence continues!</p>
            <button type="button"><span><span><span>Click for Details</span></span></span></button>
          </div>
        </div>
      </div>
      <div class="article">
        <div class="photo"> <img src="../images/offer4.jpg" alt="Horses" height="50" />
          <div class="caption">MTNL -NOKIA</div>
        </div>
        <div class="story">
          <div class="banner">
            <div class="title">Great Offer on Select Phones</div>
            <div class="subTitle">Delhi's  Best Secret</div>
          </div>
          <div class="content">
            <p>Awesome ! Delhi will get more gifts with MTNL </p>
            <button type="button"><span><span><span>More Info</span></span></span></button>
          </div>
        </div>
      </div>
      <div class="article">
        <div class="photo"> <img src="../images/offer7.jpg" alt="Open Space" height="35" />
          <div class="caption">MTNL - BLACKBERRY</div>
        </div>
        <div class="story">
          <div class="banner">
            <div class="title">Enterprise Plans</div>
            <div class="subTitle">Corporate Connections</div>
          </div>
          <div class="content">
            <p>Enterprises in Delhi get ready for Blacberry</p>
            <button type="button"><span><span><span>Get Packing!</span></span></span></button>
          </div>
        </div>
      </div>
      <div class="article">
        <div class="photo"> <img src="../images/offer2.jpg" alt="Orchids" height="35"/>
          <div class="caption">MTNL - Easy Pay</div>
        </div>
        <div class="story">
          <div class="banner">
            <div class="title">Broadband Internet </div>
            <div class="subTitle">Easy Monitor &amp; Payment Options</div>
          </div>
          <div class="content">
            <p>Now it is easy to monitor and pay bills!</p>
            <button type="button"><span><span><span>Find out More!</span></span></span></button>
          </div>
        </div>
      </div>
    </div>
      <script type="text/javascript">
// BeginOAWidget_Instance_2141541: #ImageSlideShow

var ImageSlideShow = new Spry.Widget.ContentSlideShow("#ImageSlideShow", {
	widgetClass: "WLBSlideShow",
	displayInterval: 4000,
	transitionDuration: 2000
});

// EndOAWidget_Instance_2141541
      </script></th>
  </tr>
</table>
  <table width="907" border="0" align="center" >
  
   <tr align="left">
   <td width="198" align="center" bgcolor="#00CC99" >
      <h1 align="right" ><span class="rotate"><img src="../images/individual.png" width="124" height="106" align="left" /></span></h1>
      <h1 align="right" >&nbsp;</h1>
      <h1 align="right" >&nbsp;</h1>
      <h1 align="right" >&nbsp;</h1>
      <h1 align="right" ><strong>Individual</strong> </h1></td>
   
    <td width="438" height="244" bgcolor="#FFFFFF"><br>
    <ul id="MenuBar1" class="MenuBarHorizontal">
      
      <li><a class="MenuBarItemSubmenu" href="#">Mobile</a>
        <ul>
          <li><a href="#">3G</a></li>
          <li><a href="#">GSM</a></li>
          <li><a href="#">CDMA</a></li>
        </ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">Internet</a>
        <ul>
          <li><a href="#">Prepaid</a></li>
          <li><a href="#">Postpaid</a></li>
        </ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">Fixed Line</a>
        <ul>
          <li><a href="#">Landline</a></li>
          <li><a href="#">STD/ISD/PCO</a></li>
        </ul>
      </li>
    </ul>
      <p>&nbsp;</p>
    
      <table width="312" border="0" align="center">
        <tr valign="top" bgcolor="#FFFFFF">
          <td width="306" height="171" align="left" valign="top"><p style="font-size: 16px"><br>
          <a href="http://localhost/UID/Templates/temp2.dwt.php"><img src="../images/smt.png" width="232" height="182" /></a></p></td>
          </tr>
    </table><td width="257" bgcolor="#C68C8C"><table width="240" border="0"  align="center">
      <tr align="right">
<td width="215" align="left" bgcolor="#D6D6D6">
<div id="CollapsiblePanel1" class="CollapsiblePanel">
 <div class="CollapsiblePanelTab" tabindex="0"><p align="center"><input class="AccButton" type="button" value="My Account" /></p></div>
  <div class="CollapsiblePanelContent">
  
  
  
<form method="post" action="../login.php" id="login_form" />
  <span id="sprytextfield1">
  <label for="username"> Username</label>
  <input type="text" name="username" id="username" value="" maxlength="20"/>
   <br />
  <span class="textfieldRequiredMsg">A value is required<br />
  </span></span>
  <span id="sprypassword1"><span class="passwd_field">  Password</span>
    <input name="password" type="password" id="password" value="" maxlength="20" />
  <span class="passwordRequiredMsg">A value is required</span></span>
  <br />
  
  <p align="center">
    <input name="Submit" type="submit" id="submit" value="Login" />  
 <br />
 <br />
 <br />  
  </div>
</div>
</td>
</tr>
<tr>
<td align="center" bgcolor="#D6D6D6">
 <input name="" type="button" value="Instant Pay" />
</td>
</tr>
<tr>
<td align="center" bgcolor="#D6D6D6">
<input name="" type="button" value="Recharge Online" />
</td>
</tr>

</table>
      <p>
        <script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
   </script>
        
        <!-- <input name="" type="button" value="My Account" />-->
      </p>
      <p>Follow us on</p>
      <table width="256" border="0" align="center">
        <tr>
       <td width="58" height="49"><img src="../images/fb.jpg" width="48" height="47" /></td>
       <td width="54"><img src="../images/google.jpg" width="45" height="47" /></td>
       <td width="51"><img src="../images/twitter.jpg" width="44" height="47" /></td>
       <td width="75"><img src="../images/you.jpg" width="45" height="46" /></td>
        </tr>
 </table>
 
    
    </td>

    </tr>
</table>





   <table width="908" height="190" border="0" align="center">
  <tr>
  <td width="200" height="186" align="left" valign="top" bgcolor="#00CC99">
   <br />
   <h1><span class="rotate"><strong>Enterprise</strong></span></h1>
    <h5><span class="rotate"><img src="../images/enterprize.png" width="126" height="110" align="left" /></span></h5>
<h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    </td>
    <td width="698" valign="top" bgcolor="#FFFFFF" scope="row">
    <br />
    <ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#">Voice</a>
          <ul>
           <li><a href="#">Fixed Line</a></li>
           <li><a href="#">Corporate Cellular</a></li>
           <li><a href="#">Toll Free services</a></li>
          </ul>
        </li>
        <li><a class="MenuBarItemSubmenu" href="#">Data and IP</a>
          <ul>
            <li><a href="#">Internet Access</a></li>
            <li><a href="#">WAN</a></li>
          </ul>
        </li>
        <li><a class="MenuBarItemSubmenu" href="#">Data Center</a>
          <ul>
            <li><a href="#">Data infrastructure</a></li>
           <li><a href="#">Cloud Services</a></li>
         </ul>
       </li>
         <li><a href="#" class="MenuBarItemSubmenu">Global Biz</a>
         <ul>
           <li><a href="#">Global Data</a></li>
           <li><a href="#">Global Voice</a></li>
         </ul>
       </li>
     
 </ul>
      <p align="left">&nbsp;</p>
       
       
 
</td>
     
    </tr>
</table>


  <div class="footer">
  <table width="909" border="0">
    <tr>
      <td width="223" height="29"> <div align="center">About Us</div></td>
      <td width="274"><div align="center">SiteMap</div></td>
      <td width="250"><div align="center">Careers</div></td>
      <td width="144"><div align="center">Contact Us</div></td>
    </tr>
  </table>
  <!-- end .footer --></div>

  <!-- end .content --></div>

<!-- end .container --></div>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>