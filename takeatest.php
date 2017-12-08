<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<script href = "jquery.js"></script>
	<script href = "appenderror.js"></script>
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
		color: #4CC2EF;
		}
	html {
		height: 100%
	}
	option {
		color: black;
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

	.searchbutton, input[type=submit] {
		width: 100px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 45px;
		line-height: 40px;
		margin-top: 25px;
	}
	
	.name {
		transition-duration: 1.5s;
		width: 200px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 40px;
		line-height: 40px;
		margin-top: 25px;
		font-size: 20px;
	}
		.name:focus {
			transition-duration: 1.5s;
			border-radius: 35px;
			outline:none;
		}
	
	.searchbutton, input[type=submit] {
		border-color: white;
		background-color: white;
		color: #4CC2EF;
		transition-duration: 1.5s;
		font-size: 20px;
	}

		

	.searchbutton:hover, input[type=submit]:hover {
		border-radius: 15px;
		transition-duration: 1.5s;
	}

	.catagory {
		font-size: 30px;
		font-family: sans-serif;
	}

	.value {
		font-size: 15px;
		font-family: sans-serif;
	}
		
	.error {
		color: red;
		font-size: 100px;
		font-family: cursive;
		text-align: center;
	}
		
	a {
		text-decoration: underline;
	}
		
	</style>
	</head>
	<body>
			<?php
			require("noerrors.php");
			
			if (loggedIn($_SESSION['id'], $_SESSION['password']) == true) {
			echo "<form action='getresult.php' method='post'>
		<div class='boxy'><br><h1 class = 'message'>";
			echo $_GET["testname"];
			echo "</h1><br></div>";
				 error_reporting(E_ALL);
				 ini_set('display_errors','On');
				function totaltest($tablename){
					require("functions.php");
					$sql = "SELECT * FROM $tablename";
					$result = $conn3->query($sql);



					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$arrayvar = Array();
							for($i = 1; $i < 21; ++$i){
								$arrayvar["question" . $i . "_question"] = $row["question" . $i . "_question"];
								$arrayvar["question" . $i . "_a"] = $row["question" . $i . "_a"];
								$arrayvar["question" . $i . "_b"] = $row["question" . $i . "_b"];
								$arrayvar["question" . $i . "_c"] = $row["question" . $i . "_c"];
								$arrayvar["question" . $i . "_d"] = $row["question" . $i . "_d"];
								$arrayvar["question" . $i . "_type"] = $row["question" . $i . "_type"];
								$arrayvar["question" . $i . "_answer"] = $row["question" . $i . "_answer"];
							}
							return $arrayvar;
						}
					} else {
						echo "<script>alert('Uh oh. Test not found.')</script>";
					};

				}
				$testname = $_GET["testname"];
				$varvarvar = totaltest($testname);
				for($i = 1; $i < 21; ++$i){
					echo "<br>";
					echo "<input hidden name = 'testname' value = '$testname'></input>";
					echo "<div class='boxy'>";
					echo "<br>";
					echo "<h1>#" . $i ."</h1>";
					echo "<h3>" . $varvarvar["question" . $i ."_question"] ."</h3>";
					echo "<h4>A.      " . $varvarvar["question" . $i . "_a"] . "</h4>";
					echo "<h4>B.      " . $varvarvar["question" . $i . "_b"] . "</h4>";
					echo "<h4>C.      " . $varvarvar["question" . $i . "_c"] . "</h4>";
					echo "<h4>D.      " . $varvarvar["question" . $i . "_d"] . "</h4>";
					echo "<input type='hidden' name='realanswer$i' value='" . $varvarvar["question" . $i . "_answer"] . "'>";

					echo "<input type='hidden' name='answertype$i' value='" . $varvarvar["question" . $i . "_type"] . "'>";
					echo "<select name='answer" . $i . "' >
							<option value=" . "'a'" . ">A</option>
							<option value=" . "'b'" . ">B</option>
							<option value=" . "'c'" . ">C</option>
							<option value=" . "'d'" . ">D</option>
					</select>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "</div>";
					echo "?><br><input type='submit'>";
				}
			}
			else {
				echo "<h1 class = 'message'>There has been an error.</h1>";
				Header("Location: errorpage.php");
			}
			?>
		
	</body>
</html>