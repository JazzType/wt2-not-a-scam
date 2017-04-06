<?php 
include_once('template.php');
if(isset($_SESSION['userid'])) {
	header('Location: index.php');
}

?>
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
								window.location = 'index.php';
							}
							else {
								console.log(this.responseText);
								var errordiv = document.getElementById('errorlabel');
								errordiv.innerHTML = 'Incorrect credentials';
								errordiv.style.backgroundColor = '#ff6666';
							}
						}
					};
					xmlhttp.send(param);
				}
			}
		</script>
		<div class="container">
			<div class="row text-center">Login to continue<hr><br></div>
			<div class="row text-center">
			<div class="col-sm-4"></div>
				<div class="col-sm-4" style="background-color: #f1f2f1;vertical-align: middle;box-shadow: 0 0 15px rgba(0,0,0,0.15), 0 1px 3px rgba(0,0,0,0.15); padding-top: 10px;padding-bottom: 10px;">
						
					<div class="row">
						<label for="emailID">Email address</label><br>
						<input type="email" name="emailID" id="emailID" required placeholder="someone@example.com" autofocus class="input-lg">						
					</div><br>
					<div class="row">
						<label for="password">Password</label><br>
						<input type="password" name="password" id="password" required placeholder="Password" class="input-lg">
					</div><br>
					<div class="row">
						<div id="errorlabel" class="text-danger text-center"></div>						
					</div>
					<div class="row">
						<div class="col-4-1"></div>
						<div class="col-4-3">
							<input type="submit" name="submit" id="submitbtn" onclick="attempt()" class="btn btn-success">
							<input type="reset" name="reset" id="resetbtn" class="btn">
						</div>
					</div>	
					<hr>
					<button class="btn btn-block btn-info" onclick="window.location='register.php'">New User? Click here!</button>				
				</div>
			</div>
		</div>				
	</body>
</html>
