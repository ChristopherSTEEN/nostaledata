<?php
	require_once ("../config.php");

	if ($_POST["action"] == "edit"){
		$_SESSION["id"] = $_POST["id"];
		$_SESSION["table"] = $_POST["table"];
		echo "Redirection dans 2 secondes...";
	}
	
	if ($_POST["action"] == "cancel"){
		session_destroy();
		echo "Annulation des changements...";
	}
	
	if ($_POST["action"] == "charaedit"){
		if ($_POST["battlelv"] != "" && $_POST["battleprog"] != "" && $_POST["joblv"] != "" && $_POST["jobprog"] != "" 
		&& $_POST["herolv"] != "" && $_POST["heroprog"] != "" && $_POST["gold"] != "" && $_POST["reput"] != ""){
			$charaupdate = $PDO->prepare("UPDATE characters SET image_url=:img, battlelv=:battlelv, battleprog=:battleprog, joblv=:joblv,
			jobprog=:jobprog, herolv=:herolv, heroprog=:heroprog, gold=:gold, reput=:reput WHERE ID=:id");
			$charaupdate->bindValue(':img', $_POST["img"]);
			$charaupdate->bindValue(':battlelv', $_POST["battlelv"]);
			$charaupdate->bindValue(':battleprog', $_POST["battleprog"]);
			$charaupdate->bindValue(':joblv', $_POST["joblv"]);
			$charaupdate->bindValue(':jobprog', $_POST["jobprog"]);
			$charaupdate->bindValue(':herolv', $_POST["herolv"]);
			$charaupdate->bindValue(':heroprog', $_POST["heroprog"]);
			$charaupdate->bindValue(':gold', $_POST["gold"]);
			$charaupdate->bindValue(':reput', $_POST["reput"]);
			$charaupdate->bindValue(':id', $_SESSION["id"]);
			if($charaupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "aventedit"){
		if ($_POST["metier"] != "" && $_POST["battlelv"] != "" && $_POST["battleprog"] != "" && $_POST["joblv"] != "" 
		&& $_POST["jobprog"] != "" && $_POST["herolv"] != "" && $_POST["heroprog"] != "" && $_POST["gold"] != "" 
		&& $_POST["reput"] != ""){
			$avenupdate = $PDO->prepare("UPDATE characters SET image_url=:img, metier=:job, battlelv=:battlelv, battleprog=:battleprog, joblv=:joblv,
			jobprog=:jobprog, herolv=:herolv, heroprog=:heroprog, gold=:gold, reput=:reput WHERE ID=:id");
			$avenupdate->bindValue(':img', $_POST["img"]);
			$avenupdate->bindValue(':job', $_POST["metier"]);
			$avenupdate->bindValue(':battlelv', $_POST["battlelv"]);
			$avenupdate->bindValue(':battleprog', $_POST["battleprog"]);
			$avenupdate->bindValue(':joblv', $_POST["joblv"]);
			$avenupdate->bindValue(':jobprog', $_POST["jobprog"]);
			$avenupdate->bindValue(':herolv', $_POST["herolv"]);
			$avenupdate->bindValue(':heroprog', $_POST["heroprog"]);
			$avenupdate->bindValue(':gold', $_POST["gold"]);
			$avenupdate->bindValue(':reput', $_POST["reput"]);
			$avenupdate->bindValue(':id', $_SESSION["id"]);
			if($avenupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "cardedit"){
		if ($_POST["chara"] != "" && $_POST["level"] != "" && $_POST["upgrade"] != "" && $_POST["reinf"] != ""){
			$cardupdate = $PDO->prepare("UPDATE cards SET character_id=:chara, image_url=:img, level=:level, upgrade=:upgrade, reinforcement=:reinf WHERE ID=:id");
			$cardupdate->bindValue(':chara', $_POST["chara"]);
			$cardupdate->bindValue(':img', $_POST["img"]);
			$cardupdate->bindValue(':level', $_POST["level"]);
			$cardupdate->bindValue(':upgrade', $_POST["upgrade"]);
			$cardupdate->bindValue(':reinf', $_POST["reinf"]);
			$cardupdate->bindValue(':id', $_SESSION["id"]);
			if($cardupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "equipedit"){
		if ($_POST["chara"] != "" && $_POST["rare"] != "" && $_POST["upgrade"] != ""){
			$equipupdate = $PDO->prepare("UPDATE equipments SET character_id=:chara, image_url=:img, rare=:rare, upgrade=:up WHERE ID=:id");
			$equipupdate->bindValue(':chara', $_POST["chara"]);
			$equipupdate->bindValue(':img', $_POST["img"]);
			$equipupdate->bindValue(':rare', $_POST["rare"]);
			$equipupdate->bindValue(':up', $_POST["upgrade"]);
			$equipupdate->bindValue(':id', $_SESSION["id"]);
			if($cardupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "fairieedit"){
		if ($_POST["chara"] != "" && $_POST["fire"] != "" && $_POST["water"] != "" && $_POST["light"] != "" && $_POST["dark"] != ""){
			$fairieupdate = $PDO->prepare("UPDATE fairies SET character_id=:chara, image_url=:img, fireelem=:fire, waterelem=:water, lightelem=:light, darkelem=:dark WHERE ID=:id");
			$fairieupdate->bindValue(':chara', $_POST["chara"]);
			$fairieupdate->bindValue(':img', $_POST["img"]);
			$fairieupdate->bindValue(':fire', $_POST["fire"]);
			$fairieupdate->bindValue(':water', $_POST["water"]);
			$fairieupdate->bindValue(':light', $_POST["light"]);
			$fairieupdate->bindValue(':dark', $_POST["dark"]);
			$fairieupdate->bindValue(':id', $_SESSION["id"]);
			if($fairieupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "jeweledit"){
		if ($_POST["chara"] != ""){
			$jewelupdate = $PDO->prepare("UPDATE jewelries SET character_id=:chara, image_url=:img WHERE ID=:id");
			$jewelupdate->bindValue(':chara', $_POST["chara"]);
			$jewelupdate->bindValue(':img', $_POST["img"]);
			$jewelupdate->bindValue(':id', $_SESSION["id"]);
			if($jewelupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "pcardedit"){
		if ($_POST["chara"] != "" && $_POST["skillrk"] != ""){
			$pcardupdate = $PDO->prepare("UPDATE partnercards SET character_id=:chara, image_url=:img, skillsrank=:skillrk WHERE ID=:id");
			$pcardupdate->bindValue(':chara', $_POST["chara"]);
			$pcardupdate->bindValue(':img', $_POST["img"]);
			$pcardupdate->bindValue(':skillrk', $_POST["skillrk"]);
			$pcardupdate->bindValue(':id', $_SESSION["id"]);
			if($pcardupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
	
	if ($_POST["action"] == "pequipedit"){
		if ($_POST["level"] != "" && $_POST["upgrade"] != ""){
			$pequipupdate = $PDO->prepare("UPDATE partnerequipments SET level=:level, rare=:rare, upgrade=:upgrade WHERE ID=:id");
			$pequipupdate->bindValue(':level', $_POST["level"]);
			$pequipupdate->bindValue(':rare', $_POST["rare"]);
			$pequipupdate->bindValue(':upgrade', $_POST["upgrade"]);
			$pequipupdate->bindValue(':id', $_SESSION["id"]);
			if($pequipupdate->execute()){
				session_destroy();
				echo "<span id='success'>Changement effectué</span>";
			} else {
				echo "<span id='error'>Erreur dans l'enregistrement</span>";
			}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}	
	}
?>
