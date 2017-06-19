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
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./jewelries.php" method="POST" id="jewelries">
			<div class="label">Personnage : </div>
			<select name="charajewel" form="jewelries" id="charajewel">
				<?php
					$charajewels = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charajewels as $jewrow){
						echo "<option value='" . $jewrow->ID . "'>" . $jewrow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="jewelpic" name="jewelpic"><br/>
			<div class="label">Type : </div>
			<select name="jeweltype" form="jewelries" id="jeweltype">
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
					<td>Actions</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Niveau</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$jewelries = $PDO->query("SELECT j.*, c.pseudo FROM jewelries j INNER JOIN characters c ON c.ID = j.character_id ORDER BY j.ID");
					foreach ($jewelries as $row){
						echo "
							<tr>
								<td><a href='jewelries' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='jewelries' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->jeweltype ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->level ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
