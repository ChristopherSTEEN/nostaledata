<?php
	require_once ("../config.php");
	
	if ($_POST["table"] == "characters"){
		$peselect = $PDO->query("SELECT p.character_id as pcid, pe.ID as peid FROM partnerequipments pe INNER JOIN partners p ON pe.partner_id = p.ID");
		foreach ($peselect as $pe){
			if ($pe->pcid == $_POST["id"]){
				$pedelete = $PDO->prepare("DELETE FROM partnerequipments WHERE ID = :id");
				$pedelete->bindValue(':id', $pe->peid);
				if ($pedelete->execute()){
				} else {
					echo "<span id='error'>Une erreur est survenue dans la suppression des équipmenets partenaires</span>";
				}
			}
		}
		$cadelete = $PDO->prepare("DELETE FROM cards WHERE character_id = :id");
		$cadelete->bindValue(':id', $_POST["id"]);
		if ($cadelete->execute()){
			$edelete = $PDO->prepare("DELETE FROM equipments WHERE character_id = :id");
			$edelete->bindValue(':id', $_POST["id"]);
			if ($edelete->execute()){
				$fdelete = $PDO->prepare("DELETE FROM fairies WHERE character_id = :id");
				$fdelete->bindValue(':id', $_POST["id"]);
				if ($fdelete->execute()){
					$jdelete = $PDO->prepare("DELETE FROM jewelries WHERE character_id = :id");
					$jdelete->bindValue(':id', $_POST["id"]);
					if ($jdelete->execute()){
						$padelete = $PDO->prepare("DELETE FROM partners WHERE character_id = :id");
						$padelete->bindValue(':id', $_POST["id"]);
						if ($padelete->execute()){
							$pdelete = $PDO->prepare("DELETE FROM pets WHERE character_id = :id");
							$pdelete->bindValue(':id', $_POST["id"]);
							if ($pdelete->execute()){
								$rdelete = $PDO->prepare("DELETE FROM resists WHERE character_id = :id");
								$rdelete->bindValue(':id', $_POST["id"]);
								if ($rdelete->execute()){
									$pcdelete = $PDO->prepare("DELETE FROM partnercards WHERE character_id = :id");
									$pcdelete->bindValue(':id', $_POST["id"]);
									if ($pcdelete->execute()){
										$charadelete = $PDO->prepare("DELETE FROM characters WHERE ID = :id");
										$charadelete->bindValue(':id', $_POST["id"]);
										if ($charadelete->execute()){
											echo "<span id='success'>Le personnage a bien été supprimé</span>";
										} else {
											echo "<span id='error'>Une erreur est survenue dans la suppression du personnage</span>";
										}
									} else {
										echo "<span id='error'>Une erreur est survenue dans la suppression des cartes pour partenaires</span>";
									}
								} else {
									echo "<span id='error'>Une erreur est survenue dans la suppression résistances</span>";
								}
							} else {
								echo "<span id='error'>Une erreur est survenue dans la suppression des Nosmates</span>";
							}
						} else {
							echo "<span id='error'>Une erreur est survenue dans la suppression des partenaires</span>";
						}
					} else {
						echo "<span id='error'>Une erreur est survenue dans la suppression des bijoux</span>";
					}
				} else {
					echo "<span id='error'>Une erreur est survenue dans la suppression des fées</span>";
				}
			} else {
				echo "<span id='error'>Une erreur est survenue dans la suppression des équipements</span>";
			}
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression des cartes SP</span>";
		}
	}
	
	if ($_POST["table"] == "cards"){
		$carddelete = $PDO->prepare("DELETE FROM cards WHERE ID = :id");
		$carddelete->bindValue(':id', $_POST["id"]);
		if ($carddelete->execute()){
			echo "<span id='success'>La carte SP a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression du personnage</span>";
		}
	}
?>
