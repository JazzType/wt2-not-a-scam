<?php
	include_once('template.php');
	if(isset($_SESSION['userid']) && $_POST['email'] == $_SESSION['userid']) {
		header('Location: index.php');
	}
	$server = 'localhost';
	$dbname = 'nomster';
	$query = '';
	$conn = new mysqli($server, 'root', 'password', $dbname);
	if($conn -> connect_error) 
		die('Connection to server failed. Please reload the page.');
	if(isset($_POST['submit'])) {
		$password = sha1($_POST['password']);
		$query = 'insert into users(emailID, password) values ("' .$_POST['email']. '", "' .sha1($_POST['password']). '");';
		$result = $conn->query($query);
		$conn->query('insert into profiles(emailID, fname, lname, dob, cellno) values("' .$_POST['email']. '", "ph", "ph", "1970-01-01", "9123456780")');
		header("location: login_page.php");
	}
?>
<body>
		<script type="text/javascript">
			function toggle_password(value) {
				document.getElementById('password').disabled = value;
				var submt = document.getElementById('submit');
				submt.disabled = value;				
			}
			function check_availability(obj) {
				if(obj.value.length == 0) return;
				else {
					var xmlhttp = new XMLHttpRequest();
					var param = 'email=' + document.getElementById('email').value + '&request=1';
					xmlhttp.open("POST", 'email_availability.php', true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							if(this.responseText == "true") {
								toggle_password(false);
								document.getElementById('email').style.borderColor = '#70db70';
								var errordiv = document.getElementById('errorlabel');
								errordiv.innerHTML = 'Address not in use.';
								errordiv.className = 'text-success';
							}
							else {
								toggle_password(true);
								document.getElementById('email').style.borderColor = '#ff6666';
								var errordiv = document.getElementById('errorlabel');
								errordiv.innerHTML = 'Address in use. Please try again';
								errordiv.className = 'text-danger';
							}
						}
					};
					xmlhttp.send(param);
				}
			}
		</script>
		<div class="container">
			<div class="row text-center">Register for a NAS Account<hr><br></div>
			<div class="row text-center">
				<div class="col-sm-4"></div>
				<div class="col-sm-4" style="background-color: #f1f2f1;vertical-align: middle;box-shadow: 0 0 15px rgba(0,0,0,0.15), 0 1px 3px rgba(0,0,0,0.15); padding-top: 10px;padding-bottom: 10px;">
				<form method="post">
					<div class="row">
					<label for="email">Email Address</label><br>
					<input type="email" name="email" id="email" required oninvalid="this.style.borderColor = '#ff6666'" onblur="check_availability(this)" placeholder="someone@example.com" class="input-lg"><br>
					</div><br>
					<div class="row">
						<label for="password">Choose a password</label><br>
						<input type="password" placeholder="Password" name="password" id="password" required class="input-lg"><br>
					</div>
					<div class="row">
						<div id="errorlabel"></div><br>
						<input type="submit" name="submit" id="submit" class="btn btn-success">
					</div>
			</form>
		</div>
	</body>
</html>
