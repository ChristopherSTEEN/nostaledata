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
			echo "<span id='success'>La carte SP a bien été supprimée</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de la carte SP/span>";
		}
	}
	
	if ($_POST["table"] == "equipements"){
		$equipdelete = $PDO->prepare("DELETE FROM equipments WHERE ID = :id");
		$equipdelete->bindValue(':id', $_POST["id"]);
		if ($equipdelete->execute()){
			echo "<span id='success'>L'équipement a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de l'équipement</span>";
		}
	}
	
	if ($_POST["table"] == "fairies"){
		$fairiedelete = $PDO->prepare("DELETE FROM fairies WHERE ID = :id");
		$fairiedelete->bindValue(':id', $_POST["id"]);
		if ($fairiedelete->execute()){
			echo "<span id='success'>La fée a bien été supprimée</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de la fée</span>";
		}
	}
	
	if ($_POST["table"] == "jewelries"){
		$jeweldelete = $PDO->prepare("DELETE FROM jewelries WHERE ID = :id");
		$jeweldelete->bindValue(':id', $_POST["id"]);
		if ($jeweldelete->execute()){
			echo "<span id='success'>Le bijou a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression du bijoux</span>";
		}
	}
	
	if ($_POST["table"] == "pcards"){
		$pcarddelete = $PDO->prepare("DELETE FROM partnercards WHERE ID = :id");
		$pcarddelete->bindValue(':id', $_POST["id"]);
		if ($pcarddelete->execute()){
			echo "<span id='success'>La carte pour partenaire a bien été supprimée</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de la carte pour partenaire</span>";
		}
	}
	
	if ($_POST["table"] == "pequips"){
		$pequipdelete = $PDO->prepare("DELETE FROM partnerequipments WHERE ID = :id");
		$pequipdelete->bindValue(':id', $_POST["id"]);
		if ($pequipdelete->execute()){
			echo "<span id='success'>L'équipement pour partenaire a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de la carte pour partenaire</span>";
		}
	}
	
	if ($_POST["table"] == "partners"){
		$pequipdelete = $PDO->prepare("DELETE FROM partnerequipments WHERE partner_id=:id");
		$pequipdelete->bindValue(':id', $_POST["id"]);
		if ($pequipdelete->execute()){
			$partdelete = $PDO->prepare("DELETE FROM partners WHERE ID=:id");
			$partdelete->bindValue(':id', $_POST["id"]);
			if ($partdelete->execute()){
				echo "<span id='success'>Le partenaire a bien été supprimé</span>";
			} else {
				echo "<span id='error'>Une erreur est survenue dans la suppression du partenaire</span>";
			}
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de l'équipement du partenaire</span>";
		}
	}
	
	if ($_POST["table"] == "pets"){
		$petdelete = $PDO->prepare("DELETE FROM pets WHERE ID = :id");
		$petdelete->bindValue(':id', $_POST["id"]);
		if ($petdelete->execute()){
			echo "<span id='success'>Le nosmate a bien été supprimé</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression du nosmate</span>";
		}
	}
	
	if ($_POST["table"] == "resists"){
		$resistdelete = $PDO->prepare("DELETE FROM resists WHERE ID = :id");
		$resistdelete->bindValue(':id', $_POST["id"]);
		if ($resistdelete->execute()){
			echo "<span id='success'>La résistance a bien été supprimée</span>";
		} else {
			echo "<span id='error'>Une erreur est survenue dans la suppression de la résistance</span>";
		}
	}
?>
