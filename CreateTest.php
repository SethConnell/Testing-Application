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
	</style>
<title>Student Login</title>
</head>
<body>
    <style>
        *{
            text-align: center;
        }
    </style>
	<div class = 'boxy'>
	<br>
    <h1 class = 'message'>Create Test</h1>
    <br>
    <form action='CreateTest.php' method='POST'>
		<?php 
			require("functions.php");
			echo $CreateTestForm; 
			if (isset($_POST['question1_question'], 
					  $_POST['question1_a'], 
					  $_POST['question1_b'], 
					  $_POST['question1_c'], 
					  $_POST['question1_d'], 
					  $_POST['question1_type'], 
					  $_POST['question1_answer'],
					  $_POST['question2_question'], 
					  $_POST['question2_a'], 
					  $_POST['question2_b'], 
					  $_POST['question2_c'], 
					  $_POST['question2_d'], 
					  $_POST['question2_type'], 
					  $_POST['question2_answer'],
					  $_POST['question3_question'], 
					  $_POST['question3_a'], 
					  $_POST['question3_b'], 
					  $_POST['question3_c'], 
					  $_POST['question3_d'], 
					  $_POST['question3_type'], 
					  $_POST['question3_answer'],
					  $_POST['question4_question'], 
					  $_POST['question4_a'], 
					  $_POST['question4_b'], 
					  $_POST['question4_c'], 
					  $_POST['question4_d'], 
					  $_POST['question4_type'], 
					  $_POST['question4_answer'],
					  $_POST['question5_question'], 
					  $_POST['question5_a'], 
					  $_POST['question5_b'], 
					  $_POST['question5_c'], 
					  $_POST['question5_d'], 
					  $_POST['question5_type'], 
					  $_POST['question5_answer'],
					  $_POST['question6_question'], 
					  $_POST['question6_a'], 
					  $_POST['question6_b'], 
					  $_POST['question6_c'], 
					  $_POST['question6_d'], 
					  $_POST['question6_type'], 
					  $_POST['question6_answer'],
					  $_POST['question7_question'], 
					  $_POST['question7_a'], 
					  $_POST['question7_b'], 
					  $_POST['question7_c'], 
					  $_POST['question7_d'], 
					  $_POST['question7_type'], 
					  $_POST['question7_answer'],
					  $_POST['question8_question'], 
					  $_POST['question8_a'], 
					  $_POST['question8_b'], 
					  $_POST['question8_c'], 
					  $_POST['question8_d'], 
					  $_POST['question8_type'], 
					  $_POST['question8_answer'],
					  $_POST['question9_question'], 
					  $_POST['question9_a'], 
					  $_POST['question9_b'], 
					  $_POST['question9_c'], 
					  $_POST['question9_d'], 
					  $_POST['question9_type'], 
					  $_POST['question9_answer'],
					  $_POST['question10_question'], 
					  $_POST['question10_a'], 
					  $_POST['question10_b'], 
					  $_POST['question10_c'], 
					  $_POST['question10_d'], 
					  $_POST['question10_type'], 
					  $_POST['question10_answer'],
					  $_POST['question11_question'], 
					  $_POST['question11_a'], 
					  $_POST['question11_b'], 
					  $_POST['question11_c'], 
					  $_POST['question11_d'], 
					  $_POST['question11_type'], 
					  $_POST['question11_answer'],
					  $_POST['question12_question'], 
					  $_POST['question12_a'], 
					  $_POST['question12_b'], 
					  $_POST['question12_c'], 
					  $_POST['question12_d'], 
					  $_POST['question12_type'], 
					  $_POST['question12_answer'],
					  $_POST['question13_question'], 
					  $_POST['question13_a'], 
					  $_POST['question13_b'], 
					  $_POST['question13_c'], 
					  $_POST['question13_d'], 
					  $_POST['question13_type'], 
					  $_POST['question13_answer'],
					  $_POST['question14_question'], 
					  $_POST['question14_a'], 
					  $_POST['question14_b'], 
					  $_POST['question14_c'], 
					  $_POST['question14_d'], 
					  $_POST['question14_type'], 
					  $_POST['question14_answer'],
					  $_POST['question15_question'], 
					  $_POST['question15_a'], 
					  $_POST['question15_b'], 
					  $_POST['question15_c'], 
					  $_POST['question15_d'], 
					  $_POST['question15_type'], 
					  $_POST['question15_answer'],
					  $_POST['question16_question'], 
					  $_POST['question16_a'], 
					  $_POST['question16_b'], 
					  $_POST['question16_c'], 
					  $_POST['question16_d'], 
					  $_POST['question16_type'], 
					  $_POST['question16_answer'],
					  $_POST['question17_question'], 
					  $_POST['question17_a'], 
					  $_POST['question17_b'], 
					  $_POST['question17_c'], 
					  $_POST['question17_d'], 
					  $_POST['question17_type'], 
					  $_POST['question17_answer'],
					  $_POST['question18_question'], 
					  $_POST['question18_a'], 
					  $_POST['question18_b'], 
					  $_POST['question18_c'], 
					  $_POST['question18_d'], 
					  $_POST['question18_type'], 
					  $_POST['question18_answer'],
					  $_POST['question19_question'], 
					  $_POST['question19_a'], 
					  $_POST['question19_b'], 
					  $_POST['question19_c'], 
					  $_POST['question19_d'], 
					  $_POST['question19_type'], 
					  $_POST['question19_answer'],
					  $_POST['question20_question'], 
					  $_POST['question20_a'], 
					  $_POST['question20_b'], 
					  $_POST['question20_c'], 
					  $_POST['question20_d'], 
					  $_POST['question20_type'], 
					  $_POST['question20_answer']
					 )) {
				createTestTableIfDoesNotExist();
				
				$sql = "INSERT INTO testtable (`question1_question`, `question1_a`, `question1_b`, `question1_c`, `question1_d`, `question1_type`, `question1_answer`, `question2_question`, `question2_a`, `question2_b`, `question2_c`, `question2_d`, `question2_type`, `question2_answer`, `question3_question`, `question3_a`, `question3_b`, `question3_c`, `question3_d`, `question3_type`, `question3_answer`, `question4_question`, `question4_a`, `question4_b`, `question4_c`, `question4_d`, `question4_type`, `question4_answer`, `question5_question`, `question5_a`, `question5_b`, question5_c`, `question5_d`, `question5_type,` `question5_answer`, `question6_question`, `question6_a`, `question6_b`, `question6_c`, `question6_d`, `question6_type`, `question6_answer`, `question7_question`, `question7_a`, `question7_b`, `question7_c`, `question7_d`, `question7_type`, `question7_answer`, `question8_question`, `question8_a`, `question8_b`, `question8_c`, `question8_d`, `question8_type`, `question8_answer`, `question9_question`, `question9_a`, `question9_b`, `question9_c`, `question9_d`, `question9_type`, `question9_answer`, `question10_question`, `question10_a`, `question10_b`, `question10_c`, `question10_d`, `question10_type`, `question10_answer`, `question11_question`, `question11_a`, `question11_b`, `question11_c`, `question11_d`, `question11_type`, `question11_answer`, `question12_question`, `question12_a`, `question12_b`, `question12_c`, `question12_d`, `question12_type`, `question12_answer`, `question13_question`, `question13_a`, `question13_b`, `question13_c`, `question13_d`, `question13_type`, `question13_answer`, `question14_question`, `question14_a`, `question14_b`, `question14_c`, `question14_d`, `question14_type`, `question14_answer`, `question15_question`, `question15_a`, `question15_b`, `question15_c`, `question15_d`, `question15_type`, `question15_answer`, `question16_question`, `question16_a`, `question16_b`, `question16_c`, `question16_d`, `question16_type`, `question16_answer`, `question17_question`, `question17_a`, `question17_b`, `question17_c`, `question17_d`, `question17_type`, `question17_answer`, `question18_question`, `question18_a`, `question18_b`, `question18_c`, `question18_d`, `question18_type`, `question18_answer`, `question19_question`, `question19_a`, `question19_b`, `question19_c`, `question19_d`, `question19_type`, `question19_answer`, `question20_question`, `question20_a`, `question20_b`, `question20_c`, `question20_d`, `question20_type`, `question20_answer`)
				VALUES ('" . $_POST['question1_question'] . "'," . "'" . $_POST['question1_a'] . "'," . "'" . $_POST['question1_b'] . "'," . "'" . $_POST['question1_c'] . "'," . "'" . $_POST['question1_d'] . "'," . "'" . $_POST['question1_type'] . "'," . "'" . $_POST['question1_answer'] . "'," . "'" . $_POST['question2_question'] . "'," . 
					"'" . $_POST['question2_a'] . "'," .
					"'" . $_POST['question2_b'] . "'," . 
					"'" . $_POST['question2_c'] . "'," . 
					"'" . $_POST['question2_d'] . "'," . 
					"'" . $_POST['question2_type'] . "'," .
					"'" . $_POST['question2_answer'] . "'," .
					"'" . $_POST['question3_question'] . "'," .
					"'" . $_POST['question3_a'] . "'," . 
					"'" . $_POST['question3_b'] . "'," . 
					"'" . $_POST['question3_c'] . "'," . 
					"'" . $_POST['question3_d'] . "'," . 
					"'" . $_POST['question3_type'] . "'," . 
					"'" . $_POST['question3_answer'] . "'," . 
					"'" . $_POST['question4_question'] . "'," . 
					"'" . $_POST['question4_a'] . "'," . 
					"'" . $_POST['question4_b'] . "'," . 
					"'" . $_POST['question4_c'] . "'," . 
					"'" . $_POST['question4_d'] . "'," . 
					"'" . $_POST['question4_type'] . "'," .
					"'" . $_POST['question4_answer'] . "'," . 
					"'" . $_POST['question5_question'] . "'," .
					"'" . $_POST['question5_a'] . "'," . 
					"'" . $_POST['question5_b'] . "'," . 
					"'" . $_POST['question5_c'] . "'," . 
					"'" . $_POST['question5_d'] . "'," . 
					"'" . $_POST['question5_type'] . "'," . 
					"'" . $_POST['question5_answer'] . "'," .
					"'" . $_POST['question6_question'] . "'," .
					"'" . $_POST['question6_a'] . "'," . 
					"'" . $_POST['question6_b'] . "'," . 
					"'" . $_POST['question6_c'] . "'," .
					"'" . $_POST['question6_d'] . "'," . 
					"'" . $_POST['question6_type'] . "'," .
					"'" . $_POST['question6_answer'] . "'," . 
					"'" . $_POST['question7_question'] . "'," . 
					"'" . $_POST['question7_a'] . "'," . 
					"'" . $_POST['question7_b'] . "'," . 
					"'" . $_POST['question7_c'] . "'," . 
					"'" . $_POST['question7_d'] . "'," . 
					"'" . $_POST['question7_type'] . "'," .
					"'" . $_POST['question7_answer'] . "'," . 
					"'" . $_POST['question8_question'] . "'," . 
					"'" . $_POST['question8_a'] . "'," . 
					"'" . $_POST['question8_b'] . "'," . 
					"'" . $_POST['question8_c'] . "'," . 
					"'" . $_POST['question8_d'] . "'," . 
					"'" . $_POST['question8_type'] . "'," . 
					"'" . $_POST['question8_answer'] . "'," . 
					"'" . $_POST['question9_question'] . "'," . 
					"'" . $_POST['question9_a'] . "'," . 
					"'" . $_POST['question9_b'] . "'," . 
					"'" . $_POST['question9_c'] . "'," . 
					"'" . $_POST['question9_d'] . "'," . 
					"'" . $_POST['question9_type']. "'," . 
					"'" . $_POST['question9_answer'] . "'," . 
					"'" . $_POST['question10_question'] . "'," .
					"'" . $_POST['question10_a'] . "'," . 
					"'" . $_POST['question10_b'] . "'," . 
					"'" . $_POST['question10_c'] . "'," .
					"'" . $_POST['question10_d'] . "'," . 
					"'" . $_POST['question10_type'] . "'," . 
					"'" . $_POST['question10_answer'] . "'," .
					"'" . $_POST['question11_question'] . "'," .
					"'" . $_POST['question11_a'] . "'," . 
					"'" . $_POST['question11_b'] . "'," .
					"'" . $_POST['question11_c'] . "'," . 
					"'" . $_POST['question11_d'] . "'," .
					"'" . $_POST['question11_type'] . "'," . 
					"'" . $_POST['question11_answer'] . "'," . "'" . 
					$_POST['question12_question'] . "'," . "'" . 
					$_POST['question12_a'] . "'," . "'" . 
					$_POST['question12_b']. "'," . "'" . 
					$_POST['question12_c']. "'," . "'" . 
					$_POST['question12_d'] . "'," . "'" .
					$_POST['question12_type'] . "'," . "'" . 
					$_POST['question12_answer'] . "'," . "'" .
					$_POST['question13_question'] . "'," . "'" . 
					$_POST['question13_a'] . "'," . "'" . 
					$_POST['question13_b'] . "'," . "'" . 
					$_POST['question13_c'] . "'," . "'" . 
					$_POST['question13_d'] . "'," . "'" . 
					$_POST['question13_type'] . "'," . "'" . 
					$_POST['question13_answer'] . "'," . "'" . 
					$_POST['question14_question'] . "'," . "'" . 
					$_POST['question14_a'] . "'," . "'" . 
					$_POST['question14_b'] . "'," . "'" . 
					$_POST['question14_c']  ."'," . "'" . 
					$_POST['question14_d'] . "'," . "'". 
					$_POST['question14_type'] . "'," . "'" . 
					$_POST['question14_answer'] . "'," . "'" . 
					$_POST['question15_question'] . "'," . "'" .
					$_POST['question15_a']. "'," . "'" . 
					$_POST['question15_b'] . "'," . "'" . 
					$_POST['question15_c'] . "'," . "'" . 
					$_POST['question15_d'] . "'," . "'" . 
					$_POST['question15_type'] . "'," . "'" . 
					$_POST['question15_answer'] . "'," . "'" . 
					$_POST['question16_question'] . "'," . "'" . 
					$_POST['question16_a'] . "'," . "'" . 
					$_POST['question16_b'] . "'," . "'" . 
					$_POST['question16_c'] . "'," . "'" . 
					$_POST['question16_d'] . "'," . "'" . 
					$_POST['question16_type'] . " '," . "'" . 
					$_POST['question16_answer'] . "'," . "'" . 
					$_POST['question17_question'] . "'," . "'" . 
					$_POST['question17_a'] . "'," . "'" . 
					$_POST['question17_b'] . "'," . "'" . 
					$_POST['question17_c'] . "'," . "'" . 
					$_POST['question17_d'] . "'," . "'" . 
					$_POST['question17_type'] . "'," . "'" . 
					$_POST['question17_answer'] . "'," . "'" .
					$_POST['question18_question'] . "'," . "'" . 
					$_POST['question18_a'] . "'," . "'" . 
					$_POST['question18_b'] . "'," . "'" . 
					$_POST['question18_c'] . "'," . "'" . 
					$_POST['question18_d'] . "'," . "'" . 
					$_POST['question18_type'] . "'," . "'" . 
					$_POST['question18_answer'] . "'," . "'" . 
					$_POST['question19_question'] . "'," . "'" . 
					$_POST['question19_a'] . "'," . "'" . 
					$_POST['question19_b'] . "'," . "'" .
					$_POST['question19_c'] . "'," . "'" . 
					$_POST['question19_d'] . "'," . "'" . 
					$_POST['question19_type'] . "'," . "'" . 
					$_POST['question19_answer'] . "'," . "'" . 
					$_POST['question20_question'] . "'," . "'" . 
					$_POST['question20_a'] . "'," . "'" . 
					$_POST['question20_b'] . "'," . "'" . 
					$_POST['question20_c'] . "'," . "'" . 
					$_POST['question20_d'] . "'," . "'" . 
					$_POST['question20_type'] . "'," . "'" . 
					$_POST['question20_answer'] . "')";
					send_query($conn, $sql);
			}
		?>
    <input type='submit' class = 'searchbutton'>
	<br>
    </form>
	</div>
	<p>Already a user? <a href='Login.php'>Login</a></p>
</body>
</form>
</body>

</html>