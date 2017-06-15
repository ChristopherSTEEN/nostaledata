<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des personnages</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="globalerror"></div>
		<form action="./characters.php" method="POST" id="characters">
			<div class="label">Pseudo : </div><input type="text" id="username" name="username"><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="charapic" name="charapic"><br/>
			<div class="label">Métier : </div>
			<select name="job" form="characters" id="charajob">
				<option value="Aventurier">Aventurier</option>
				<option value="Escrimeur">Escrimeur</option>
				<option value="Archer">Archer</option>
				<option value="Mage">Mage</option>
			</select><br/>
			<div class="label">Serveur : </div>
			<select name="server" form="characters" id="charaserv">
				<option value="1">1 (Océanie)</option>
				<option value="2">2 (Solare)</option>
				<option value="3">3 (Nova)</option>
				<option value="4">4 (Nexus)</option>
			</select><br/>
			<div class="label">Nv Combat : </div><input type="number" step="1" min="1" max="99" id="battlelv" name="battlelv"><br/>
			<div class="label">Progression Cb : </div><input type="number" step="0.01" min="0" max="100" id="battleprog" name="battleprog"><br/>
			<div class="label">Nv Métier : </div><input type="number" step="1" min="1" max="80" id="joblv" name="joblv"><br/>
			<div class="label">Progression Mt : </div><input type="number" step="0.01" min="0" max="100" id="jobprog" name="jobprog"><br/>
			<div class="label">Nv Héroïque : </div><input type="number" step="1" min="0" max="50" id="herolv" name="herolv"><br/>
			<div class="label">Progression Hr : </div><input type="number" step="0.01" min="0" max="100" id="heroprog" name="heroprog"><br/>
			<div class="label">Or : </div><input type="number" step="1" min="0" id="gold" name="gold"><br/>
			<div class="label">Réputation : </div><input type="number" step="1" min="0" id="reput" name="reput"><br/>
			<center><input type="submit" value="Enregistrer le personnage" name="submit" id="submit"></center>
		</form>
		<table id="charatable">
			<thead>
				<tr>
					<td>Actions</td>
					<td>Pseudo</td>
					<td>Img name</td>
					<td>Métier</td>
					<td>Serveur</td>
					<td>Nv Comb</td>
					<td>Pr Comb</td>
					<td>Nv Job</td>
					<td>Pr Job</td>
					<td>Nv Her</td>
					<td>Pr Her</td>
					<td>Or</td>
					<td>Reput</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$characters = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($characters as $row){
						echo "
							<tr>
								<td><a href='characters' class='edit' name='" . $row->ID . "'><img src='../img/pen.png' alt='Editer'></a><a href='characters' class='delete' name='" . $row->ID . "'><img src='../img/bin.png' alt='Supprimer'></a></td>
								<td>" . $row->pseudo ."</td>
								<td>" . $row->image_url ."</td>
								<td>" . $row->metier ."</td>
								<td>" . $row->server ."</td>
								<td>" . $row->battlelv ."</td>
								<td>" . $row->battleprog ."</td>
								<td>" . $row->joblv ."</td>
								<td>" . $row->jobprog ."</td>
								<td>" . $row->herolv ."</td>
								<td>" . $row->heroprog ."</td>
								<td>" . $row->gold ."</td>
								<td>" . $row->reput ."</td>
							</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
