<?php
require_once 'lib/autoLoader.php';
require_once 'vendor/autoload.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Campus 3.0</title>
		<style type="text/css">
			@import url(styles/Campus.css);
		</style>
	</head>
	<body >
		<?php
			require_once 'controleur/controleurPrincipal.php';	
		?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

		<script>
			$(document).ready( function()
			{
				$(window).scroll( function()
				{
					var scroll = $(window).scrollTop();
					if ( scroll > 50 ) { $("#Navigation").css("background-color", "rgb(149,24,245)"); }
					else { $("#Navigation").css("background-color", "transparent"); }
				})
			})
		</script>

	</body>
</html>
