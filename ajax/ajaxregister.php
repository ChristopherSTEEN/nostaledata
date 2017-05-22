<?php
	require_once ("../config.php");
	
	if ($_POST["form"] == "characters"){
		if ($_POST["pseudo"] != "" && $_POST["job"] != "" && $_POST["server"] != "" && $_POST["battlelv"] != "" &&
		$_POST["battleprog"] != "" && $_POST["joblv"] != "" && $_POST["jobprog"] != "" && $_POST["herolv"] != "" &&
		$_POST["heroprog"] != "" && $_POST["gold"] != "" && $_POST["reput"] != ""){
			$charaexist = $PDO->prepare("SELECT COUNT(*) AS characount FROM characters WHERE pseudo=:username");
			$charaexist->bindValue(':username', $_POST["pseudo"]);
			$charaexist->execute();
			$characount = $charaexist->fetch();
			if ($characount->characount == 0){
				$charainsert = $PDO->prepare("INSERT INTO characters (pseudo, image_url, metier, server, battlelv, battleprog, 
				joblv, jobprog, herolv, heroprog, gold, reput) VALUES (:pseudo, :img, :job, :server, :battlelv, :battleprog,
				:joblv, :jobprog, :herolv, :heroprog, :gold, :reput)");
				$charainsert->bindValue(':pseudo', $_POST["pseudo"]);
				$charainsert->bindValue(':img', $_POST["img"]);
				$charainsert->bindValue(':job', $_POST["job"]);
				$charainsert->bindValue(':server', $_POST["server"]);
				$charainsert->bindValue(':battlelv', $_POST["battlelv"]);
				$charainsert->bindValue(':battleprog', $_POST["battleprog"]);
				$charainsert->bindValue(':joblv', $_POST["joblv"]);
				$charainsert->bindValue(':jobprog', $_POST["jobprog"]);
				$charainsert->bindValue(':herolv', $_POST["herolv"]);
				$charainsert->bindValue(':heroprog', $_POST["heroprog"]);
				$charainsert->bindValue(':gold', $_POST["gold"]);
				$charainsert->bindValue(':reput', $_POST["reput"]);
				if($charainsert->execute()){
					echo "<span id='success'>Enregistrement effectué</span>";
				} else {
					echo "<span id='error'>Erreur dans l'enregistrement</span>";
				}
			} else {
				echo "<span id='error'>Le personnage existe déjà</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "equipements" ){
		if ($_POST["chara"] != "" && $_POST["type"] != "" && $_POST["name"] != "" && $_POST["level"] != "" && $_POST["upgrade"] != ""){
			$equipinsert = $PDO->prepare("INSERT INTO equipments (character_id, image_url, equiptype, name, level, rare, upgrade) 
			VALUES (:charaid, :img, :equiptype, :name, :level, :rare, :upgrade)");
			$equipinsert->bindValue(':charaid', $_POST["chara"]);
			$equipinsert->bindValue(':img', $_POST["img"]);
			$equipinsert->bindValue(':equiptype', $_POST["type"]);
			$equipinsert->bindValue(':name', $_POST["name"]);
			$equipinsert->bindValue(':level', $_POST["level"]);
			$equipinsert->bindValue(':rare', $_POST["rare"]);
			$equipinsert->bindValue(':upgrade', $_POST["upgrade"]);
			if($equipinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "jewelries"){
		if ($_POST["chara"] != "" && $_POST["type"] != "" && $_POST["name"] != "" && $_POST["level"] != ""){
			$jewelinsert = $PDO->prepare("INSERT INTO jewelries (character_id, image_url, jeweltype, name, level) 
			VALUES (:chara, :img, :type, :name, :level)");
			$jewelinsert->bindValue(':chara', $_POST["chara"]);
			$jewelinsert->bindValue(':img', $_POST["img"]);
			$jewelinsert->bindValue(':type', $_POST["type"]);
			$jewelinsert->bindValue(':name', $_POST["name"]);
			$jewelinsert->bindValue(':level', $_POST["level"]);
			if($jewelinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}	
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "resists"){
		if ($_POST["chara"] != "" && $_POST["type"] != "" && $_POST["name"] != "" && $_POST["level"] != ""
		&& $_POST["fire"] != "" && $_POST["water"] != "" && $_POST["light"] != "" && $_POST["dark"] != ""){
			$resinsert = $PDO->prepare("INSERT INTO resists (character_id, image_url, restype, name, level, fireres, waterres,
			lightres, darkres) VALUES (:chara, :img, :type, :name, :level, :fire, :water, :light, :dark)");
			$resinsert->bindValue(':chara', $_POST["chara"]);
			$resinsert->bindValue(':img', $_POST["img"]);
			$resinsert->bindValue(':type', $_POST["type"]);
			$resinsert->bindValue(':name', $_POST["name"]);
			$resinsert->bindValue(':level', $_POST["level"]);
			$resinsert->bindValue(':fire', $_POST["fire"]);
			$resinsert->bindValue(':water', $_POST["water"]);
			$resinsert->bindValue(':light', $_POST["light"]);
			$resinsert->bindValue(':dark', $_POST["dark"]);
			if($resinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] ==  "fairies"){
		if ($_POST["chara"] != "" && $_POST["name"] != "" && $_POST["fire"] != "" && $_POST["water"] != "" 
		&& $_POST["light"] != "" && $_POST["dark"] != ""){
			$fairyinsert = $PDO->prepare("INSERT INTO fairies (character_id, image_url, name, fireelem, waterelem, lightelem, darkelem) 
			VALUES (:chara, :img, :name, :fire, :water, :light, :dark)");
			$fairyinsert->bindValue(':chara', $_POST["chara"]);
			$fairyinsert->bindValue(':img', $_POST["img"]);
			$fairyinsert->bindValue(':name', $_POST["name"]);
			$fairyinsert->bindValue(':fire', $_POST["fire"]);
			$fairyinsert->bindValue(':water', $_POST["water"]);
			$fairyinsert->bindValue(':light', $_POST["light"]);
			$fairyinsert->bindValue(':dark', $_POST["dark"]);
			if($fairyinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "cards"){
		if ($_POST["chara"] != "" && $_POST["name"] != "" && $_POST["number"] != "" && $_POST["level"] != "" 
		&& $_POST["upgrade"] != "" && $_POST["reinforcement"] != ""){
			$cardinsert = $PDO->prepare("INSERT INTO cards (character_id, image_url, cardnumber, name, level, upgrade, reinfrocement)
			VALUES (:chara, :img, :nb, :name, :level, :up, :rein)");
			$cardinsert->bindValue(':chara', $_POST["chara"]);
			$cardinsert->bindValue(':img', $_POST["img"]);
			$cardinsert->bindValue(':nb', $_POST["number"]);
			$cardinsert->bindValue(':name', $_POST["name"]);
			$cardinsert->bindValue(':level', $_POST["level"]);
			$cardinsert->bindValue(':up', $_POST["upgrade"]);
			$cardinsert->bindValue(':rein', $_POST["reinforcement"]);
			if($cardinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "partners"){
		if ($_POST["chara"] != "" && $_POST["type"] != "" && $_POST["name"] != "" && $_POST["level"] != ""){
			$partinsert = $PDO->prepare("INSERT INTO partners (character_id, image_url, parttype, name, level) 
			VALUES (:chara, :img, :type, :name, :level)");
			$partinsert->bindValue(':chara', $_POST["chara"]);
			$partinsert->bindValue(':img', $_POST["img"]);
			$partinsert->bindValue(':type', $_POST["type"]);
			$partinsert->bindValue(':name', $_POST["name"]);
			$partinsert->bindValue(':level', $_POST["level"]);
			if($partinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "pcards"){
		if ($_POST["chara"] != "" && $_POST["type"] != "" && $_POST["name"] != "" && $_POST["skillrk"] != ""){
			$pcardinsert = $PDO->prepare("INSERT INTO partnercards (character_id, image_url, pcardtype, name, skillsrank) 
			VALUES (:chara, :img, :type, :name, :skill)");
			$pcardinsert->bindValue(':chara', $_POST["chara"]);
			$pcardinsert->bindValue(':img', $_POST["img"]);
			$pcardinsert->bindValue(':type', $_POST["type"]);
			$pcardinsert->bindValue(':name', $_POST["name"]);
			$pcardinsert->bindValue(':skill', $_POST["skillrk"]);
			if($pcardinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["form"] == "pequips"){
		if ($_POST["part"] != "" && $_POST["type"] != "" && $_POST["level"] != "" && $_POST["upgrade"] != ""){
			$pequipinsert = $PDO->prepare("INSERT INTO partnerequipments (partner_id, pequiptype, level, rare, upgrade) 
			VALUES (:part, :type, :level, :rare, :upgrade)");
			$pequipinsert->bindValue(':part', $_POST["part"]);
			$pequipinsert->bindValue(':type', $_POST["type"]);
			$pequipinsert->bindValue(':level', $_POST["level"]);
			$pequipinsert->bindValue(':rare', $_POST["rare"]);
			$pequipinsert->bindValue(':upgrade', $_POST["upgrade"]);
			if($pequipinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!";
		}
	}
	
	if ($_POST["form"] == "pets"){
		if ($_POST["chara"] != "" && $_POST["name"] != "" && $_POST["level"] != "" && $_POST["atq"] != "" && $_POST["def"] != ""){
			$petinsert = $PDO->prepare("INSERT INTO pets (character_id, image_url, name, level, atqlv, deflv)
			VALUES (:chara, :img, :name, :level, :atq, :def)");
			$petinsert->bindValue(':chara', $_POST["chara"]);
			$petinsert->bindValue(':img', $_POST["img"]);
			$petinsert->bindValue(':name', $_POST["name"]);
			$petinsert->bindValue(':level', $_POST["level"]);
			$petinsert->bindValue(':atq', $_POST["atq"]);
			$petinsert->bindValue(':def', $_POST["def"]);
			if($petinsert->execute()){
				echo "<span id='success'>Enregistrement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
?>
