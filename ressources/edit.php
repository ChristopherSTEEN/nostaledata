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
		<script src="../js/jquery321.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/ajax.js"></script>
	</head>
	<body>
		<div id="globalerror"></div>
		<?php
			if ($_SESSION["table"] == "characters"){
				$charaedit = $PDO->query("SELECT * FROM characters ORDER BY ID");
				foreach ($charaedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un personnage</h1></center>
		<form action="edit.php" method="POST" id="charaedit">
			<div class="label">Pseudo : </div><input type="text" id="charaname" name="charaname" value="<?php echo $row->pseudo; ?>" disabled><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="charapic" name="charapic" value="<?php echo $row->image_url; ?>"><br/>
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
			<div class="label">Nv Héroïque : </div><input type="number" step="1" min="0" max="50" id="herolv" name="herolv" value="<?php echo $row->herolv; ?>"><br/>
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
			<div class="label">Nom de l'image : </div><input type="text" id="cardpic" name="cardpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Nom : </div><input type="text" id="cardname" name="cardname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Numéro : </div><input type="number" step="1" min="-3" max="8" id="cardnb" name="cardnb" value="<?php echo $row->cardnumber; ?>" disabled><br/>
			<div class="infos">[-3]: Pirate | [-2]: Poule | [-1]: Pyjama | [0]: Jajamaru</div>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="cardlv" name="cardlv" value="<?php echo $row->level; ?>"><br/>
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="15" id="cardup" name="cardup" value="<?php echo $row->upgrade; ?>"><br/>
			<div class="label">Renforcement : </div><input type="number" step="1" min="0" max="100" id="cardreinf" name="cardreinf" value="<?php echo $row->reinforcement; ?>"><br/>
			<center><input type="submit" value="Editer la carte SP" name="submit" id="cardsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "equipements"){
				$equipedit = $PDO->query("SELECT * FROM equipments ORDER BY ID");
				foreach ($equipedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un équipement</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="equippic" name="equippic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Type : </div><input type="text" id="equiptype" name="equiptype" value="<?php echo $row->equiptype; ?>" disabled><br/>
			<div class="label">Nom : </div><input type="text" id="equipname" name="equipname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="equiplv" name="equiplv" value="<?php echo $row->level ?>"><br/>
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
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="10" id="equipup" name="equipup" value="<?php echo $row->upgrade; ?>"><br/>
			<center><input type="submit" value="Editer l'équipement" name="submit" id="equipsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php 
			if ($_SESSION["table"] == "fairies"){
				$fairieedit = $PDO->query("SELECT * FROM fairies ORDER BY ID");
				foreach ($fairieedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer une fée</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="fairiepic" name="fairiepic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Nom : </div><input type="text" id="fairiename" name="fairiename" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Elément Feu : </div><input type="number" step="1" min="0" id="fireelem" name="fireelem" value="<?php echo $row->fireelem; ?>"><br/>
			<div class="label">Elément Eau : </div><input type="number" step="1" min="0" id="waterelem" name="waterelem" value="<?php echo $row->waterelem; ?>"><br/>
			<div class="label">Elément Lumière : </div><input type="number" step="1" min="0" id="lightelem" name="lightelem" value="<?php echo $row->lightelem; ?>"><br/>
			<div class="label">Elément Obscure : </div><input type="number" step="1" min="0" id="darkelem" name="darkelem" value="<?php echo $row->darkelem; ?>"><br/>
			<center><input type="submit" value="Editer la fée" name="submit" id="fairiesubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "jewelries"){
				$jeweledit = $PDO->query("SELECT * FROM jewelries ORDER BY ID");
				foreach ($jeweledit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un bijou</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="jewelpic" name="jewelpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Type : </div><input type="text" id="jeweltype" name="jeweltype" value="<?php echo $row->jeweltype; ?>" disabled><br/>
			<div class="label">Nom : </div><input type="text" id="jewelname" name="jewelname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="jewellv" name="jewellv" value="<?php echo $row->level; ?>" disabled><br/>
			<center><input type="submit" value="Editer le bijoux" name="submit" id="jewelsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "pcards"){
				$pcardedit = $PDO->query("SELECT * FROM partnercards ORDER BY ID");
				foreach ($pcardedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer une carte pour partenaire</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="pcardpic" name="pcardpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Type : </div><input type="text" id="pcardtype" name="pcardtype" value="<?php echo $row->pcardtype; ?>" disabled><br/>
			<div class="label">Nom : </div><input type="text" id="pcardname" name="pcardname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Rang des skills : </div><input type="text" id="skillrk" name="skillrk" placeholder="X-X-X" value="<?php echo $row->skillsrank; ?>"><br/>
			<center><input type="submit" value="Editer la carte pour partenaire" name="submit" id="pcardsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "pequips"){
				$pequipedit = $PDO->query("SELECT pe.*, p.name AS partname, c.pseudo AS charapseudo FROM partnerequipments pe INNER JOIN partners p ON p.ID = pe.partner_id INNER JOIN characters c ON c.ID = p.character_ID ORDER BY pe.ID");
				foreach ($pequipedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un équipement pour partenaire</h1></center>
		<form action="./partnerequips.php" method="POST" id="partequips">
			<div class="label">Partenaire : </div><input type="text" id="partname" name="partname" value="<?php echo $row->partname . ' (' . $row->charapseudo . ')'; ?>" disabled><br/>
			<div class="label">Type : </div><input type="text" id="pequiptype" name="pequiptype" value="<?php echo $row->pequiptype; ?>" disabled><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="pequiplv" name="pequiplv" value="<?php echo $row->level; ?>"><br/>
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
			<div class="label">Amélioration : </div><input type="number" step="1" min="0" max="10" id="pequipup" name="pequipup" value="<?php echo $row->upgrade; ?>"><br/>
			<center><input type="submit" value="Editer l'équipement pour partenaire" name="submit" id="pequipsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "partners"){
				$partedit = $PDO->query("SELECT * FROM partners ORDER BY ID");
				foreach ($partedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un partenaire</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="partnerpic" name="partnerpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Type : </div><input type="text" id="parttype" name="parttype" value="<?php echo $row->parttype; ?>" disabled><br/>
			<div class="label">Nom : </div><input type="text" id="partname" name="partname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="partlv" name="partlv" value="<?php echo $row->level; ?>"><br/>
			<center><input type="submit" value="Editer le partenaire" name="submit" id="partsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "pets"){
				$petedit = $PDO->query("SELECT * FROM pets ORDER BY ID");
				foreach ($petedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer un nosmate</h1></center>
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
			<div class="label">Nom de l'image : </div><input type="text" id="petpic" name="petpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Nom : </div><input type="text" id="petname" name="petname" value="<?php echo $row->name; ?>"><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="petlv" name="petlv" value="<?php echo $row->level; ?>"><br/>
			<div class="label">Niveau d'attaque : </div><input type="number" step="1" min="0" max="10" id="attlv" name="attlv" value="<?php echo $row->atqlv; ?>"><br/>
			<div class="label">Niveau de défense : </div><input type="number" step="1" min="0" max="10" id="deflv" name="deflv" value="<?php echo $row->deflv; ?>"><br/>
			<center><input type="submit" value="Editer le nosmate" name="submit" id="petsubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
		<?php
			if ($_SESSION["table"] == "resists"){
				$resedit = $PDO->query("SELECT * FROM resists ORDER BY ID");
				foreach ($resedit as $row){
					if ($row->ID == $_SESSION["id"]){
		?>
		<center><h1>Editer une résistance</h1></center>
		<form action="./resists.php" method="POST" id="resists">
			<div class="label">Personnage : </div>
			<select name="charares" form="resists" id="charares">
				<?php
					$chararesists = $PDO->query("SELECT * FROM characters ORDER BY ID");
					foreach ($chararesists as $charow){
						echo "<option value='" . $charow->ID . "'>" . $charow->pseudo . "</option>";
					}
				?>
			</select><br/>
			<div class="label">Nom de l'image : </div><input type="text" id="resistpic" name="resistpic" value="<?php echo $row->image_url; ?>"><br/>
			<div class="label">Type : </div><input type="text" id="restype" name="restype" value="<?php echo $row->restype; ?>" disabled><br/>
			<div class="label">Nom : </div><input type="text" id="resistname" name="resistname" value="<?php echo $row->name; ?>" disabled><br/>
			<div class="label">Niveau : </div><input type="number" step="1" min="1" max="99" id="resistlv" name="resistlv" value="<?php echo $row->level; ?>" disabled><br/>
			<div class="label">Résistance Feu : </div><input type="number" step="1" min="0" id="fireres" name="fireres" value="<?php echo $row->fireres; ?>"><br/>
			<div class="label">Resistance Eau : </div><input type="number" step="1" min="0" id="waterres" name="waterres" value="<?php echo $row->waterres; ?>"><br/>
			<div class="label">Resistance Lumière : </div><input type="number" step="1" min="0" id="lightres" name="lightres" value="<?php echo $row->lightres; ?>"><br/>
			<div class="label">Resistance Obscure : </div><input type="number" step="1" min="0" id="darkres" name="darkres" value="<?php echo $row->darkres; ?>"><br/>
			<center><input type="submit" value="Editer la résistance" name="submit" id="ressubmit">
			<input type="submit" value="Annuler les changements" name="submit" id="cancel"></center>
		</form>
		<?php }}} ?>
	</body>
</html>
