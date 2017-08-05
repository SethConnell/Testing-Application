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
    
    // If everything is in order, continue.
    if (isset($_POST[$signup_name]) && isset($_POST[$signup_email]) && isset($_POST[$signup_password1]) && isset($_POST[$signup_password2]) && $_POST[$signup_password1] == $_POST[$signup_password2]) {
		$name = $_POST[$signup_name];
		$email = $_POST[$signup_email];
		$password1 = $_POST[$signup_password1];
		$password2 = $_POST[$signup_password2];
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		// Check to see if login is valid.
		$result = mysqli_query($conn, "SELECT * FROM usertable WHERE email='$email'");
		if (!mysqli_num_rows($result)) {
			createTableIfDoesNotExist();
			$sql = "INSERT INTO usertable (email, password, name, is_teacher)
    		VALUES ('$name', '$password1', '$name', 'n');";
			send_query($conn, $sql);
			$user_id = mysqli_query($conn, "SELECT id FROM usertable WHERE email='$typed_email'");
			$_SESSION['id'] = $user_id;
			mysqli_close($conn);
			echo "Everything worked successfully.";
		}
		else {
			echo "What kind of bullshit is this?!!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Sign Up</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
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
		margin-top: 15px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 30px;
		line-height: 30px;
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
<div class = "boxy">
	<br>
    <h1 class = "message">Sign Up As Student</h1>
    <br>
    <form action="signup.php" method="POST">
	First name: <input type="text" name="name" class = "searchbox"><br>
    Email: <input type="text" name="email" class = "searchbox"><br>
    Password: <input type="password" name="password" class = "searchbox"><br>
	Verify Password: <input type="password" name="verifypassword" class = "searchbox"><br>
    <input type="submit" class = "searchbutton">
	<br>
    </form>
</div>
</body>

</html>