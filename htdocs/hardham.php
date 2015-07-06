<?php
$files = array();
$dir = opendir('hardham');
while(($file = readdir($dir)) !== false)
{
 if(!is_dir($file))
 {
   $files[] = $file;
   
 }
}
sort($files);
$c = 0;
for($j=0; $j<(count($files)); $j++)
{
//echo ($files[$j]);
$c=$c +1;

//echo "<br />" ;
}
echo $c;

// empty vars
$received= "";
$splittingheaders = true;
for ($i=0; $i < count($lines); $i++) 
{
      echo ($files[$i]);
	  $lines = explode("\n", $files);
	if(trim($lines[$i])=="") {
		// empty line, header section has ended
		$splittingheaders = false;
	}
	if($splittingheaders) 
	{
		// look out for special headers
		if (preg_match("/^Received: (.*)/", $lines[$i], $matches)) 
		{
 		$received = $matches[1];
		echo "true";
		}
		
	} 
	}



closedir($dir);

?>