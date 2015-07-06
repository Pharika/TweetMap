<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
#quicklinks {	
position:fixed;
top:350px;
left:920px;
}
#indimage {	
position:fixed;
top:100px;
left:450px;
}
#entimage {	
position:fixed;
top:350px;
left:650px;
}

#newuser {	
position:fixed;
top:100px;
left:800px;
}
#transformProperty {	
position:fixed;
top:20px;
left:380px;
}
#transformProperty2 {	
position:fixed;
top:390px;
left:735px;
}
#transformProperty .rotate {

	text-align: left;
	font-size:1.2em;
	width:5px;
	height: 4em;
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
	-o-transition: all 1s ease-in-out;
	-ms-transition: all 1s ease-in-out; // Not implemented yet
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
	font-size: larger;
}
</style>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body leftmargin="150" topmargin="100">
<table width="963" height="228" border="1">
  <tr>
    <th width="250" align="left" scope="row"><p><img src="../images/Mainlogo.png" width="250" height="180" /><img src="../images/tag_line.png" width="250" height="33" /></p></th>
    <td width="697">
      <h1 id="transformProperty"><p align="left" class="rotate"><strong>Individual</strong></p></h1>
      <p id="indimage"><img src="../images/individual.png" width="155" height="130" /></p>
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
<table width="963" height="228" border="1">
  <tr>
    <td width="697" scope="row">
      <h1 id="transformProperty2"><p align="left" class="rotate"><strong>Enterprise</strong></p></h1>
      <p id="entimage"><img src="../images/enterprize.png" width="155" height="130" /></p>
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
   </ul></td>
    <td width="250" align="center">
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
</body>
</html>