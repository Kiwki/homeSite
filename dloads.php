<!DOCTYPE html>
<html>
    <head>
        <title>QK | Developper</title>
    	<link rel="icon" href="images/favicon.png" type="image/png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type='text/javascript' src='scriptJS/jquery.particleground.js'></script>
	<script type='text/javascript' src='scriptJS/mainParticule.js'></script>
	<link rel="stylesheet" href="styleCSS/mainStyle.css">
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: center;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
    </head>
    <body>
        <div class="topnav" id="myTopnav">
			<a href="home.php" class="active">Home</a>
			<a href="dloads.php">Downloads</a>
			<a href="about.php">About</a>
			<a href="https://github.com/Kiwki"><img alt="My GitHub" src="images/githubIcone.png" height="16"></a>
		</div>
		<div id="particles">
			<div id="intro">
				<?php
					$dir_nom = 'downloads'; // dossier listé (pour lister le répertoir courant : $dir_nom = '.'  --> ('point')
					$dir = opendir($dir_nom) or die('Erreur de listage : le répertoire n\'existe pas'); // on ouvre le contenu du dossier courant
					$fichier= array(); // on déclare le tableau contenant le nom des fichiers
					$dossier= array(); // on déclare le tableau contenant le nom des dossiers

							while($element = readdir($dir)) {
						  if($element != '.' && $element != '..') {
							  if (!is_dir($dir_nom.'/'.$element)) {$fichier[] = $element;}
							  else {$dossier[] = $element;}
						  }
					}
					closedir($dir);
				?>		
				<table class="tab">
				<tr><td>C++</td></tr>
				<tr><th>Version</th><th>File</th><th>Icon</th></tr>
				<?php
					if(!empty($fichier)) {
						  rsort($fichier); // pour le tri croissant, rsort() pour le tri décroissant
							foreach($fichier as $lien){
								$versionA = substr($lien, 0, 1);
								$versionB = substr($lien, 1, 1);
								$nameFile = substr($lien, 2);
								echo "<tr>";
								echo "<td>$versionA.$versionB</td><td>$nameFile</td><td><a style=\"text-decoration:none\" href=\"$dir_nom/$lien \"><img src=\"images/zip.png\" title=\"PDF file\" alt=\"ZIP archive\" width=\"25px\"></a></td>";
								echo "</tr>";
							}
					}
				?>
				</table>
			</div>
		</div>
   </body>
</html>
