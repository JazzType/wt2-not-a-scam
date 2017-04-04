<?php
	session_start();
	$server = 'localhost';
	$dbname = 'nomster';
	$query = '';
	$conn = new mysqli($server, 'root', 'password', $dbname);
	if($conn -> connect_error) 
		die('Connection to server failed. Please reload the page.');
	$target_dir = 'uploads/';
	if(isset($_POST['submit'])) {
		$emailID = $_GET['email'];
		$target_file = $target_dir .basename($emailID) .'.pdf';
		extract($_POST);
		$query = 'update profiles set fname="' .$fname. '", lname="' .$lname. '", dob="' .$DoB. '", cellno="' .$cellno. '" where emailID="' .$emailID. '";';
		$result = $conn->query($query);
		if(move_uploaded_file($_FILES['cv']['tmp_name'], $target_file)) {
			$query = 'update profiles set cv_file="' .$target_file. '" where emailID = "' .$emailID. '";';
			$conn->query($query) or die('Unable to upload file.');
			header('location: search.php');
		}
	}
	 
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Update Profile - Nomster.com</title>
		<link rel="stylesheet" type="text/css" href="css/profile.css">
	</head>	
	<body>
		<div id="header">
				<img src="favicon.ico" width="24px" height="24px">
				Nomster.com
		</div>
		<div id="pageTitle">
			Your Profile
		</div>
		<div id="pagediv">
		<form method="POST" enctype="multipart/form-data" action="">
			Enter your full name:<br>
			<input type="text" name="fname" placeholder="First Name" oninvalid="this.style.borderColor = '#ff6666'" required autofocus>
			<input type="text" name="lname" oninvalid="this.style.borderColor = '#ff6666'" placeholder="Last Name" required><br>
			<label for="DoB">Enter your Date of Birth: </label><br>
			<input type="text" placeholder="YYYY-MM-DD" pattern="19[\d]{2}-[\d]{2}-[\d]{2}" name="DoB" id="DoB" min="1996-01-01" oninvalid="this.style.borderColor = '#ff6666'" required ><br>
			<label for="cellno">Cell Number:</label><br>
			<input type="text" name="cellno" id="cellno" pattern="[987][\d]{9}" oninvalid="this.style.borderColor = '#ff6666'" placeholder="For eg. 9123456780" required><br>
			<div id="errorlabel"></div>
			<label for="cv">Upload your CV</label>
			<input type="file" name="cv" type="application/pdf" id="cv" required oninvalid="this.style.borderColor = '#ff6666'"><br>
			<input type="submit" name="submit" id="submitbtn">
			<input type="reset" name="reset" id="resetbtn">
		</form>
		</div>
	</body>
</html>
