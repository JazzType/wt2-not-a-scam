<?php
session_start();
	$server = 'localhost';
	$dbname = 'nomster';
	$query = '';
	$conn = new mysqli($server, 'root', 'password', $dbname);
	if($_POST['request'] == "1") {
		$query = 'select emailID from users where emailID = "' .$_POST['email']. '";';
		$result = $conn->query($query);
		if($result->num_rows == 0) {
			echo 'true';
		}
		else echo 'false';
	}
	
	elseif ($_POST['request'] == "2") {
		$query = 'select * from profiles where ' .$_POST['value']. '=' .$_POST['query']. ';';
		//echo $query;
		$result = $conn->query($query);
		//var_export($result);
		if($result->num_rows == 0) {
			echo 'No results to display.';
		}
		else {
			echo 
			'
			<table>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Cell Number</th>
					<th>Date of Birth</th>
					<th>CV</th>
				</tr>
				<tbody>
			';
			while ($row = $result->fetch_assoc()) {
				echo 
				'
				<tr>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['emailID'].'</td>
					<td>'.$row['cellno'].'</td>
					<td>'.$row['dob'].'</td>
					<td><a href="'.$row['cv_file'].'" target="_blank">View</a></td>
				</tr>
				';
			}
			echo 
			'
			</tbody>
		</table>
			';
		}
	}

	else {
		$query = 'select emailID from users where emailID = "' .$conn->real_escape_string($_POST['email']). '" and password = "' . sha1($_POST['password']). '";';
		$result = $conn->query($query);
		if($result->num_rows == 0) {
			echo 'false';
		}		
		else {
			echo 'true';
		}
	}
?>
