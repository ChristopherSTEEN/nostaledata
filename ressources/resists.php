<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des résistances</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./resists.php" method="POST" id="resists">
			<div class="label">Personnage : </div><input type="text" id="chararesist" name="chararesist"><br/>
			<div class="label">Image : </div><input type="file" id="resistpic" name="resistpic"><br/>
			<div class="label">Type : </div>
			<select name="resisttype" form="resists">
				<option value="Gants">Gants</option>
				<option value="Gants héroiques">Gants Héroiques</option>
				<option value="Bottes">Bottes</option>
				<option value="Bottes héroiques">Bottes Héroiques</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="resistname" name="resistname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="resistlv" name="resistlv"><br/>
			<div class="label">Résistance Feu : </div><input type="number" step="1" min="0" id="fireres" name="fireres"><br/>
			<div class="label">Resistance Eau : </div><input type="number" step="1" min="0" id="waterres" name="waterres"><br/>
			<div class="label">Resistance Lumière : </div><input type="number" step="1" min="0" id="lightres" name="lightres"><br/>
			<div class="label">Resistance Obscure : </div><input type="number" step="1" min="0" id="darkres" name="darkres"><br/>
			<center><input type="submit" value="Enregistrer la résistance" name="submit" id="submit"></center>
		</form>
		<table id="resisttable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Niveau</td>
					<td>Resistance Feu</td>
					<td>Resistance Eau</td>
					<td>Resistance Lumière</td>
					<td>Resistance Obscure</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
