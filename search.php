<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<title></title>
	</head>
	<body>
		<script type="text/javascript">
			var term;
			function showQueryBox() {
				document.getElementById('query').hidden = false;
			}
				function query() {
					var xmlhttp = new XMLHttpRequest();
					var params = 'value=' + document.getElementById('terms').value + '&query="' + document.getElementById('query').value + '"&request=2';
					xmlhttp.open("POST", 'email_availability.php', true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.onreadystatechange = function() {
						if(this.readyState == 4 && this.status == 200) {
							console.log(this.responseText);
							document.getElementById('response').innerHTML = this.responseText;
						}
					}
					xmlhttp.send(params);				
				}
			
		</script>
		<div id="header">
			<img src="favicon.ico" width="24px" height="24px">
			Nomster.com
			</div>
		<div id="pageTitle">
			Search Users
		</div>
		
		<div id="pagediv">
			<label for="terms">Query on </label>
			<select id="terms">
				<option value="fname">First Name</option>
				<option value="lname">Last Name</option>
				<option value="emailID">Email Address</option>
				<option value="dob">Date of Birth</option>
				<option value="cellno">Cell Number</option>			
			</select>
			<input type="search" name="query" id="query" hidden="true" onblur="query()">
			<button name="selectQuery" id="goBtn" onclick="showQueryBox()">Go</button><br>
				<div id="response"></div>
		</div>
	</body>
</html>
