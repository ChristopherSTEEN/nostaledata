$(function(){
	$("#characters").on("submit", function(c){
		c.preventDefault()
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
				$("#globalerror").html(success);						
			}
		})
	})
	
	$("#equipements").on("submit", function(e){
		e.preventDefault()
		data = {
			chara: $("#charaequip").val(),
			img: $("#equippic").val(),
			type: $("#equiptype").val(),
			name: $("#equipname").val(),
			level: $("#equiplv").val(),
			rare: $("#equiprare").val(),
			upgrade: $("#equipup").val(),
			form: "equipements"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxregister.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success);
			}
		})
	})
	
	$("#jewelries").on("submit", function(j){
		j.preventDefault()
		data = {
			chara: $("#charajewel").val(),
			img: $("#jewelpic").val(),
			type: $("#jeweltype").val(),
			name: $("#jewelname").val(),
			level: $("#jewellv").val(),
			form: "jewelries"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxregister.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success);
			}
		})
	})
	
	$("#resists").on("submit", function(r){
		r.preventDefault()
		data = {
			chara: $("#charares").val(),
			img: $("#resistpic").val(),
			type: $("#resisttype").val(),
			name: $("#resistname").val(),
			level: $("#resistlv").val(),
			fire: $("#fireres").val(),
			water: $("#waterres").val(),
			light: $("#lightres").val(),
			dark: $("#darkres").val(),
			form: "resists"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxregister.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success);
			}
		})
	})
	
	$("#fairies").on("submit", function(f){
		f.preventDefault()
		data = {
			chara: $("#charafairy").val(),
			img: $("#fairiepic").val(),
			name: $("#fairiename").val(),
			fire: $("#fireelem").val(),
			water: $("#waterelem").val(),
			light: $("#lightelem").val(),
			dark: $("#darkelem").val(),
			form: "fairies"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxregister.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success);
			}
		})
	})
	
})