<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des partenaires</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./partners.php" method="POST" id="partners">
			<div class="label">Personnage : </div><input type="text" id="charapartner" name="charapartner"><br/>
			<div class="label">Image : </div><input type="file" id="partnerpic" name="partnerpic"><br/>
			<div class="label">Type : </div>
			<select name="parttype" form="partners">
				<option value="Corps à corps">Corps à corps</option>
				<option value="Distance">Distance</option>
				<option value="Magie">Magie</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="partname" name="partname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="partlv" name="partlv"><br/>
			<center><input type="submit" value="Enregistrer le partenaire" name="submit" id="submit"></center>
		</form>
		<table id="parttable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Niveau</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
