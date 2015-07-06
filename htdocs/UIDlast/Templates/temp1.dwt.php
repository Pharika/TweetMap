<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<script type="text/javascript">
function defaultDivBillPay()
{
	document.getElementById('Paybill').style.display="block";	
    document.getElementById('paySucc').style.display="none";
}

function defaultDivAccountSummary()
{
	document.getElementById('AccountSummary').style.display="block";	
}
function defaultDivAccountUsage()
{
	document.getElementById('usage').style.display="block";	

}

function defaultPanelProfile()
{
	TabbedPanels6.showPanel(0);
}

function defaultDivMobile()
{
	document.getElementById('mobilepage').style.display="block";	
}
function defaultDivRightPlan()
{
	document.getElementById('rightplan').style.display="block";	
	document.getElementById('findmyplan1').style.display="none";
	document.getElementById('findmyplan2').style.display="none";
	
}
</script>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	
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
	color: #000000;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #000000;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
	color: #000;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
	width: 960px;
	background-image:url(../images/lime2.jpg);

	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	
	background:#FFFFFF;
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
#logo
{
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}
#logoutbox
{
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}
#designbutton
{
	background-color:#CC9933;
	border-color:#C93;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}

-->
</style>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<div class="container">
  <div class="header">
    <table width="957" border="0" background="../images/lime2.jpg" >
      <tr>
        <td width="391">
        <a href="#"><img id="logo" src="../images/mtnl_logo.png" alt="Insert Logo Here" name="Insert_logo" width="391" height="66" id="Insert_logo" style="display:block;" /></a>
        </td>
        <td width="248" >&nbsp;</td>
        <td width="304">
        <table id="logoutbox" width="298" border="0" >
          <tr>
            <td><p align="right"><font size="2" color="#FFFF99"><strong>Welcome Sita
             <br/>You last logged in on <?php

echo  date("D M d, Y, h:i A", strtotime('-2 days'));

?></font></strong>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
             &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
              <input id="designbutton" type="submit" name="logout" id="logout" value="Log out" />
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
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultDivAccountSummary()"><a href="../Task1-Account summary.php" target="_self">Account Summary</a></li>
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultDivAccountUsage()"> <a href="../Task1-Account summary.php" target="_self">Account Usage</a></li>
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultDivBillPay()">Pay Your Bills</li>
              <li class="TabbedPanelsTab" tabindex="0">Billig History</li>
              <li class="TabbedPanelsTab" tabindex="0">Services</li>
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultPanelProfile()">Profile</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="ASEdit" -->
                <p>Makes Changes in the ASEdit Blue coloured box ( this is editable region ) </p>
              <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="AUEdit" -->Makes Change in theAUEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable -->
              
              
              
              </div>
              <div class="TabbedPanelsContent" ><!-- TemplateBeginEditable name="BPEdit" -->Makes Changes in the BPEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="BHEdit" -->Makes Changes in the BHEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="SerEdit" -->Makes Changes in the SerEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="ProEdit" -->Makes Changes in the ProEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
            </div>
          </div>
        </div>
        <div class="TabbedPanelsContent">
          <div id="TabbedPanels3" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultDivMobile()">Mobile</li>
              <li class="TabbedPanelsTab" tabindex="0">Internet</li>
              <li class="TabbedPanelsTab" tabindex="0">Fixed Line</li>
              <li class="TabbedPanelsTab" tabindex="0" onclick="defaultDivRightPlan()">RightPlan</li>

            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="MobEdit" -->Makes Changes in the MobEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="InterEdit" -->Makes Changes in the InterEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="FixedEdit" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
               <div class="TabbedPanelsContent"><!-- TemplateBeginEditable name="FindPlan" -->Makes Changes in the FindPlan Blue coloured box ( this is editable region ) <!-- TemplateEndEditable --></div>
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
</html>