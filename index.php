<?php
	include_once ("config.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Nostale Data</title>
		<link rel="stylesheet" href="./css/default.css">
		<link rel="icon" type="image/png" href="./img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="./js/script.js"></script>
	</head>
	<body>
		<div id="menu">
			<ul>
				<li><a href="#">Gestions</a>
					<ul>
						<li><a href="#">Personnages</a></li>
						<li><a href="#">Equipements</a></li>
						<li><a href="#">Bijoux</a></li>
						<li><a href="#">Résistances</a></li>
						<li><a href="#">Fées</a></li>
						<li><a href="#">Cartes SP</a></li>
						<li><a href="#">Partenaires</a></li>
						<li><a href="#">Cartes pour partenaires</a></li>
						<li><a href="#">Equipements de partenaires</a></li>
						<li><a href="#">Nosmates</a></li>
					</ul>
				</li>
				<li><a href="#">Collections</a>
					<ul>
						<li><a href="#">Collections de SP</a></li>
						<li><a href="#">Collections de cartes de partenaires</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<header><img id="index-logo" src="./img/logo.png"></img></header>
		<div id="index-container">
			<a class="index-server-link" href=""><img src="./img/sv1.png"></a>
			<a class="index-server-link" href=""><img src="./img/sv2.png"></a>
			<br/>
			<a class="index-server-link" href=""><img src="./img/sv3.png"></a>
			<a class="index-server-link" href=""><img src="./img/sv4.png"></a>
			<br/>
			<a class="index-all-link" href="/characters#index"><img src="./img/sv0.png"></a>
		</div>
		<div id="footer">
			<p>Site cr&eacute;e sous PHP<br/>
			&copy; 2017 - Grisouille<br/>
			<br/>
			Nostale est une marque d&eacute;pos&eacute;e<br/>
			&copy; 2007 / 2017 - Entwell Co. Ltd.<br/>
			<br/>
			Jeu &eacute;dit&eacute; par Gameforge 4D GmbH.</p>
		</div>
	</body>
</html>
