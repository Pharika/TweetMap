
<!DOCTYPE html>

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>jQuery UI Example Page</title>

		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	

		<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>

		<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>

		<script type="text/javascript">

			$(function(){

		
				// Datepicker

				$('#datepicker').datepicker({

					inline: true

				});
			});

		</script>

		<style type="text/css">

			/*demo page css*/

			
body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}

			.demoHeaders { margin-top: 2em; }
		</style>	

	</head>

	<body>
	

		<!-- Datepicker -->

		<h2 class="demoHeaders">Datepicker</h2>

		<p>Date: <input type="text" id="datepicker"></p>

	</body>

</html>





