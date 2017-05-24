<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page d'édition</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<?php
			if ($_SESSION["table"] == "characters"){
				$charaedit = $PDO->query("SELECT * FROM characters ORDER BY ID");
				foreach ($charaedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un personnage</h1></center>
		<div id="globalerror"></div>
		<form action="edit.php" method="POST" id="charaedit">
			<div class="label">Pseudo : </div><input type="text" id="charaname" name="charaname" value="<?php echo $row->pseudo; ?>" disabled><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="charapic" name="charapic"><br/>
			<div class="label">Métier : </div>
				<?php if ($row->metier == "Aventurier"){ ?>
			<select name="job" form="characters" id="charajob">
				<option value="Aventurier">Aventurier</option>
				<option value="Escrimeur">Escrimeur</option>
				<option value="Archer">Archer</option>
				<option value="Mage">Mage</option>
			</select>
				<?php } else { ?>
				<input type="text" id="charajob" name="charajob" value="<?php echo $row->metier; ?>" disabled>
				<?php } ?>
			<br/>
			<div class="label">Serveur : </div><input type="text" id="charaserver" name="charaserver" value="<?php echo $row->server; ?>" disabled>
			<div class="label">Nv Combat : </div><input type="number" step="1" min="1" max="99" id="battlelv" name="battlelv" value="<?php echo $row->battlelv; ?>"><br/>
			<div class="label">Progression Cb : </div><input type="number" step="0.01" min="0" max="100" id="battleprog" name="battleprog" value="<?php echo $row->battleprog; ?>"><br/>
			<div class="label">Nv Métier : </div><input type="number" step="1" min="1" max="80" id="joblv" name="joblv" value="<?php echo $row->joblv; ?>"><br/>
			<div class="label">Progression Mt : </div><input type="number" step="0.01" min="0" max="100" id="jobprog" name="jobprog" value="<?php echo $row->jobprog; ?>"><br/>
			<div class="label">Nv Héroïque : </div><input type="number" step="1" min="0" max="30" id="herolv" name="herolv" value="<?php echo $row->herolv; ?>"><br/>
			<div class="label">Progression Hr : </div><input type="number" step="0.01" min="0" max="100" id="heroprog" name="heroprog" value="<?php echo $row->heroprog; ?>"><br/>
			<div class="label">Or : </div><input type="number" step="1" min="0" id="gold" name="gold" value="<?php echo $row->gold; ?>"><br/>
			<div class="label">Réputation : </div><input type="number" step="1" min="0" id="reput" name="reput" value="<?php echo $row->reput; ?>"><br/>
			<center><input type="submit" value="Editer le personnage" name="submit" id="<?php if ($row->metier == "Aventurier"){ echo "avensubmit"; } else { echo "charasubmit"; } ?>">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "cards"){
				$cardedit = $PDO->query("SELECT * FROM cards ORDER BY ID");
				foreach ($cardedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer une carte de spécialiste</h1></center>
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
			<div class="label">Nom : </div><input type="text" id="cardname" name="cardname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Numéro : </div><input type="number" step="1" min="-3" max="8" id="cardnb" name="cardnb" value="<?php echo $row->cardnumber; ?>" disabled><br/>
			<div class="infos">[-3]: Pirate | [-2]: Poule | [-1]: Pyjama | [0]: Jajamaru</div>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="cardlv" name="cardlv"><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="15" id="cardup" name="cardup"><br/>
			<div class="label">Renforcement : </div><input type="number" step="1" min="0" max="100" id="cardreinf" name="cardreinf"><br/>
			<center><input type="submit" value="Editer le personnage" name="submit" id="cardsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
	</body>
</html>
