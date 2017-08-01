<?php
	$servername = "127.0.0.1";
	// Examples of data for MYSQL database connection.
	$username = "seth";
	$password = "sethconnell";
	$db_name = "DataTest";
	$errormessage = "Email or password is incorrect.";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);
	
	// This function returns the saved password if user exists.
	function stored_password($email) {
		global $conn;
	    $stored_pass = mysqli_query($conn, "SELECT password FROM usertable WHERE email = '$email'");
		$val = "lol";
		while ($obj = $stored_pass->fetch_object()) {
			$val = $obj->password;
			return $val;
		}
	};
?>