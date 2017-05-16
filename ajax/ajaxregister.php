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
?>
