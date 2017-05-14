<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des equipements pour partenaire</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./partnerequips.php" method="POST" id="partnerequips">
			<div class="label">Partenaire : </div><input type="text" id="partnerequip" name="partnerequip"><br/>
			<div class="label">Type : </div>
			<select name="pequiptype" form="partnerequips">
				<option value="Arme">Arme</option>
				<option value="Armure">Armure</option>
			</select><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="pequiplv" name="pequiplv"><br/>
			<div class="label">Rareté : </div>
			<select name="pequiprare" form="partnerequips">
				<option value="Endommagé">Endommagé</option>
				<option value="Bas-Niveau">Bas-Niveau</option>
				<option value="">Aucun</option>
				<option value="Utile">Utile</option>
				<option value="Bon">Bon</option>
				<option value="Haute-qualité">Haute-qualité</option>
				<option value="Excellent">Excellent</option>
				<option value="Ancestral">Ancestral</option>
				<option value="Mystérieux">Mystérieux</option>
				<option value="Légendaire">Légendaire</option>
			</select><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="10" id="pequipup" name="pequipup"><br/>
			<center><input type="submit" value="Enregistrer le partenaire" name="submit" id="submit"></center>
		</form>
		<table id="pequiptable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Partenaire</td>
					<td>Type</td>
					<td>Niveau</td>
					<td>Rareté</td>
					<td>Amélioration</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
