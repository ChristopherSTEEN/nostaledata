<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des équipements</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
		<script>
			$(function(){
				$("#equipements").on("submit", function(e){
					e.preventDefault()
					data = {
						chara: $("#charaequip").val(),
						img: $("#equippic").val(),
						type: $("#equiptype").val(),
						name: $("#equipname").val(),
						level: $("#equiplv").val(),
						rare: $("#equiprare").val(),
						upgrade: $("#equipup").val(),
						form: "equipements"
					}
					$.ajax({
						method: "POST",
						url: "../ajax/ajaxregister.php",
						data : data,
						success: function(success){
							$("#globalerror").html(success);
						}
					})
				})
			})
		</script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./equipements.php" method="POST" id="equipements">
			<div class="label">Personnage : </div>
			<select name="charaequip" form="equipements" id="charaequip">
				<?php
					$charaequips = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($charaequips as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Image : </div><input type="file" id="equippic" name="equippic"><br/>
			<div class="label">Type : </div>
			<select name="equiptype" form="equipements" id="equiptype">
				<option value="Arme principale">Arme principale</option>
				<option value="Arme principale héroique">Arme principale héroique</option>
				<option value="Arme secondaire">Arme secondaire</option>
				<option value="Arme secondaire héroique">Arme secondaire héroique</option>
				<option value="Armure">Armure</option>
				<option value="Armure héroique">Armure Héroique</option>
			</select><br/>
			<div class="label">Nom : </div><input type="text" id="equipname" name="equipname"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="equiplv" name="equiplv"><br/>
			<div class="label">Rareté : </div>
			<select name="equiprare" form="equipements" id="equiprare">
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
				<option value="Phénoménal">Phénoménal</option>
			</select><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="10" id="equipup" name="equipup"><br/>
			<center><input type="submit" value="Enregistrer l'équipement" name="submit" id="submit"></center>
		</form>
		<table id="equiptable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Personnage</td>
					<td>Img name</td>
					<td>Type</td>
					<td>Nom</td>
					<td>Niveau</td>
					<td>Rareté</td>
					<td>Amélioration</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$equipements = $PDO->query("SELECT e.*, c.pseudo FROM equipments e INNER JOIN characters c ON c.ID = e.character_id ORDER BY e.ID");
					foreach ($equipements as $row){
						echo "
							<tr>
								<td>" . $row->ID ."</td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->equiptype ."</td>
								<td>" . $row->name ."</td>
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
