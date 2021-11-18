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
	</body>
</html>
