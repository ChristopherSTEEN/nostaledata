<?php
	require_once ("../config.php");
	
	if ($_POST["table"] == "characters"){
		$charadelete = $PDO->prepare ("DELETE FROM ca, c, e, f, j, pc, pe, pa, p, r USING cards ca, characters c, equipments e, 
		fairies f, jewelries j, partnercards pc, partnerequipments pe, partners pa, pets p, resists r 
		WHERE ca.character_id = c.id AND e.character_id = c.id AND f.character_id = c.id AND j.character_id = c.id 
		AND pc.character_id = c.id AND pa.character_id = c.id AND p.character_id = c.id AND r.character_id = c.id 
		AND pe.partner_id = pa.id AND c.id = :id");
		$charadelete->bindValue(':id', $_POST["id"]);
		if ($charadelete->execute()){
			echo "<span id='success'>Le personnage a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Erreur dans l'enregistrement</span>";
		}
	}
?>
