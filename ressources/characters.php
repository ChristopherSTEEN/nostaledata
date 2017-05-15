<?php
	include_once ("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gestions des personnages</title>
		<link rel="stylesheet" href="../css/default.css">
		<link rel="icon" type="image/png" href="../img/icone.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="../js/script.js"></script>
		<script>
			$(function(){
				$("#characters").on("submit", function(e){
					e.preventDefault()
					data = {
						pseudo: $("#username").val(),
						img: $("#charapic").val(),
						job: $("#charajob").val(),
						server: $("#charaserv").val(),
						battlelv: $("#battlelv").val(),
						battleprog: $("#battleprog").val(),
						joblv: $("#joblv").val(),
						jobprog: $("#jobprog").val(),
						herolv: $("#herolv").val(),
						heroprog: $("#heroprog").val(),
						gold: $("#gold").val(),
						reput: $("#reput").val(),
						form: "characters"
					}
					$.ajax({
						method: "POST",
						url: "../ajax/ajaxregister.php",
						data : data,
						success: function(success){
							//if (success == true){
								//$("#charaerror").html("<span style='color: green'>Le personnage a bien été enregistré.</span>")
							//} else {
								//$("#charaerror").html("<span style='color: red'>Une erreur est survenue!</span>")
							//}
							$("#charaerror").html(success);						}
					})
				})
			})
		</script>
	</head>
	<body>
		<?php include_once ("./menu.php"); ?>
		<div id="charaerror"></div>
		<form action="./characters.php" method="POST" id="characters">
			<div class="label">Pseudo : </div><input type="text" id="username" name="username"><br/>
			<div class="label">Image : </div><input type="file" id="charapic" name="charapic"><br/>
			<div class="label">Métier : </div>
			<select name="job" form="characters" id="charajob">
				<option value="Aventurier">Aventurier</option>
				<option value="Escrimeur">Escrimeur</option>
				<option value="Archer">Archer</option>
				<option value="Mage">Mage</option>
			</select><br/>
			<div class="label">Serveur : </div>
			<select name="server" form="characters" id="charaserv">
				<option value="1">1 (Océanie)</option>
				<option value="2">2 (Solare)</option>
				<option value="3">3 (Nova)</option>
				<option value="4">4 (Nexus)</option>
			</select><br/>
			<div class="label">Nv Combat : </div><input type="number" step="1" min="1" max="99" id="battlelv" name="battlelv"><br/>
			<div class="label">Progression Cb : </div><input type="number" step="0.01" min="0" max="100" id="battleprog" name="battleprog"><br/>
			<div class="label">Nv Métier : </div><input type="number" step="1" min="1" max="80" id="joblv" name="joblv"><br/>
			<div class="label">Progression Mt : </div><input type="number" step="0.01" min="0" max="100" id="jobprog" name="jobprog"><br/>
			<div class="label">Nv Héroïque : </div><input type="number" step="1" min="0" max="30" id="herolv" name="herolv"><br/>
			<div class="label">Progression Hr : </div><input type="number" step="0.01" min="0" max="100" id="heroprog" name="heroprog"><br/>
			<div class="label">Or : </div><input type="number" step="1" min="0" id="gold" name="gold"><br/>
			<div class="label">Réputation : </div><input type="number" step="1" min="0" id="reput" name="reput"><br/>
			<center><input type="submit" value="Enregistrer le personnage" name="submit" id="submit"></center>
		</form>
		<table id="charatable">
			<thead>
				<tr>
					<td>ID</td>
					<td>Pseudo</td>
					<td>Img name</td>
					<td>Métier</td>
					<td>Serveur</td>
					<td>Nv Comb</td>
					<td>Pr Comb</td>
					<td>Nv Job</td>
					<td>Pr Job</td>
					<td>Nv Her</td>
					<td>Pr Her</td>
					<td>Or</td>
					<td>Reput</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
