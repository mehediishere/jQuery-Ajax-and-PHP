<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<p>-------//--</p>
	<form id="userForm">
		<input id="name" type="text" placeholder="Name">
		<input id="phone" type="text" placeholder="Phone">
		<button id="save" type="button">Save</button>
		<button id="saveContact" type="button">Save Contact</button>
	</form>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
		$(function() {
			$( "#save" ).click(function() {
				var name = $("#name").val();
				var phone = $("#phone").val();
				// console.log(name +" "+ phone);

				$.ajax({
					url: "actions/insert.php",
					type: "POST",
					data: {nameK:name, phoneK:phone, btn1:"btn"},
					success: function(data){
						if(data == 1){	
							console.log("Ok!");
							$("#userForm").trigger("reset");
						}else{
							console.log("Something went wrong!");
						}
					}
				});
			});

			$( "#saveContact" ).click(function() {
				var phone = $("#phone").val();

				$.ajax({
					url: "actions/insert.php",
					type: "POST",
					data: {phoneK:phone, btn2:"btn"},
					success: function(data){
						if(data == 1){	
							console.log("Phone Ok!");
							$("#userForm").trigger("reset");
						}else{
							console.log("Phone went wrong!");
						}
					}
				});
			});
		});
	</script>
</body>
</html>