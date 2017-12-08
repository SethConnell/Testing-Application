<?php
    // Use intialize function to create required files.
    require("functions.php");


	function createTestInfodatabase() {
		global $servername, $username, $password, $TestInfo, $TestList, $TestResults;
	    $link = mysqli_connect($servername, $username, $password, $TestInfo);
 		$sql = 'CREATE DATABASE IF NOT EXISTS ' . $TestInfo;
		mysqli_query($link, $sql);
	}
	
	function createTestInfotables() {
		global $servername, $username, $password, $TestInfo, $TestList, $TestResults;
		$link = mysqli_connect($servername, $username, $password, $TestInfo);
 		$sql = 'CREATE DATABASE IF NOT EXISTS ' . $TestInfo;
		mysqli_query($link, $sql);
	}

	
	function createTestList() {
		global $servername, $username, $password, $TestInfo, $TestList, $TestResults;
	    $link = mysqli_connect($servername, $username, $password, $TestList);
 		$sql = 'CREATE DATABASE IF NOT EXISTS ' . $TestList;
		mysqli_query($link, $sql);
	}

	function createCompletedTestsdatabase(){
		global $servername, $username, $password, $TestInfo, $TestList, $TestResults;
		$link = mysqli_connect($servername, $username, $password);
 		$sql = "CREATE DATABASE IF NOT EXISTS " . $TestResults;
		mysqli_query($link, $sql);
	}
	
	function initialize() {
	    createTestInfodatabase();
	    createTestInfotables();
	    createTestList();
		createCompletedTestsdatabase();
	}
	
	initialize(); // this initializes the databases and tables.
	
?>