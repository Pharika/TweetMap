<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.js"></script>
<!-- TemplateEndEditable -->
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
<style type="text/css">
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

#dialog-boxSubscribeMe {
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

#dialog-boxSubscribeMe .dialog-contentSubscribeMe {
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

#dialog-boxApply {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:400px;
	height:200px;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-boxApply .dialog-contentApply {
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




#dialog-boxApplyConfirm {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:400px;
	height:200px;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-boxApplyConfirm .dialog-contentApplyConfirm {
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



#dialog-boxSubscriptionSuccessful {
	/* css3 drop shadow */
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	/* css3 border radius */
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background:#eee;
	/* styling of the dialog box, i have a fixed dimension for this demo */ 
	width:400px;
	height:200px;
	/* make sure it has the highest z-index */
	position:absolute;
	top:350;
	
	z-index:5000;
	/* hide it by default */
	display:none;
}

#dialog-boxSubscriptionSuccessful .dialog-contentSubscriptionSuccessful {
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
</style>

<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<script src="javascript/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="javascript/wowtip.js" type="text/javascript"></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2466546" binding="#OAWidget" />
</oa:widgets>

-->
</script>
<script type="text/javascript">
//Popup dialog
function popupSubscribeMe(message) {

	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-boxSubscribeMe').height()-200);  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2+200); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-boxSubscribeMe').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
	document.getElementById("checkbox").checked=false;		
}


function popupApply(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-boxApply').height()+100);  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2+200); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-boxApply').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
			
}

function popupApplyConfirm(message) {
		closepopupApply();
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-boxApplyConfirm').height()+100);  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2+200); 
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-boxApplyConfirm').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-message').html(message);
			
}

function popupSubscriptionSuccessful(message) {
		
	// get the screen height and width  
	var maskHeight = $(document).height()+400;  
	var maskWidth = $(window).width();
	
	// calculate the values for center alignment
	var dialogTop =  (maskHeight/3) - ($('#dialog-boxSubscriptionSuccessful').height()+100);  
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2+200); 
	
	// assign values to the overlay and dialog box
	closepopupSubscribeMe();
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-boxSubscriptionSuccessful').css({top:dialogTop, left:dialogLeft}).show();
	
	// display the message
	$('#dialog-messageSubscriptionSuccessful').html(message);
			
}


function closepopupSubscribeMe(message) {
		
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').hide();
	$('#dialog-boxSubscribeMe').hide();
	
	// display the message
	$('#dialog-message').hide();
			
}

function closepopupSubscriptionSuccessful(message) {
		
	
	// assign values to the overlay and dialog box
	$('#dialog-overlay').hide();
	$('#dialog-boxSubscriptionSuccessful').hide();
	
	// display the message
	$('#dialog-message').hide();
			
}

function redirect(str){
	
	 document.getElementById("buttonApply").style.visibility='visible';
	//alert (str);
if (str=="Trumpcommon3G")
  {
   document.getElementById("plan1").style.display='block';
     document.getElementById("plan2").style.display='none';
	   document.getElementById("plan3").style.display='none';
	     document.getElementById("plan4").style.display='none';
		   document.getElementById("plan5").style.display='none';
  return;
  } 
  if (str=="Trumpvidyarthi3G")
  {
  document.getElementById("plan1").style.display='none';
     document.getElementById("plan2").style.display='block';
	   document.getElementById("plan3").style.display='none';
	     document.getElementById("plan4").style.display='none';
		   document.getElementById("plan5").style.display='none';
  return;
  } 
  if (str=="Pay per sec")
  {
  document.getElementById("plan1").style.display='none';
     document.getElementById("plan2").style.display='none';
	   document.getElementById("plan3").style.display='block';
	     document.getElementById("plan4").style.display='none';
		   document.getElementById("plan5").style.display='none';
  return;
  }
  
   if (str=="One India")
  {
  document.getElementById("plan1").style.display='none';
     document.getElementById("plan2").style.display='none';
	   document.getElementById("plan3").style.display='none';
	     document.getElementById("plan4").style.display='block';
		   document.getElementById("plan5").style.display='none';
  return;
  }
  
  
   if (str=="Super Freedom")
  {
  document.getElementById("plan1").style.display='none';
     document.getElementById("plan2").style.display='none';
	   document.getElementById("plan3").style.display='none';
	     document.getElementById("plan4").style.display='none';
		   document.getElementById("plan5").style.display='block';
  return;
  }
  
  
  
   
  
}

