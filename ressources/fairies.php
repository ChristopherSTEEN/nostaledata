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
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./fairies.php" method="POST" id="fairies">
			<div class="label">Personnage : </div>
			<select name="charafairy" form="fairies" id="charafairy">
				<?php
					$charafairy = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charafairy as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
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
					<td>Actions</td>
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
				<?php
					$equipements = $PDO->query("SELECT f.*, c.pseudo FROM fairies f INNER JOIN characters c ON c.ID = f.character_id ORDER BY f.ID");
					foreach ($equipements as $row){
						echo "
							<tr>
								<td><a href='fairies' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='fairies' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->fireelem ." %</td>
								<td>" . $row->waterelem ." %</td>
								<td>" . $row->lightelem ." %</td>
								<td>" . $row->darkelem ." %</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
