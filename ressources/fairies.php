<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des fées</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./fairies.php" method="POST" id="fairies">
			<div class="label">Personnage : </div><input type="text" id="charafairie" name="charafairie"><br/>
			<div class="label">Image : </div><input type="file" id="fairiepic" name="fairiepic"><br/>
			<div class="label">Nom : </div><input type="text" id="fairiename" name="fairiename"><br/>
			<div class="label">Elément Feu : </div><input type="number" step="1" min="0" id="fireelem" name="fireelem"><br/>
			<div class="label">Elément Eau : </div><input type="number" step="1" min="0" id="waterelem" name="waterelem"><br/>
			<div class="label">Elément Lumière : </div><input type="number" step="1" min="0" id="lightelem" name="lightelem"><br/>
			<div class="label">Elément Obscure : </div><input type="number" step="1" min="0" id="darkelem" name="darkelem"><br/>
			<center><input type="submit" value="Enregistrer la fée" name="submit" id="submit"></center>
		</form>
		<table id="fairietable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Nom</td>
					<td>Elément Feu</td>
					<td>Elément Eau</td>
					<td>Elément Lumière</td>
					<td>Elément Obscure</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