function closepopupApply() {
			$('#dialog-overlay').hide();
	$('#dialog-boxApply').hide();
			
}
function closepopupApplyConfirm() {
			$('#dialog-overlay').hide();
	$('#dialog-boxApplyConfirm').hide();
			
}


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
  else
  alert("Please select the duration...");
}

function reset_search(){
 document.getElementById("rightplan").style.display='block';
   document.getElementById("findmyplan2").style.display='none';
      document.getElementById("findmyplan1").style.display='none';
	    document.getElementById("mainform").reset();

	
}
</script>

</head>

<body>

<div class="container">
  <div class="header">
  <table width="1022" border="0">
    <tr>
      <td width="531"><a href="#"><img src="../images/mtnl_logo.png" alt="Insert Logo Here" name="Insert_logo" width="391" height="66" id="Insert_logo" style="background: #C6D580; display:block;" /></a></td>
      <td width="142">&nbsp;</td>
      <td width="335"><table width="216" border="0">
        <tr>
          <td width="94">Username</td>
          <td width="112"><label for="username"></label>
          <input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><label for="passwd"></label>
          <input type="text" name="passwd" id="passwd" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Login" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table width="396" height="100" border="1">
  <tr>
  <td> 
<!-- end .header -->
  <div class="content">
    <div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">My Account</li>
        <li class="TabbedPanelsTab" tabindex="0">Individual</li>
        <li class="TabbedPanelsTab" tabindex="0">Business</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent"> 
          <p>&nbsp; </p>
          <center>
          <table width="496" height="169" border="0">
            <tr>
              <td><h2>Please log in to view this page.</h2></td>
            </tr>
          </table> </center>
<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
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
              <div class="TabbedPanelsContent">
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
    <td><a href="javascript: redirect('Trumpcommon3G')" id="divplan1" >Trump common 3G</a></td>
  </tr>
  <tr>
    <td><a href="javascript: redirect('Trumpvidyarthi3G')" id="divplan2" >Trump vidyarthi 3G</a></td>
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
                            <td><a href="javascript: redirect('Pay per sec')" id="divplan3" >Pay per sec</a></td>
                          </tr>
                          <tr>
                            <td><a href="javascript: redirect('One India')" id="divplan4" >One India</a></td>
                          </tr>
                          <tr>
                            <td><a href="javascript: redirect('Super Freedom')" id="divplan5" >Super Freedom</a></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                    <td width="454">
                     <div id="plan1" style="display:block">
                    <table width="392" style="font:x-small">
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
                    </table>
                    </div>
                    
                    
                    
                    <div id="plan2" style="display:none">
                    <table width="392" style="font:x-small">
                      <tr>
                    
                        <td width="380"><h3>Trump vidyarthi 3G</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">SIM Name</td>
                            <td width="164">TRUMP 3G Vidyarthi Starter Kit</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>Rs. 0.20 per min</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>Rs. 0.75 per min</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>1paisa / 12 KB (Pulse of 12 KB) </td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.25 , ISD Rs. 2.50</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table>
                    </div>
                    
                    
                    
                    
<div id="plan3" style="display:none">
                    <table width="392" style="font:x-small">
                      <tr>
                    
                        <td width="380"><h3>Pay per second</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">Monthly fixed charges</td>
                            <td width="164">Rs 149</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>1/2 p / second</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>1 p / second</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>1 p /12 KB</td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.25 , ISD Rs. 2.50</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table>
                    </div>
                    
                   
                   
                   
                   
                   <div id="plan4" style="display:none">
                    <table width="392" style="font:x-small">
                      <tr>
                    
                        <td width="380"><h3>One India</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">Monthly fixed charges</td>
                            <td width="164">Rs 180</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>20 p / minute</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>60 p / minutes</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>1 p /12 KB</td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.25 , ISD Rs. 2.50</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table>
                    </div>
                    
                    
                    
                     
                       <div id="plan5" style="display:none">
                    <table width="392" style="font:x-small">
                      <tr>
                    
                        <td width="380"><h3>Super Freedom</h3></td>
                       
                      </tr>
                      <tr>
                        <td height="209"><table width="378" rules="cols" frame="box" style="font:x-small; font-size: 12px;"\>
                          <tr>
                            <td width="202">Monthly fixed charges</td>
                            <td width="164">Rs 249</td>
                          </tr>
                          <tr>
                            <td>Local call charges</td>
                            <td>20 p / minute</td>
                          </tr>
                          <tr>
                            <td>STD call charges</td>
                            <td>75 p / minute</td>
                          </tr>
                          <tr>
                            <td>Data usage charges</td>
                            <td>1 p /12 KB</td>
                          </tr>
                          <tr>
                            <td height="40">SMS Charges</td>
                            <td>Local Rs. 0.25 , ISD Rs. 2.50</td>
                          </tr>
                        </table></td>
                      
                      </tr>
                    </table>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </td>
                    <td width="217"><table width="217" border="1">
                      <tr>
                        <td width="207" height="88"><img src="images/festive.jpg" width="204" height="185" alt="ad" /></td>
                      </tr>
                      <tr>
                        <td height="108"><label></label>&nbsp;<label style="font:small"><b>Quick Links</b></label><br><input name="" type="button" value="Instant Pay" /><br><input name="" type="button" value="Recharge Online" /></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="51">&nbsp;</td>
                    <td><input type="submit" name="button" id="button" value="Smart search" style="float:left" onclick="TabbedPanels3.showPanel(3)" />                     
                     <input type="submit" name="buttonApply" id="buttonApply" value="Apply" style="float:inherit; visibility:hidden" onclick="javascript:popupApply('')" /></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                  
                  <td colspan="3">
                    <img src="images/video-call-3g-940x250.jpg" width="940" height="150" alt="ad1" /></td>
                  </tr>
                </table> 
