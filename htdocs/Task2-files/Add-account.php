<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/temp1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<script type="text/javascript">

function ShowInfo(action) {
  if (action == 'Account') {
    document.getElementById('CardInfo').style.display = "none";
    document.getElementById('BankAccInfo').style.display = "block";
  } else {
    document.getElementById('BankAccInfo').style.display = "none";
    document.getElementById('CardInfo').style.display = "block";
  }
}
</script>
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
<!-- InstanceEndEditable -->
</head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="images/mtnl_logo.png" alt="Insert Logo Here" name="Insert_logo" width="391" height="66" id="Insert_logo" style="background: #C6D580; display:block;" /></a>
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
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="AUEdit" -->Makes Changes in theAUEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BPEdit" -->Makes Changes in the BPEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="BHEdit" -->Makes Changes in the BHEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="SerEdit" -->Makes Changes in the SerEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="ProEdit" -->
                <div id="TabbedPanels4" class="VTabbedPanels">
                  <ul class="TabbedPanelsTabGroup">
                    <li class="TabbedPanelsTab" tabindex="0">Your Profile</li>
                    <li class="TabbedPanelsTab" tabindex="0">Add Payment Information</li>
                    <li class="TabbedPanelsTab" tabindex="0">Auto Payment Setup</li>
                    <li class="TabbedPanelsTab" tabindex="0">Bill Payment Alert</li>
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">Content 1</div>
                    <div class="TabbedPanelsContent">
                      <p><strong>Enter Payment Mode-</strong></p>
                      <p>
                        <label>
                          <input type="radio" name="BankAcc" value="Account" id="RadioGroup3_0" onclick="ShowInfo(this.value)" /> 
                          Net Banking Account
                        </label>
                        <br />
                        <label>
                          <input type="radio" name="RadioGroup3" value="Card" id="RadioGroup3_1" onclick="ShowInfo(this.value)" /> 
                          Credit/Debit Card </label><br />
                          <br />
                          </p>
                         
                        Account Holder's name  
                        <label for="name2"></label>
                        <input type="text" name="name" id="name2" />
                        <label><br />
                        Card Number </label>
                        <label for="cardno"></label>
                        <input type="text" name="cardno" id="cardno" />
                        <label><br />
                          Billing address                           
                        </label>
                        <label for="billaddress"></label>
                        <input type="text" name="billaddress" id="billaddress" />
                      
                      <p>Expiration Date: 
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
                      </p>
                      <p>Security Code: 
                        <label for="sec-code"></label>
                        <input type="text" name="sec-code" id="sec-code" />
                        <br />
                      </p> 
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
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="MobEdit" -->Makes Changes in the MobEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="InterEdit" -->Makes Changes in the InterEdit Blue coloured box ( this is editable region ) <!-- InstanceEndEditable --></div>
              <div class="TabbedPanelsContent"><!-- InstanceBeginEditable name="FixedEdit" -->Makes Changes in the FixedEdit Blue coloured box ( this is editable region ) 
                <script type="text/javascript">
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4");
                </script>
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
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
</script>
</body>
<!-- InstanceEnd --></html>