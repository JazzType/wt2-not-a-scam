<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login - Nomster.com</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>		
		<script type="text/javascript">
			function attempt() {
				var email = document.getElementById('emailID');
				var password = document.getElementById('password');
				if(email.value.length == 0) return;
				else {
					var xmlhttp = new XMLHttpRequest();
					var param = 'email=' + email.value + '&password=' + password.value + '&request=3';
					xmlhttp.open("POST", 'email_availability.php', true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							if(this.responseText == "true") {
								window.location = 'form_page.php?email=' + email.value;
							}
							else {
								var errordiv = document.getElementById('errorlabel');
								errordiv.innerHTML = 'Address in use. Please try again';
								errordiv.style.backgroundColor = '#ff6666';
							}
						}
					};
					xmlhttp.send(param);
				}
			}
		</script>
		<div id="header">
			<img src="favicon.ico" width="24px" height="24px">
			Nomster.com
			</div>
		<div id="pageTitle">
			Login to your profile
		</div>
		<div id="pagediv">
			
			<label for="emailID">Registered E-Mail address</label><br>
				<input type="email" name="emailID" id="emailID" required placeholder="someone@example.com" autofocus><br>
				<label for="password">Password</label><br>
				<input type="password" name="password" id="password" required placeholder="Password">
				<div id="errorlabel"></div><br>
				<input type="submit" name="submit" id="submitbtn" onclick="attempt()">
				<input type="reset" name="reset" id="resetbtn">
			
		</div>
	</body>
</html>
