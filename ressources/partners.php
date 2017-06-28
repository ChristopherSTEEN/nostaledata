<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des partenaires</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="../js/jquery321.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./partners.php" method="POST" id="partners">
			<div class="label">Personnage : </div>
			<select name="charapartners" form="partners" id="charapartners">
				<?php
					$charapartners = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charapartners as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="partnerpic" name="partnerpic"><br/>
			<div class="label">Type : </div>
			<select name="parttype" form="partners" id="parttype">
				<option value="Corps à corps">Corps à corps</option>
				<option value="Distance">Distance</option>
				<option value="Magie">Magie</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="partname" name="partname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="partlv" name="partlv"><br/>
			<center><input type="submit" value="Enregistrer le partenaire" name="submit" id="submit"></center>
		</form>
		<table id="parttable">
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
					$partners = $PDO->query("SELECT p.*, c.pseudo FROM partners p INNER JOIN characters c ON c.ID = p.character_id ORDER BY p.ID");
					foreach ($partners as $row){
						echo "
							<tr>
								<td><a href='partners' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='partners' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->parttype ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->level ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
