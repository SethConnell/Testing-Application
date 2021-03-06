<!DOCTYPE html>
<?php
	session_start();
	require('functions.php');
	require("noerrors.php");
	
	
	

	
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<style>
	#name {
		display: inline-flex;
		color: white;
		font-size: 20px;
		float: left;
	}
	* {
		font-family: 'Josefin Sans', sans-serif;
	}
	html {
		height: 100%
	}

	body {
		width: 100%;
		height: 100%;
		background-color: #25AADF;
		/* Steel Blue */
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
		margin-top: 20px;
		background-color: #4CC2EF;
		-webkit-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		-moz-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		transition-duration: 1s;
	}
	.boxy:hover {
		border-radius: 50px;
		transition-duration: 1s;
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
	/* unvisited link */
	a {
		text-decoration: none;
		transition-duration: 1s;		
	}
	.item {
		width: 100%;
		text-align: center;
	}
	.item:hover {
		color: blue;
		transition-duration: 1s;
	}
	a:link {
    color: white;
	}
	/* visited link */
	a:visited {
		color: white;
	}
	.sidebar {
		display: flex-box;
		float: left;
		border-style: solid;
		border: 2px;
		border-color: white;
		color: white;
	}
	.hometitle {
		width: 100%;
		text-align: center;
	}
	.subtitle {
		width: 50%;
		margin: auto;
		text-align: center;
	}
</style>
<title>Home Page</title>
</head>

<body>
	<div class = "container">
		<?php
		if (!isset($_SESSION['id'])) {
			echo $notLoggedIn;
		}
		if (loggedIn($_SESSION['id'], $_SESSION['password']) == true) {
			echo "<br>";
			echo "<br>";
			echo "<header><h1 class = 'message'>Welcome home, " . getnamewithid() . ".</h1></header>";
			echo "<div class = 'boxy' style = 'height: 100px'><a href = 'viewtests.php'><h3 style = 'line-height: 100px; font-size: 40px; text-align: center;'>View Your Tests</h3></a></div>";
			echo "<div class = 'boxy' style = 'height: 100px'><a href = 'previoustests.php'><h3 style = 'line-height: 100px; font-size: 40px; text-align: center;'>Your Tests Results</h3></a></div>";
			if (isTeacher($_SESSION['id']) == True && isTeacher($_SESSION['id'])) {
				echo "<h1 class = 'message'>Teacher Section</h1>";
				echo "<div class = 'boxy' style = 'height: 100px'><a href = 'CreateTest.php'><h3 style = 'line-height: 100px; font-size: 40px; text-align: center;'>Create Tests</h3></a></div>";
				echo "<div class = 'boxy' style = 'height: 100px'><a href = 'viewresults.php'><h3 style = 'line-height: 100px; font-size: 40px; text-align: center;'>All Test Results</h3></a>";
			}
			echo "<br>";
			echo "<br>";
			echo "<a href='signout.php' class = 'item'><h4>Logout</h4></a>";
			
		}
		
		?>
		
		
    </div>
</body>

</html>