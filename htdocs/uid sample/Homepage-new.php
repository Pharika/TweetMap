<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
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
	position:fixed;
	top: 30px;
	left: 165px;
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */

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
#quicklinks {	
position:fixed;
top:290px;
left:908px;
}
#indimage {	
position:fixed;
top:60px;
left:480px;
}
#entimage {	
position:fixed;
top:290px;
left:680px;
}

#newuser {	
position:fixed;
top:60px;
left:740px;
}
#transformProperty {	
position:fixed;
top:135px;
left:350px;
}
#transformProperty2 {	
position:fixed;
top:370px;
left:730px;
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
	color: #FFF;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />



<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <div class="content">
  <table width="959" height="228" border="1" bordercolordark="#333300"  bgcolor="#3399FF">
   <tr>
    <th width="269" align="left" scope="row"><p><img src="images/Mainlogo.png" width="236" height="180" /><img src=   "images/tag_line.png" width="235" height="33" /></p></th>
    <td width="678">
      <h1 id="transformProperty"><p align="left" class="rotate"><strong>Individual</strong></p></h1>
      <p id="indimage"><img src="images/individual.png" width="140" height="105" /></p>
      <p id="newuser"> <strong><u>New User? Choose the right Plan</u></strong></p>
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
   </td>
  </tr>
</table>
<table width="959" height="228" border="1" bgcolor="#3399FF">
  <tr>
    <td width="701" scope="row">
      <h1 id="transformProperty2">
        <p align="left" class="rotate"><strong>Enterprise</strong></p></h1>
      <p id="entimage"><img src="images/enterprize.png" width="140" height="105" /></p>
      <ul id="MenuBar2" class="MenuBar2Horizontal">
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
       <li><a href="#" class="MenuBarItemSubmenu">Global Business</a>
         <ul>
           <li><a href="#">Global Data</a></li>
           <li><a href="#">Global Voice</a></li>
         </ul>
       </li>
   </ul>
  </td>
  <td width="246" align="center">
    <h2 id = "quicklinks">QuickLinks</h2>
    <input name="" type="button" value="My Account" /></br></br>
    <input name="" type="button" value="Instant Pay" /></br></br>
    <input name="" type="button" value="Recharge Online" />
    </td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>

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

</body>
<!-- InstanceEnd --></html>