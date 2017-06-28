<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des cartes SP</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="../js/jquery321.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./cards.php" method="POST" id="cards">
			<div class="label">Personnage : </div>
			<select name="characards" form="cards" id="characards">
				<?php
					$characards = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($characards as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="cardpic" name="cardpic"><br/>
			<div class="label">Nom : </div><input type="text" id="cardname" name="cardname"><br/>
			<div class="label">Numéro : </div><input type="number" step="1" min="-3" max="8" id="cardnb" name="cardnb"><br/>
			<div class="infos">[-3]: Pirate | [-2]: Poule | [-1]: Pyjama | [0]: Jajamaru</div>
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
					<td>Numéro</td>
					<td>Niveau</td>
					<td>Amélioration</td>
					<td>Renforcement</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$equipements = $PDO->query("SELECT ca.*, c.pseudo FROM cards ca INNER JOIN characters c ON c.ID = ca.character_id ORDER BY ca.ID");
					foreach ($equipements as $row){
						echo "
							<tr>
								<td><a href='cards' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='cards' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->name ."</td>
								<td>" . $row->cardnumber ."</td>
								<td>" . $row->level ."</td>
								<td>" . $row->upgrade ."</td>
								<td>" . $row->reinforcement ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
