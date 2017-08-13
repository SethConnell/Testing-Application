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
			if (isset($_POST['question1-question'], 
					  $_POST['question1-a'], 
					  $_POST['question1-b'], 
					  $_POST['question1-c'], 
					  $_POST['question1-d'], 
					  $_POST['question1-type'], 
					  $_POST['question1-answer'],
					  $_POST['question2-question'], 
					  $_POST['question2-a'], 
					  $_POST['question2-b'], 
					  $_POST['question2-c'], 
					  $_POST['question2-d'], 
					  $_POST['question2-type'], 
					  $_POST['question2-answer'],
					  $_POST['question3-question'], 
					  $_POST['question3-a'], 
					  $_POST['question3-b'], 
					  $_POST['question3-c'], 
					  $_POST['question3-d'], 
					  $_POST['question3-type'], 
					  $_POST['question3-answer'],
					  $_POST['question4-question'], 
					  $_POST['question4-a'], 
					  $_POST['question4-b'], 
					  $_POST['question4-c'], 
					  $_POST['question4-d'], 
					  $_POST['question4-type'], 
					  $_POST['question4-answer'],
					  $_POST['question5-question'], 
					  $_POST['question5-a'], 
					  $_POST['question5-b'], 
					  $_POST['question5-c'], 
					  $_POST['question5-d'], 
					  $_POST['question5-type'], 
					  $_POST['question5-answer'],
					  $_POST['question6-question'], 
					  $_POST['question6-a'], 
					  $_POST['question6-b'], 
					  $_POST['question6-c'], 
					  $_POST['question6-d'], 
					  $_POST['question6-type'], 
					  $_POST['question6-answer'],
					  $_POST['question7-question'], 
					  $_POST['question7-a'], 
					  $_POST['question7-b'], 
					  $_POST['question7-c'], 
					  $_POST['question7-d'], 
					  $_POST['question7-type'], 
					  $_POST['question7-answer'],
					  $_POST['question8-question'], 
					  $_POST['question8-a'], 
					  $_POST['question8-b'], 
					  $_POST['question8-c'], 
					  $_POST['question8-d'], 
					  $_POST['question8-type'], 
					  $_POST['question8-answer'],
					  $_POST['question9-question'], 
					  $_POST['question9-a'], 
					  $_POST['question9-b'], 
					  $_POST['question9-c'], 
					  $_POST['question9-d'], 
					  $_POST['question9-type'], 
					  $_POST['question9-answer'],
					  $_POST['question10-question'], 
					  $_POST['question10-a'], 
					  $_POST['question10-b'], 
					  $_POST['question10-c'], 
					  $_POST['question10-d'], 
					  $_POST['question10-type'], 
					  $_POST['question10-answer'],
					  $_POST['question11-question'], 
					  $_POST['question11-a'], 
					  $_POST['question11-b'], 
					  $_POST['question11-c'], 
					  $_POST['question11-d'], 
					  $_POST['question11-type'], 
					  $_POST['question11-answer'],
					  $_POST['question12-question'], 
					  $_POST['question12-a'], 
					  $_POST['question12-b'], 
					  $_POST['question12-c'], 
					  $_POST['question12-d'], 
					  $_POST['question12-type'], 
					  $_POST['question12-answer'],
					  $_POST['question13-question'], 
					  $_POST['question13-a'], 
					  $_POST['question13-b'], 
					  $_POST['question13-c'], 
					  $_POST['question13-d'], 
					  $_POST['question13-type'], 
					  $_POST['question13-answer'],
					  $_POST['question14-question'], 
					  $_POST['question14-a'], 
					  $_POST['question14-b'], 
					  $_POST['question14-c'], 
					  $_POST['question14-d'], 
					  $_POST['question14-type'], 
					  $_POST['question14-answer'],
					  $_POST['question15-question'], 
					  $_POST['question15-a'], 
					  $_POST['question15-b'], 
					  $_POST['question15-c'], 
					  $_POST['question15-d'], 
					  $_POST['question15-type'], 
					  $_POST['question15-answer'],
					  $_POST['question16-question'], 
					  $_POST['question16-a'], 
					  $_POST['question16-b'], 
					  $_POST['question16-c'], 
					  $_POST['question16-d'], 
					  $_POST['question16-type'], 
					  $_POST['question16-answer'],
					  $_POST['question17-question'], 
					  $_POST['question17-a'], 
					  $_POST['question17-b'], 
					  $_POST['question17-c'], 
					  $_POST['question17-d'], 
					  $_POST['question17-type'], 
					  $_POST['question17-answer'],
					  $_POST['question18-question'], 
					  $_POST['question18-a'], 
					  $_POST['question18-b'], 
					  $_POST['question18-c'], 
					  $_POST['question18-d'], 
					  $_POST['question18-type'], 
					  $_POST['question18-answer'],
					  $_POST['question19-question'], 
					  $_POST['question19-a'], 
					  $_POST['question19-b'], 
					  $_POST['question19-c'], 
					  $_POST['question19-d'], 
					  $_POST['question19-type'], 
					  $_POST['question19-answer'],
					  $_POST['question20-question'], 
					  $_POST['question20-a'], 
					  $_POST['question20-b'], 
					  $_POST['question20-c'], 
					  $_POST['question20-d'], 
					  $_POST['question20-type'], 
					  $_POST['question20-answer']
					 )) {
				createTestTableIfDoesNotExist();
				$sql = "INSERT INTO testtable (question1-question, question1-a, question1-b, question1-c, question1-d, question1-type, question1-answer, question2-question, question2-a, question2-b, question2-c, question2-d, question2-type, question2-answer, question3-question, question3-a, question3-b, question3-c, question3-d, question3-type, question3-answer, question4-question, question4-a, question4-b, question4-c, question4-d question4-type, question4-answer, question5-question, question5-a, question5-b,question5-c, question5-d, question5-type, question5-answer, question6-question, question6-a, question6-b, question6-c, question6-d, question6-type, question6-answer, question7-question, question7-a, question7-b, question7-c, question7-d, question7-type, question7-answer, question8-question, question8-a, question8-b, question8-c, question8-d, question8-type, question8-answer, question9-question, question9-a, question9-b, question9-c, question9-d, question9-type, question9-answer, question10-question, question10-a, question10-b, question10-c, question10-d, question10-type, question10-answer, question11-question, question11-a, question11-b, question11-c, question11-d, question11-type, question11-answer, question12-question, question12-a, question12-b, question12-c, question12-d, question12-type, question12-answer, question13-question, question13-a, question13-b, question13-c, question13-d, question13-type, question13-answer, question14-question, question14-a, question14-b, question14-c, question14-d, question14-type, question14-answer, question15-question, question15-a, question15-b, question15-c, question15-d, question15-type, question15-answer, question16-question, question16-a, question16-b, question16-c, question16-d, question16-type, question16-answer, question17-question, question17-a, question17-b, question17-c, question17-d, question17-type, question17-answer, question18-question, question18-a, question18-b, question18-c, question18-d, question18-type, question18-answer, question19-question, question19-a, question19-b, question19-c, question19-d, question19-type, question19-answer, question20-question, question20-a, question20-b, question20-c, question20-d, question20-type, question20-answer)
				VALUES ('" . $_POST['question1-question'] . "'," . "'" . $_POST['question1-a'] . "'," . "'" . $_POST['question1-b'] . "'," . "'" . $_POST['question1-c'] . "'," . "'" . $_POST['question1-d'] . "'," . "'" . $_POST['question1-type'] . "'," . "'" . $_POST['question1-answer'] . "'," . "'" . $_POST['question2-question'] . "'," . 
					"'" . $_POST['question2-a'] . "'," .
					"'" . $_POST['question2-b'] . "'," . 
					"'" . $_POST['question2-c'] . "'," . 
					"'" . $_POST['question2-d'] . "'," . 
					"'" . $_POST['question2-type'] . "'," .
					"'" . $_POST['question2-answer'] . "'," .
					"'" . $_POST['question3-question'] . "'," .
					"'" . $_POST['question3-a'] . "'," . 
					"'" . $_POST['question3-b'] . "'," . 
					"'" . $_POST['question3-c'] . "'," . 
					"'" . $_POST['question3-d'] . "'," . 
					"'" . $_POST['question3-type'] . "'," . 
					"'" . $_POST['question3-answer'] . "'," . 
					"'" . $_POST['question4-question'] . "'," . 
					"'" . $_POST['question4-a'] . "'," . 
					"'" . $_POST['question4-b'] . "'," . 
					"'" . $_POST['question4-c'] . "'," . 
					"'" . $_POST['question4-d'] . "'," . 
					"'" . $_POST['question4-type'] . "'," .
					"'" . $_POST['question4-answer'] . "'," . 
					"'" . $_POST['question5-question'] . "'," .
					"'" . $_POST['question5-a'] . "'," . 
					"'" . $_POST['question5-b'] . "'," . 
					"'" . $_POST['question5-c'] . "'," . 
					"'" . $_POST['question5-d'] . "'," . 
					"'" . $_POST['question5-type'] . "'," . 
					"'" . $_POST['question5-answer'] . "'," .
					"'" . $_POST['question6-question'] . "'," .
					"'" . $_POST['question6-a'] . "'," . 
					"'" . $_POST['question6-b'] . "'," . 
					"'" . $_POST['question6-c'] . "'," .
					"'" . $_POST['question6-d'] . "'," . 
					"'" . $_POST['question6-type'] . "'," .
					"'" . $_POST['question6-answer'] . "'," . 
					"'" . $_POST['question7-question'] . "'," . 
					"'" . $_POST['question7-a'] . "'," . 
					"'" . $_POST['question7-b'] . "'," . 
					"'" . $_POST['question7-c'] . "'," . 
					"'" . $_POST['question7-d'] . "'," . 
					"'" . $_POST['question7-type'] . "'," .
					"'" . $_POST['question7-answer'] . "'," . 
					"'" . $_POST['question8-question'] . "'," . 
					"'" . $_POST['question8-a'] . "'," . 
					"'" . $_POST['question8-b'] . "'," . 
					"'" . $_POST['question8-c'] . "'," . 
					"'" . $_POST['question8-d'] . "'," . 
					"'" . $_POST['question8-type'] . "'," . 
					"'" . $_POST['question8-answer'] . "'," . 
					"'" . $_POST['question9-question'] . "'," . 
					"'" . $_POST['question9-a'] . "'," . 
					"'" . $_POST['question9-b'] . "'," . 
					"'" . $_POST['question9-c'] . "'," . 
					"'" . $_POST['question9-d'] . "'," . 
					"'" . $_POST['question9-type']. "'," . 
					"'" . $_POST['question9-answer'] . "'," . 
					"'" . $_POST['question10-question'] . "'," .
					"'" . $_POST['question10-a'] . "'," . 
					"'" . $_POST['question10-b'] . "'," . 
					"'" . $_POST['question10-c'] . "'," .
					"'" . $_POST['question10-d'] . "'," . 
					"'" . $_POST['question10-type'] . "'," . 
					"'" . $_POST['question10-answer'] . "'," .
					"'" . $_POST['question11-question'] . "'," .
					"'" . $_POST['question11-a'] . "'," . 
					"'" . $_POST['question11-b'] . "'," .
					"'" . $_POST['question11-c'] . "'," . 
					"'" . $_POST['question11-d'] . "'," .
					"'" . $_POST['question11-type'] . "'," . 
					"'" . $_POST['question11-answer'] . "'," . "'" . 
					$_POST['question12-question'] . "'," . "'" . 
					$_POST['question12-a'] . "'," . "'" . 
					$_POST['question12-b']. "'," . "'" . 
					$_POST['question12-c']. "'," . "'" . 
					$_POST['question12-d'] . "'," . "'" .
					$_POST['question12-type'] . "'," . "'" . 
					$_POST['question12-answer'] . "'," . "'" .
					$_POST['question13-question'] . "'," . "'" . 
					$_POST['question13-a'] . "'," . "'" . 
					$_POST['question13-b'] . "'," . "'" . 
					$_POST['question13-c'] . "'," . "'" . 
					$_POST['question13-d'] . "'," . "'" . 
					$_POST['question13-type'] . "'," . "'" . 
					$_POST['question13-answer'] . "'," . "'" . 
					$_POST['question14-question'] . "'," . "'" . 
					$_POST['question14-a'] . "'," . "'" . 
					$_POST['question14-b'] . "'," . "'" . 
					$_POST['question14-c']  ."'," . "'" . 
					$_POST['question14-d'] . "'," . "'". 
					$_POST['question14-type'] . "'," . "'" . 
					$_POST['question14-answer'] . "'," . "'" . 
					$_POST['question15-question'] . "'," . "'" .
					$_POST['question15-a']. "'," . "'" . 
					$_POST['question15-b'] . "'," . "'" . 
					$_POST['question15-c'] . "'," . "'" . 
					$_POST['question15-d'] . "'," . "'" . 
					$_POST['question15-type'] . "'," . "'" . 
					$_POST['question15-answer'] . "'," . "'" . 
					$_POST['question16-question'] . "'," . "'" . 
					$_POST['question16-a'] . "'," . "'" . 
					$_POST['question16-b'] . "'," . "'" . 
					$_POST['question16-c'] . "'," . "'" . 
					$_POST['question16-d'] . "'," . "'" . 
					$_POST['question16-type'] . " '," . "'" . 
					$_POST['question16-answer'] . "'," . "'" . 
					$_POST['question17-question'] . "'," . "'" . 
					$_POST['question17-a'] . "'," . "'" . 
					$_POST['question17-b'] . "'," . "'" . 
					$_POST['question17-c'] . "'," . "'" . 
					$_POST['question17-d'] . "'," . "'" . 
					$_POST['question17-type'] . "'," . "'" . 
					$_POST['question17-answer'] . "'," . "'" .
					$_POST['question18-question'] . "'," . "'" . 
					$_POST['question18-a'] . "'," . "'" . 
					$_POST['question18-b'] . "'," . "'" . 
					$_POST['question18-c'] . "'," . "'" . 
					$_POST['question18-d'] . "'," . "'" . 
					$_POST['question18-type'] . "'," . "'" . 
					$_POST['question18-answer'] . "'," . "'" . 
					$_POST['question19-question'] . "'," . "'" . 
					$_POST['question19-a'] . "'," . "'" . 
					$_POST['question19-b'] . "'," . "'" .
					$_POST['question19-c'] . "'," . "'" . 
					$_POST['question19-d'] . "'," . "'" . 
					$_POST['question19-type'] . "'," . "'" . 
					$_POST['question19-answer'] . "'," . "'" . 
					$_POST['question20-question'] . "'," . "'" . 
					$_POST['question20-a'] . "'," . "'" . 
					$_POST['question20-b'] . "'," . "'" . 
					$_POST['question20-c'] . "'," . "'" . 
					$_POST['question20-d'] . "'," . "'" . 
					$_POST['question20-type'] . "'," . "'" . 
					$_POST['question20-answer'] . "');";
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