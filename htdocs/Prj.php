<html>

<head>
<link rel="stylesheet" href="prcss.css" type="text/css" media="screen" /> 	
<script type="text/javascript"> 
function dothis()
	{
		//document.getElementById("twit").innerHTML= document.getElementById("searchbox").value;
		//document.getElementById("src").value= document.getElementById("searchbox").value;
		

		
var xmlhttp = null;
if(!window.XMLHttpRequest) {
   alert('Your browser is outdated');
} else {
   xmlhttp = new XMLHttpRequest();
   //alert("hello call");
   xmlhttp.open('GET', 'prj1.php?q=' + encodeURIComponent(document.getElementById('searchbox').value), true);
   xmlhttp.onreadystatechange = handleResponse;
   xmlhttp.send(null);
}

function handleResponse() {
     // alert("hello0");
   if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      //alert("hello1");
     // alert(xmlhttp.responseText);
      document.getElementById('right').innerHTML = xmlhttp.responseText;
	  //alert("hello2");
   }
}
}
</script>
</head>
<body>
<form>
<div id="container">
    
	<div id= "left">
	<input type ="text" name="q1" id = "searchbox"\>	
	<input type ="button" value="Search" id = "b1" onclick="dothis();"\>
	
		</div>
		
	<div id = "right" style="width: 600px; height: 800px">
	
	
	</div>
	

</div>
</form>
</body>
</html>