</div>
              </div>
              <div class="TabbedPanelsContent"> Page Under Construction....</div>
              <div class="TabbedPanelsContent"> Page Under Construction....</div>
              <div class="TabbedPanelsContent">
              
                 <div id="breadcrumbs"> 
                  <p><a href="#">Home</a> &gt; <a href="#">Choose the right plan</a>&gt;                </p>
                </div>
                <div id="rightplan" >
                
                <table width="913" border="0">
                <tr>
                <td width="503">
                <table width="491" border="0">
                 <form name=" form" id="mainform">
                
                  <tr>
                    <td height="51" colspan="2"><table width="437" border="0">
                      <tr>
                        <td width="335"><label for="select">How much do you want to spend per month? (Rs) </label></td>
                        <td width="17"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="This helps us to find the best range for your plan."></div></td>
                        <td width="71"><select name="select" id="select">
                          <option value="Select" selected="selected">Select</option>
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
                    <td width="265" height="45"><table width="247" border="0">
                      <tr>
                        <td width="117">Plan duration</td>
                        <td width="15"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="If your stay is less than 6 months - Select <i>Short-term</i>, if more than 6 months - Select <i>Long term</i>" ></div></td>
                        <td width="101"><select name="select2" id="select3">
                         <option value="Select" selected="selected">Select</option>
                          <option value="Short-term">Short-term</option>
                          <option value="Long-term">Long-term</option>
                          
                        </select></td>
                      </tr>
                    </table></td>
                    <td width="216"><label for="select7"> Profession</label>
                      <select name="select3" id="select4">
                       <option value="Select" selected="selected">Select</option>
                      <option value="Student">Student</option>
                      <option value="Professional">Professional</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td height="45"><table width="245" border="0">
                        <tr>
                          <td width="122">Text Usage</td>
                          <td width="23"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title="If you want to do more than 20 messages per day- Select <i>Heavy</i>, between 10 to 20 - Select<i> Medium</i>, less than 10 - Select <i>Low</i>"></div></td>
                          <td width="93"><select name="select4" id="select5">
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                            <option selected="selected">Select</option>
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
                              <option selected="selected">Select</option>
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
                    <td height="51"><table width="249" border="0">
                      <tr>
                        <td width="112"><label for="select14">Data usage</label></td>
                        <td width="25"><div class="chk2" style="width:15px; height:15px; background-image:url(spry_tooltip_site/images/question.png);" title=""></div></td>
                        <td width="98"><select name="select6" id="select10">
                          <option selected="selected">Select</option>
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
                          <option>Select</option>
                          <option value="3G">3G</option>
                          <option value="4G">4G</option>
                        </select></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                   
               
                 <td><input type="reset" name="button2" id="button2" value="Reset" /></td>
                  </form>
                  <td height="42"><input type="submit" name="button" id="button" value="Find my plan" onclick="findplan(document.getElementById('select3').value)" /></td>
                  </tr>
                  </table>
