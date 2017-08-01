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
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>
<body>
    <style>
        *{
            text-align: center;
        }
    </style>
    <h1>Sign In As Teacher</h1>
    <br>
    <form action="Login.php" method="POST">
    Email: <input type="text" name="email"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit">
	<a href = "studentLogin.php">Log in as student.</a>
    </form>
</body>

</html>
