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
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./partnercards.php" method="POST" id="pcards">
			<div class="label">Personnage : </div>
			<select name="charapcards" form="pcards" id="charapcards">
				<?php
					$charapcards = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charapcards as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="pcardpic" name="pcardpic"><br/>
			<div class="label">Type : </div>
			<select name="pcardtype" form="pcards" id="pcardtype">
				<option value="Corps à corps">Corps à corps</option>
				<option value="Distance">Distance</option>
				<option value="Magie">Magie</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="pcardname" name="pcardname"><br/>
			<div class="label">Rang des skills : </div><input type="text" id="skillrk" name="skillrk" placeholder="X-X-X"><br/>
			<center><input type="submit" value="Enregistrer la carte pour partenaire" name="submit" id="submit"></center>
		</form>
		<table id="pcardtable">
			<thead>
				<tr>
					<td>Actions</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Rang des skills</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$pcards = $PDO->query("SELECT p.*, c.pseudo FROM partnercards p INNER JOIN characters c ON c.ID = p.character_id ORDER BY p.ID");
					foreach ($pcards as $row){
						echo "
							<tr>
								<td><a href='pcards' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='pcards' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->pcardtype ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->skillsrank ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
