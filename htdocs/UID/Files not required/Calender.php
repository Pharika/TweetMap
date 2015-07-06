<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="datecal/jquery.ui.all.css">
	<script src="datecal/jquery-1.6.2.js"></script>
	<script src="datecal/ui/jquery.ui.core.js"></script>
	<script src="datecal/ui/jquery.ui.widget.js"></script>
	<script src="datecal/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="datecal/demos.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>
</head>
<body>

<div class="demo">

<p>Date: <input type="text" id="datepicker"></p>

</div><!-- End demo -->



<div class="demo-description">
<p>The datepicker is tied to a standard form input field.  Focus on the input (click, or use the tab key) to open an interactive calendar in a small overlay.  Choose a date, click elsewhere on the page (blur the input), or hit the Esc key to close. If a date is chosen, feedback is shown as the input's value.</p>
</div><!-- End demo-description -->

</body>
</html>
