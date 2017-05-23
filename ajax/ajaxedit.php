<?php
	require_once ("../config.php");

	if ($_POST["action"] == "edit"){
		$_SESSION["id"] = $_POST["id"];
		$_SESSION["table"] = $_POST["table"];
		echo "Redirection dans 2 secondes...";
	}
	
	if ($_POST["action"] == "charaedit"){
		if ($_POST["battlelv"] != "" && $_POST["battleprog"] != "" && $_POST["joblv"] != "" && $_POST["jobprog"] != "" 
		&& $_POST["herolv"] != "" && $_POST["heroprog"] != "" && $_POST["gold"] != "" && $_POST["reput"] != ""){
			$charaupdate = $PDO->prepare("UPDATE characters SET battlelv=:battlelv, battleprog=:battleprog, joblv=:joblv,
			jobprog=:jobprog, herolv=:herolv, heroprog=:heroprog, gold=:gold, reput=:reput WHERE ID=:id");
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
					echo "<span id='success'>Enregistrement effectué</span>";
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
			$avenupdate = $PDO->prepare("UPDATE characters SET metier=:job, battlelv=:battlelv, battleprog=:battleprog, joblv=:joblv,
			jobprog=:jobprog, herolv=:herolv, heroprog=:heroprog, gold=:gold, reput=:reput WHERE ID=:id");
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
					echo "<span id='success'>Enregistrement effectué</span>";
				} else {
					echo "<span id='error'>Erreur dans l'enregistrement</span>";
				}
		} else {
			echo "<span id='error'>Les champs doivent être rempli!<br/>Le champ image n'est pas obligatoire.</span>";
		}
	}
?>
