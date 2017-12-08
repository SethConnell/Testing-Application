<!DOCTYPE html>
<html>
 <body>
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

	.searchbutton:hover, input[type=submit]:hover {
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
		.green {
			color: darkgreen;
		}
		.red {
			color: lightcoral;
		}
		.score {
			font-size: 35px;
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
</form>
</body>

<div class = "message"><h1>Report Card</h1></div>
	<div class = 'boxy'>
	<?php
		require("functions.php");
		$name = getnamewithid();
		require("noerrors.php");
		echo $_SESSION["id"];
	 	$wronganswers = 0;
	 	$answertypes = array();
	 	for($i = 1; $i < 21; ++$i){
			if (!in_array($_POST["answertype$i"], $answertypes)){
				array_push($answertypes, $_POST["answertype$i"]);
			}
		}
	 	foreach($answertypes as $value){
    		echo $value . "<br>";
		}
	 
	 	$rightorwrongarray = array();
	 
	 	foreach($answertypes as $item) {
			if (!in_array($item, $rightorwrongarray)){
				$rightorwrongarray[$item] = 0;
			}
		}
	 	
	 	for($i = 1; $i < 21; ++$i){
		 	if ($_POST["answer$i"] == $_POST["realanswer$i"]) {
				echo "<h3>#$i ----------------------------- <span class = 'green'>Correct</span></h3>";
			}
			else {
				$quickvar = $_POST["answertype$i"];
				$rightorwrongarray[$quickvar] = $rightorwrongarray[$quickvar] + 1;
				$wronganswers = $wronganswers + 1;
				echo "<h3>#$i ----------------------------- <span class = 'red'>Wrong</span></h3>";
			} 
		}
		$finalresults = "";
	 	foreach ( $rightorwrongarray as $key => $value )
			{
			$char = "$key questions wrong: $value <br>";
			$finalresults = $finalresults . $char;
			};
	 	$score = (20 - $wronganswers) / 20;
	 	$value = (20 - $wronganswers);
	 	echo "You got a total score of: ";
	 
	 function get_percentage($total, $number)
		{
		  if ( $total > 0 ) {
		   return round($number / ($total / 100),2);
		  } else {
			return 0;
		  }
		}
	 $finalscore = get_percentage(20,$value);
	 global $conn5;
	 $testname = $_POST["testname"];
	 $sql = "INSERT INTO TestResults (name, test, totalscore, results)VALUES ('$name', '$testname', '$finalscore', '$finalresults')";
	 $conn5->query($sql);
	 echo "<h2 class = 'score'>" . $finalscore.'%' . "</h2>"; // 50%
	 ?>

 </body>
 </html> 
