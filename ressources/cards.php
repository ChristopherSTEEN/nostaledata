<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des cartes SP</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./cards.php" method="POST" id="cards">
			<div class="label">Personnage : </div><input type="text" id="characard" name="characard"><br/>
			<div class="label">Image : </div><input type="file" id="cardpic" name="cardpic"><br/>
			<div class="label">Nom : </div><input type="text" id="cardname" name="cardname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="cardlv" name="cardlv"><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="15" id="cardup" name="cardup"><br/>
			<div class="label">Renforcement : </div><input type="number" step="1" min="0" max="100" id="cardreinf" name="cardreinf"><br/>
			<center><input type="submit" value="Enregistrer la carte SP" name="submit" id="submit"></center>
		</form>
		<table id="cardtable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Nom</td>
					<td>Niveau</td>
					<td>Amélioration</td>
					<td>Renforcement</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
