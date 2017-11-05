<?php
	require('functions.php');

	function createdatabase($name) {
		global $conn2;
		// Check connection
		if ($conn2->connect_error) {
			die("Connection failed: " . $conn2->connect_error);
		} 
		// Create database
		$sql = "CREATE DATABASE $name";
		if ($conn2->query($sql) === TRUE) {
			echo "Database created successfully";
		} else {
			echo "Error creating database: " . $conn2->error;
		}
		$conn2->close();
	}

	function createimportanttable(){
			global $conn4;
			$sql = "CREATE TABLE IF NOT EXISTS TestDataLists(
				testname text NOT NULL,
				users text,
				linky text NOT NULL,
				id MEDIUMINT NOT NULL AUTO_INCREMENT,
				primary key (id)
			)";
			send_query($conn4, $sql);
		};

	function additemtoTestDataLists($varvarbinks) {
		global $conn4;
		$sql = "CREATE TABLE IF NOT EXISTS TestDataLists(
				testname text NOT NULL,
				users text,
				id MEDIUMINT NOT NULL AUTO_INCREMENT,
				primary key (id)
			)";
	}

	function addrowtoTestDataLists($name, $link) {
		global $conn4;
		$sql = "INSERT INTO TestDataLists (testname, linky)
		VALUES ('$name', '$users', '$link')";
		
		send_query($conn4, $sql);
		echo "it worked!";
	}

	function appenddatatoTestDataLists($data, $id) {
		global $conn4;
		$sql = "UPDATE TestDataLists SET users = concat(users,'-$data-') WHERE id = $id";
		
		send_query($conn4, $sql);
		echo "it worked!";
	}
	

	function displaytests($name) {
		global $conn4;
		$result = mysqli_query($conn4, "SELECT testname FROM `TestDataLists` WHERE `column` LIKE '%{$name}%'");
		$testname = $result->fetch_object()->testname;
		return $testname;
	}

?>