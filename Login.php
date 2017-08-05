<?php
    session_start();
    if (isset($_SESSION['id'])) {
		echo "<a href='signout.php'>Logout</a>";
		session_write_close();
		}
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
	require('functions.php');
	
    // Force HTTPS for security
    if($_SERVER["HTTPS"] != "on") {
        $pageURL = "Location: https://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        header($pageURL);
    }
    
    // Checks if password or email is empty.
    if (isset($_POST["password"]) && isset($_POST["email"])) {
		$typed_password = $_POST["password"];
		$typed_email = $_POST["email"];
		
		// Encrypting password for database.
    
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		// Check to see if login is valid.
		if (stored_password($typed_email)) {
            if (password_verify($typed_password, stored_password($typed_email))) {
        		$user_id = mysqli_query($conn, "SELECT id FROM usertable WHERE email='$typed_email'");
        		$_SESSION['id'] = $user_id;
        		mysqli_close($conn);
            }
			else {
				 echo "Password incorrect.";
			}
		 }
		else {
			echo "Account doesn't exist.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<style>
		input {
			color: black;
		}
	*{
		text-align: center;
		color: white;
	}
	.searchbox {
		margin: auto;
		margin-bottom: 20px;
		height: 20px;
		border-radius: 15px;
		border-width: 1px 1px 1px 1px;
		text-align: center;
		outline: none;
		}
	html {
		height: 100%
	}

	body {
		width: 100%;
		height: 100%;
		background-color: #25AADF;
	}

	.message {
		text-align: center;
		font-family: 'Josefin Sans', sans-serif;
		font-size: 40px;
		color: white;
	}

	.boxy {
		width: 35%;
		margin: auto;
		margin-top: 15%;
		background-color: #4CC2EF;
		-webkit-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		-moz-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
	}
	.results {
		width: 100%;
		margin: auto;
		background-color: white;
		color: #4CC2EF;
	}

	.searchbutton {
		width: 100px;
		padding-bottom: 5px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 30px;
		line-height: 30px;
		margin-top: 25px;
	}

	.searchbutton:hover {
		border-color: white;
		color: white;
		background-color: #4CC2EF;
	}

	.catagory {
		font-size: 30px;
		font-family: sans-serif;
	}

	.value {
		font-size: 15px;
		font-family: sans-serif;
	}
	a {
		text-decoration: underline;
	}
	</style>
<title>Student Login</title>
</head>
<body>
    <style>
        *{
            text-align: center;
        }
    </style>
	<div class = "boxy">
	<br>
	<h1 class = "message">Sign In As Student</h1>
    <br>
    <form action="Login.php" method="POST">
    Email: <input type="text" name="email" class = "searchbox"><br>
    Password: <input type="text" name="password" class = "searchbox"><br>
    <input type="submit" class = "searchbutton">
	<br>
    </form>
	</div>
</body>

</html>