<p>&nbsp;</p>
                <p>
               </td>
               <td width="400">
                 <img src="images/garuda_mob.jpg" width="400" height="200" alt="ad"  align="right"/></td>
               </tr>
               </table>
                 </div>
                 
                 <div id="findmyplan1" style="display:none">
                <div style="width: 520px; height: 400px; overflow: scroll; border: 1px dashed black; font:x-small;margin: 0px auto 0px auto; padding: 0px 0px 0px 0px">
                     <table width="505" border="1" style="font: small; font-size: small;">
                  <tr>
                    <td colspan="2"><label><b>Best plans for you </b></label>&nbsp;</td>
                    
                  </tr>
                  <tr>
                    <td width="195">Trump Common 3G</td>
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
                      <tr>
                        <input type="submit" name="buttonApply" id="buttonApply" value="Apply" style="float:right" onclick="javascript:popupApply('')" />
                      </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td>Pay per second</td>
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
                       <tr>
                        <input type="submit" name="buttonApply" id="buttonApply" value="Apply" style="float:right" onclick="javascript:popupApply('')" />
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>Garuda Normal Plan</td>
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
                       <tr>
                        <input type="submit" name="buttonApply" id="buttonApply" value="Apply" style="float:right;" onclick="javascript:popupApply('')" />
                      </tr>
                    </table></td>
                  </tr>
                  
                     </table>
                </div>
           
          
               <input type="checkbox" name="checkbox" id="checkbox" onclick="javascript:popupSubscribeMe('')" />
               <label for="checkbox">Do you want information about future plans?</label>
               <input type="button" name="reset" id="reset" value="New search" onclick="javascript:reset_search('')">
                 </div>
                 
                  <div id="findmyplan2" style="display:none">
                <form>
                <div style="width: 505px; height: 300px; overflow: scroll; border: 1px dashed black; font:x-small;margin: 0px auto 0px auto; padding: 0px 0px 0px 0px">
                     <table width="505" border="1" style="font: small; font-size: small;">
                  <tr>
                    <td colspan="2"><label><b>Best plans for you </b></label>&nbsp;</td>
                    
                  </tr>
                  <tr>
                    <td width="195">Excel Plan</td>
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
                      
                        <tr>
                        <input type="submit" name="buttonApply" id="buttonApply" value="Apply" style="float:right" onclick="javascript:popupApply('')" />
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
                <input type="checkbox" name="checkbox" id="checkbox" onclick="javascript:popupSubscribeMe('')" />
               <label for="checkbox">Do you want information about future plans?</label>
           
                <input type="button" name="reset" id="reset" value="New search" onclick="javascript:reset_search('')">
               </form>
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
                <br/></div>
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
 
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
</script>
</body>

<div id="dialog-overlay"></div>
<div id="dialog-boxSubscribeMe">
	<div class="dialog-contentSubscribeMe">
    
    
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
    <td> <a href="javascript:popupSubscriptionSuccessful()" class="buttonLeft" style="color:#FFF">Subscribe</a></td>
    <td> <a href="javascript:closepopupSubscribeMe()" class="buttonRight" style="color:#FFF">Cancel</a></td>
  </tr>
</table>

<br>

     
	</div>
</div>


<div id="dialog-overlay"></div>
<div id="dialog-boxApply">
	<div class="dialog-contentApply">
    
    
		<div id="dialog-message"></div>
        <h3 align="center"><b>Information Required<br></h3>
 <table width="350" border="1">
  <tr>
    <td><font color="#330033">Please enter your login id</td>
    <td><input name="loginid" type="text" /></td>
  </tr>
  <tr>
    <td> <font color="#330033">Enter your phone number (if you don't have a login id)</td>
    <td><input name="phno" type="text" /></td>
  </tr>
</table>

<table width="200" border="0">
  <tr>
    <td> <a href="javascript:popupApplyConfirm('')" class="buttonRight" style="color:#FFF">Ok</a></td>

  </tr>
</table> 
	</div>
</div>



<div id="dialog-overlay"></div>
<div id="dialog-boxApplyConfirm">
	<div class="dialog-contentApplyConfirm">
    
    
		<div id="dialog-message"></div>
       

<table width="200" border="0">
<tr>
<td>
Application has been looged, we will contact you shortly.
</td>
</tr>
  <tr>
    <td> <a href="javascript:closepopupApplyConfirm()" class="buttonRight" style="color:#FFF">Ok</a></td>

  </tr>
</table> 
	</div>
</div>




<div id="dialog-overlay"></div>
<div id="dialog-boxSubscriptionSuccessful">
	<div class="dialog-contentSubscriptionSuccessful">
    
    
		<div id="dialog-messageSubscriptionSuccessful"></div>
	
<h3 align="left"><b>Subscription successful<br>An email has bee sent to your account for verifications.</h3>
<table width="200" border="0">
  <tr>
    <td> <a href="javascript:closepopupSubscriptionSuccessful()" class="buttonRight" style="color:#FFF">OK</a></td>
  </tr>
</table> 
	</div>
</div>
</html>