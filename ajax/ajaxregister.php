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
			echo "<span id='error'>Un champ est vide</span>";
		}
	}
?>
