<?php  
// Checks if password or email is empty.
require("functions.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

$send_query = function($link, $sql) {
	if (mysqli_query($link, $sql)){
		echo "it worked.";
	} else{
		echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
	}
};

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

// Create table.
$sql = 
	"CREATE TABLE IF NOT EXISTS usertable(
	email text NOT NULL,
	password text NOT NULL,
	name text NOT NULL,
	is_teacher text NOT NULL,
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	primary key (id)
)";
$send_query($conn, $sql);

?>
