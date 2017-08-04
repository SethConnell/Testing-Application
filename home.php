<!DOCTYPE html>
<?php
	if (isset($_SESSION['id'])) {
		echo "<a href='signout.php'>Logout</a>";
		session_write_close();
	}
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<style>
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
		margin-top: 20%;
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
		width: 30%;
		display: flex-box;
		text-align: center;
		margin-left: 35%;
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
		text-decoration: none;
	}
</style>
<title>Home Page</title>
</head>

<body>
	<div class = "container">
		<div class = "boxy">
        <br>
        <h1 class = "message">You haven't logged in yet.</h1>
		<br>
        <a href = "signup.php"><div class = "searchbutton">Create Account.</div></a>
		<a href = "Login.php"><div class = "searchbutton">Log in.</div></a>
        <br>
    </div>
</body>

</html>