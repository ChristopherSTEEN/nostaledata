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
	
	$("#cards").on("submit", function(c){
		c.preventDefault()
		data = {
			chara: $("#characards").val(),
			img: $("#cardpic").val(),
			name: $("#cardname").val(),
			number: $("#cardnb").val(),
			level: $("#cardlv").val(),
			upgrade: $("#cardup").val(),
			reinforcement: $("#cardreinf").val(),
			form: "cards"
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
	
	$("#partners").on("submit", function(p){
		p.preventDefault()
		data = {
			chara: $("#charapartners").val(),
			img: $("#partnerpic").val(),
			type: $("#parttype").val(),
			name: $("#partname").val(),
			level: $("#partlv").val(),
			form: "partners"
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
	
	$("#pcards").on("submit", function(p){
		p.preventDefault()
		data = {
			chara: $("#charapcards").val(),
			img: $("#pcardpic").val(),
			type: $("#pcardtype").val(),
			name: $("#pcardname").val(),
			skillrk: $("#skillrk").val(),
			form: "pcards"
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
	
	$("#partequips").on("submit", function(p){
		p.preventDefault()
		data = {
			part: $("#partequip").val(),
			type: $("#pequiptype").val(),
			level: $("#pequiplv").val(),
			rare: $("#pequiprare").val(),
			upgrade: $("#pequipup").val(),
			form: "pequips"
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
	
	$("#pets").on("submit", function(p){
		p.preventDefault()
		data = {
			chara: $("#charapets").val(),
			img: $("#petpic").val(),
			name: $("#petname").val(),
			level: $("#petlv").val(),
			atq: $("#attlv").val(),
			def: $("#deflv").val(),
			form: "pets"
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
	
	$(".edit").click(function(e){
		e.preventDefault()
		data = {
			id: parseInt($(this).attr("name")),
			table: $(this).attr("href"),
			action: "edit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success)
				window.location.replace("../ressources/edit.php").delay(10000)
			}
		})
	})
	
	$(".delete").click(function(d){
		d.preventDefault()
		data = {
			id: parseInt($(this).attr("name")),
			table: $(this).attr("href")
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxdelete.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success)
			}
		})
	})
	
	$("#cancel").click(function(c){
		c.preventDefault()
		data = {
			action: "cancel"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				$("#globalerror").html(success)
				window.history.back().delay(10000)
			}
		})
	})
	
	$("#avensubmit").click(function(s){
		s.preventDefault()
		data = {
			metier: $("#charajob").val(),
			img: $("#charapic").val(),
			battlelv: $("#battlelv").val(),
			battleprog: $("#battleprog").val(),
			joblv: $("#joblv").val(),
			jobprog: $("#jobprog").val(),
			herolv: $("#herolv").val(),
			heroprog: $("#heroprog").val(),
			gold: $("#gold").val(),
			reput: $("#reput").val(),
			action: "avenedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/characters.php").delay(10000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#charasubmit").click(function(s){
		s.preventDefault()
		data = {
			img: $("#charapic").val(),
			battlelv: $("#battlelv").val(),
			battleprog: $("#battleprog").val(),
			joblv: $("#joblv").val(),
			jobprog: $("#jobprog").val(),
			herolv: $("#herolv").val(),
			heroprog: $("#heroprog").val(),
			gold: $("#gold").val(),
			reput: $("#reput").val(),
			action: "charaedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/characters.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#cardsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#characards").val(),
			img: $("#cardpic").val(),
			level: $("#cardlv").val(),
			upgrade: $("#cardup").val(),
			reinf: $("#cardreinf").val(),
			action: "cardedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/cards.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#equipsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charaequip").val(),
			img: $("#equippic").val(),
			rare: $("#equiprare").val(),
			upgrade: $("#equipup").val(),
			action: "equipedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/equipements.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#fairiesubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charafairie").val(),
			img: $("#fairiepic").val(),
			fire: $("#fireelem").val(),
			water: $("#waterelem").val(),
			light: $("#lightelem").val(),
			dark: $("#darkelem").val(),
			action: "fairieedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/fairies.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#jewelsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charajewel").val(),
			img: $("#jewelpic").val(),
			action: "jeweledit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/jewelries.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#pcardsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charapcards").val(),
			img: $("#pcardpic").val(),
			skillrk: $("#skillrk").val(),
			action: "pcardedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/partnercards.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#pequipsubmit").click(function(s){
		s.preventDefault()
		data = {
			level: $("#pequiplv").val(),
			rare: $("#pequiprare").val(),
			upgrade: $("#pequipup").val(),
			action: "pequipedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/partnerequips.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#partsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charapartners").val(),
			img: $("#partnerpic").val(),
			level: $("#partlv").val(),
			action: "partedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/partners.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#petsubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charapets").val(),
			img: $("#petpic").val(),
			name: $("#petname").val(),
			level: $("#petlv").val(),
			atqlv: $("#attlv").val(),
			deflv: $("#deflv").val(),
			action: "petedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/pets.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
	
	$("#ressubmit").click(function(s){
		s.preventDefault()
		data = {
			chara: $("#charares").val(),
			img: $("#resistpic").val(),
			fire: $("#fireres").val(),
			water: $("#waterres").val(),
			light: $("#lightres").val(),
			dark: $("#darkres").val(),
			action: "resedit"
		}
		$.ajax({
			method: "POST",
			url: "../ajax/ajaxedit.php",
			data : data,
			success: function(success){
				if (success == "<span id='success'>Modifications effectuées</span>"){
					$("#globalerror").html(success)
					window.location.replace("../ressources/resists.php").delay(2000)
				} else {
					$("#globalerror").html(success)
				}
			}
		})
	})
})
