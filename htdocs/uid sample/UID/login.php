<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function choose(){

<?php
if ( $_POST['select2'] == "Long-term")
{
	echo "hello";
}
else
{
	echo "How";
}
?>
}
</script>
</head>

<body>
<form  method="post" name="Login">
                        <select name="select2" id="select3">
                          <option value="Short-term">Short-term</option>
                          <option value="Long-term">Long-term</option>
                        </select>
               <input type="submit" value="Submit" onclick="choose()"	 />
            </form>
</body>
</html>