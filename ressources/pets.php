<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des nosmates</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./pets.php" method="POST" id="pets">
			<div class="label">Personnage : </div><input type="text" id="charapets" name="charapets"><br/>
			<div class="label">Image : </div><input type="file" id="petpic" name="petpic"><br/>
			<div class="label">Nom : </div><input type="text" id="petname" name="petname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="petlv" name="petlv"><br/>
			<div class="label">Niveau d'attaque : </div><input type="number" step="1" min="0" max="10" id="attlv" name="attlv"><br/>
			<div class="label">Niveau de défense : </div><input type="number" step="1" min="0" max="10" id="deflv" name="deflv"><br/>
			<center><input type="submit" value="Enregistrer le nosmate" name="submit" id="submit"></center>
		</form>
		<table id="pettable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Nom</td>
					<td>Niveau</td>
					<td>Niveau d'attaque</td>
					<td>Niveau de défense</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
