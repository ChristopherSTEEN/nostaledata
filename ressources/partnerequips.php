<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des equipements pour partenaire</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="../js/jquery321.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./partnerequips.php" method="POST" id="partequips">
			<div class="label">Partenaire : </div>
			<select name="partequip" form="partequips" id="partequip">
				<?php
					$partners = $PDO->query("SELECT p.*, c.pseudo FROM partners p INNER JOIN characters c ON c.ID = p.character_id ORDER BY p.ID");
					foreach ($partners as $parrow){
						echo "<option value='" . $parrow->ID . "'>" . $parrow->name . " (" . $parrow->pseudo . ")</option>";
					}
				?>
			</select><br/>
			<div class="label">Type : </div>
			<select name="pequiptype" form="partequips" id="pequiptype">
				<option value="Arme">Arme</option>
				<option value="Armure">Armure</option>
			</select><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="pequiplv" name="pequiplv"><br/>
			<div class="label">Rareté : </div>
			<select name="pequiprare" form="partequips" id="pequiprare">
				<option value="Endommagé">Endommagé</option>
				<option value="Bas-Niveau">Bas-Niveau</option>
				<option value="">Aucun</option>
				<option value="Utile">Utile</option>
				<option value="Bon">Bon</option>
				<option value="Haute-qualité">Haute-qualité</option>
				<option value="Excellent">Excellent</option>
				<option value="Ancestral">Ancestral</option>
				<option value="Mystérieux">Mystérieux</option>
				<option value="Légendaire">Légendaire</option>
			</select><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="10" id="pequipup" name="pequipup"><br/>
			<center><input type="submit" value="Enregistrer l'équipement pour partenaire" name="submit" id="submit"></center>
		</form>
		<table id="pequiptable">
			<thead>
				<tr>
					<td>Actions</td>
					<td>Partenaire</td>
					<td>Type</td>
					<td>Niveau</td>
					<td>Rareté</td>
					<td>Amélioration</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$pequips = $PDO->query("SELECT p.*, pa.name AS partname, c.pseudo FROM partnerequipments p INNER JOIN partners pa ON pa.ID = p.partner_id INNER JOIN characters c ON pa.character_id = c.ID ORDER BY p.ID");
					foreach ($pequips as $row){
						echo "
							<tr>
								<td><a href='pequips' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='pequips' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->partname ." (" . $row->pseudo . ")</td>
								<td>" . $row->pequiptype ."</td>
								<td>" . $row->level ."</td>
								<td>" . $row->rare ."</td>
								<td>" . $row->upgrade ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
