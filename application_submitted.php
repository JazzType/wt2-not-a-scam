<?php
	$server = 'localhost';
	$dbname = 'nomster';
	$query = '';
	$conn = new mysqli($server, 'root', '', $dbname);
	if($conn -> connect_error) 
		die('Connection to server failed. Please reload the page.');

	$applicant_name = $_POST['fname'] . ' '. $_POST['mname'] . ' '. $_POST['lname'];
	$applicant_emailid = $_POST['emailID'];
	$applicant_cellno = $_POST['mobileno'];
	$query = 'select emailID,cellno from users where emailID = ' .$applicant_emailid. ' and cellno = ' .$applicant_cellno.';';
	$email_query = $conn->query($query);
	$applicant_dob = $_POST['DoB'];
	if($email_query->num_rows == 0) {
		$query = 'insert into users values(' .$applicant_name. ',' .$applicant_emailid. ',' .$applicant_dob. ',' .$applicant_cellno. ',NULL,' .date('j F Y'). ');';
		$insert_entry_result = $conn->query($query);
		if($insert_entry_result == FALSE)  {
			die('Failed to insert entry.');
		}
	}
	elseif ($email_query->num_rows == 1) {
		
	}
?>
