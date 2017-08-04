<?php
	
	$signup_name = "name";
	$signup_password1 = "password";
	$signup_password2 = "verifypassword";
	$signup_email = "email";
	$signup_teacher = "n";

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
	
	// Sends sql to to server.
	function send_query($connection, $sql) {
			if (mysqli_query($connection, $sql)){
			} else{
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
			}
		};

	// Encrypting password and email for database.
	function hashpassword($oldpassword) {
		$oldpassword = password_hash($oldpassword, PASSWORD_BCRYPT);
		return $oldpassword;
	};
	// This function creates a table if it does not already exist.
	// Great for testing.
	function createTableIfDoesNotExist(){
		global $conn;
		$sql = "CREATE TABLE IF NOT EXISTS usertable(
		    email text NOT NULL,
		    password text NOT NULL,
		    name text NOT NULL,
			is_teacher text NOT NULL,
		    id MEDIUMINT NOT NULL AUTO_INCREMENT,
		    primary key (id)
		)";
		send_query($conn, $sql);
	}
?>