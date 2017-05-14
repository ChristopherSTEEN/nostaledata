<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des cartes pour partenaires</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./partnercards.php" method="POST" id="partnercards">
			<div class="label">Personnage : </div><input type="text" id="charapartcard" name="charapartcard"><br/>
			<div class="label">Image : </div><input type="file" id="partcardpic" name="partcardpic"><br/>
			<div class="label">Type : </div>
			<select name="pcardtype" form="partnercards">
				<option value="Corps à corps">Corps à corps</option>
				<option value="Distance">Distance</option>
				<option value="Magie">Magie</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="partcardname" name="partcardname"><br/>
			<div class="label">Rang des skills : </div><input type="text" id="skillrk" name="skillrk"><br/>
			<center><input type="submit" value="Enregistrer la carte pour partenaire" name="submit" id="submit"></center>
		</form>
		<table id="pcardtable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Rang des skills</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
