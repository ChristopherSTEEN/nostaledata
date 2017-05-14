<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des bijoux</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<form action="./jewelries.php" method="POST" id="jewelries">
			<div class="label">Personnage : </div><input type="text" id="charajewel" name="charajewel"><br/>
			<div class="label">Image : </div><input type="file" id="jewelpic" name="jewelpic"><br/>
			<div class="label">Type : </div>
			<select name="jeweltype" form="jewelries">
				<option value="Bague">Bague</option>
				<option value="Bague héroique">Bague Héroique</option>
				<option value="Collier">Collier</option>
				<option value="Collier héroique">Collier Héroique</option>
				<option value="Bracelet">Bracelet</option>
				<option value="Bracelet héroique">Bracelet Héroique</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="jewelname" name="jewelname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="jewellv" name="jewellv"><br/>
			<center><input type="submit" value="Enregistrer le bijou" name="submit" id="submit"></center>
		</form>
		<table id="jeweltable">
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
