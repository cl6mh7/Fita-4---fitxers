<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta author = "Claudia Moyano">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" href = "styles.css">
		<link rel = "shortcut icon" href = "http://clipart-library.com/images/dT9pbjB9c.gif"/>
		<title>Endevina el nombre</title>
	</head>
	<body>
		<div class = "whitesquare">
			<h1>Endevina el nombre</h1>
			<?php
				session_start();
				function formulari() {
					echo "<form method = 'POST'>";
					echo "<input type = 'number' name = 'endevina'>";
					echo "<input type = 'submit' value = 'ENDEVINA'>";
					echo "</form>";
				}

				if (!isset($_POST['endevina'])) {
					$_SESSION['intents'] = 0;
					$_SESSION['historial'] = array();
					formulari();
				} else {
					$_SESSION['intents']++;
					$nombreAdivinat = $_POST['endevina'];

					if (!isset($_SESSION['historial'])) {
						$_SESSION['historial'] = array();
					}

					array_push($_SESSION['historial'], $nombreAdivinat);

					if ($nombreAdivinat === $_SESSION['ocult']) {
						echo "<p>Felicitats, has endivinat el nombre en ".$_SESSION['intents']." intents.</p>";
						echo "<a href='ex41pagina1.php'>Tornar a l'inici</a>";
					} else {
						if ($nombreAdivinat < $_SESSION['ocult']) {
							echo "<p>El nombre que esteu buscant és major.</p>";
						} else {
							echo "<p>El nombre que esteu buscant és menor.</p>";
						}

						echo "<p>Intents realitzats: " . $_SESSION['intents']."</p>";
						
						echo "<p>Historial dels nombres introduïts:</p>";
						foreach ($_SESSION['historial'] as $nombre) {
							echo "$nombre, ";
						}
						formulari();
					}
				}
			?>
		</div>
	</body>
</html>