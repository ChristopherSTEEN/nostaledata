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
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./pets.php" method="POST" id="pets">
			<div class="label">Personnage : </div>
			<select name="charapets" form="pets" id="charapets">
				<?php
					$charapartners = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charapartners as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
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
				<?php
					$pets = $PDO->query("SELECT p.*, c.pseudo FROM pets p INNER JOIN characters c ON c.ID = p.character_id ORDER BY p.ID");
					foreach ($pets as $row){
						echo "
							<tr>
								<td>" . $row->ID ."</td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->level ."</td>
								<td>" . $row->atqlv ."</td>
								<td>" . $row->deflv ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
