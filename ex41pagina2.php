<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta author = "Claudia Moyano">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" href = "styles.css">
		<title>Enregistrament de nombre: nombre enregistrat</title>
	</head>
	<body>
		<div class = "whitesquare">
			<h1>Enregistrament de nombre:<br>nombre enregistrat</h1>
			<?php
				session_start();			
				$_SESSION['ocult'] = $_POST['ocult'];
			?>
			<a href = "ex41pagina3.php">Endevina!</a>
		</div>
	</body>
</html>
