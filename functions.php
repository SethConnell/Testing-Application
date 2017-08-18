<?php
	
	$signup_name = "name";
	$signup_password1 = "password";
	$signup_password2 = "verifypassword";
	$signup_email = "email";
	$signup_teacher = "n";

	$servername = "127.0.0.1";
	// Examples of data for MYSQL database connection.
	$username = "seth";
	$password = "sethconnell";
	$db_name = "DataTest";
	$errormessage = "Email or password is incorrect.";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db_name);
	
	// This function returns the saved password if user exists.
	function stored_password($email) {
		global $conn;
	    $stored_pass = mysqli_query($conn, "SELECT password FROM usertable WHERE email = '$email'");
		$val = "lol";
		while ($obj = $stored_pass->fetch_object()) {
			$val = $obj->password;
			return $val;
		}
	};
	
	// Sends sql to to server.
	function send_query($connection, $sql) {
			if (mysqli_query($connection, $sql)){
			} else{
			    echo "ERROR: Was not able to execute code: " . mysqli_error($connection) . "<br>";
			}
		};

	// Encrypting password and email for database.
	function hashpassword($oldpassword) {
		$oldpassword = password_hash($oldpassword, PASSWORD_BCRYPT);
		return $oldpassword;
	};
  	function ifLoggedIn() {
		 if (isset($_SESSION['id'])) {
			echo "<a href='signout.php'>Logout</a>";
			session_write_close();
		}
	};
	// This function creates a table if it does not already exist.
	// Great for testing.
	function createUserTableIfDoesNotExist(){
		global $conn;
		$sql = "CREATE TABLE IF NOT EXISTS usertable(
		    email text NOT NULL,
		    password text NOT NULL,
		    name text NOT NULL,
			is_teacher text NOT NULL,
		    id MEDIUMINT NOT NULL AUTO_INCREMENT,
		    primary key (id)
		)";
		send_query($conn, $sql);
	};
	
	function createTestTableIfDoesNotExist() {
	    global $conn;
	    $query = "SELECT ID FROM USERS";
        $result = mysqli_query($conn, $query);
        if(empty($result)) {
		$sql = "CREATE TABLE `testtable` ( 
		    `question1_question` text NOT NULL, 
    		`question1_a` text NOT NULL,
    		`question1_b` text NOT NULL,
    		`question1_c` text NOT NULL,
    		`question1_d` text NOT NULL,
    		`question1_type` text NOT NULL,
    		`question1_answer` text NOT NULL,
    		`question2_question` text NOT NULL,
    		`question2_a` text NOT NULL,
    		`question2_b` text NOT NULL,
    		`question2_c` text NOT NULL,
    		`question2_d` text NOT NULL,
    		`question2_type` text NOT NULL,
    		`question2_answer` text NOT NULL,
    		`question3_question` text NOT NULL,
    		`question3_a` text NOT NULL,
    		`question3_b` text NOT NULL,
    		`question3_c` text NOT NULL,
    		`question3_d` text NOT NULL,
    		`question3_type` text NOT NULL,
    		`question3_answer` text NOT NULL,
    		`question4_question` text NOT NULL,
    		`question4_a` text NOT NULL,
    		`question4_b` text NOT NULL,
    		`question4_c` text NOT NULL,
    		`question4_d` text NOT NULL,
    		`question4_type` text NOT NULL,
    		`question4_answer` text NOT NULL,
    		`question5_question` text NOT NULL,
    		`question5_a` text NOT NULL,
    		`question5_b` text NOT NULL,
    		`question5_c` text NOT NULL,
    		`question5_d` text NOT NULL,
    		`question5_type` text NOT NULL,
    		`question5_answer` text NOT NULL,
    		`question6_question` text NOT NULL,
    		`question6_a` text NOT NULL,
    		`question6_b` text NOT NULL,
    		`question6_c` text NOT NULL,
    		`question6_d` text NOT NULL,
    		`question6_type` text NOT NULL,
    		`question6_answer` text NOT NULL,
    		`question7_question` text NOT NULL,
    		`question7_a` text NOT NULL,
    		`question7_b` text NOT NULL,
    		`question7_c` text NOT NULL,
    		`question7_d` text NOT NULL,
    		`question7_type` text NOT NULL,
    		`question7_answer` text NOT NULL,
    		`question8_question` text NOT NULL,
    		`question8_a` text NOT NULL,
    		`question8_b` text NOT NULL,
    		`question8_c` text NOT NULL,
    		`question8_d` text NOT NULL,
    		`question8_type` text NOT NULL,
    		`question8_answer` text NOT NULL,
    		`question9_question` text NOT NULL,
    		`question9_a` text NOT NULL,
    		`question9_b` text NOT NULL,
    		`question9_c` text NOT NULL,
    		`question9_d` text NOT NULL,
    		`question9_type` text NOT NULL,
    		`question9_answer` text NOT NULL,
    		`question10_question` text NOT NULL,
    		`question10_a` text NOT NULL,
    		`question10_b` text NOT NULL,
    		`question10_c` text NOT NULL,
    		`question10_d` text NOT NULL,
    		`question10_type` text NOT NULL,
    		`question10_answer` text NOT NULL,
    		`question11_question` text NOT NULL,
    		`question11_a` text NOT NULL,
    		`question11_b` text NOT NULL,
    		`question11_c` text NOT NULL,
    		`question11_d` text NOT NULL,
    		`question11_type` text NOT NULL,
    		`question11_answer` text NOT NULL,
    		`question12_question` text NOT NULL,
    		`question12_a` text NOT NULL,
    		`question12_b` text NOT NULL,
    		`question12_c` text NOT NULL,
    		`question12_d` text NOT NULL,
    		`question12_type` text NOT NULL,
    		`question12_answer` text NOT NULL,
    		`question13_question` text NOT NULL,
    		`question13_a` text NOT NULL,
    		`question13_b` text NOT NULL,
    		`question13_c` text NOT NULL,
    		`question13_d` text NOT NULL,
    		`question13_type` text NOT NULL,
    		`question13_answer` text NOT NULL,
    		`question14_question` text NOT NULL,
    		`question14_a` text NOT NULL,
    		`question14_b` text NOT NULL,
    		`question14_c` text NOT NULL,
    		`question14_d` text NOT NULL,
    		`question14_type` text NOT NULL,
    		`question14_answer` text NOT NULL,
    		`question15_question` text NOT NULL,
    		`question15_a` text NOT NULL,
    		`question15_b` text NOT NULL,
    		`question15_c` text NOT NULL,
    		`question15_d` text NOT NULL,
    		`question15_type` text NOT NULL,
    		`question15_answer` text NOT NULL,
    		`question16_question` text NOT NULL,
    		`question16_a` text NOT NULL,
    		`question16_b` text NOT NULL,
    		`question16_c` text NOT NULL,
    		`question16_d` text NOT NULL,
    		`question16_type` text NOT NULL,
    		`question16_answer` text NOT NULL,
    		`question17_question` text NOT NULL,
    		`question17_a` text NOT NULL,
    		`question17_b` text NOT NULL,
    		`question17_c` text NOT NULL,
    		`question17_d` text NOT NULL,
    		`question17_type` text NOT NULL,
    		`question17_answer` text NOT NULL,
    		`question18_question` text NOT NULL,
    		`question18_a` text NOT NULL,
    		`question18_b` text NOT NULL,
    		`question18_c` text NOT NULL,
    		`question18_d` text NOT NULL,
    		`question18_type` text NOT NULL,
    		`question18_answer` text NOT NULL,
    		`question19_question` text NOT NULL,
    		`question19_a` text NOT NULL,
    		`question19_b` text NOT NULL,
    		`question19_c` text NOT NULL,
    		`question19_d` text NOT NULL,
    		`question19_type` text NOT NULL,
    		`question19_answer` text NOT NULL,
    		`question20_question` text NOT NULL,
    		`question20_a` text NOT NULL,
    		`question20_b` text NOT NULL,
    		`question20_c` text NOT NULL,
    		`question20_d` text NOT NULL,
    		`question20_type` text NOT NULL,
    		`question20_answer` text NOT NULL,
    	    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY
    	)";
		send_query($conn, $sql);
        };
	}

	$signupForm = "<div class = 'boxy'>
	<br>
    <h1 class = 'message'>Sign Up As Student</h1>
    <br>
    <form action='signup.php' method='POST'>
	First name: <input type='text' name='name' class = 'searchbox'><br>
    Email: <input type='text' name='email' class = 'searchbox'><br>
    Password: <input type='password' name='password' class = 'searchbox'><br>
	Verify Password: <input type='password' name='verifypassword' class = 'searchbox'><br>
    <input type='submit' class = 'searchbutton'>
	<br>
    </form>
	</div>
	<p>Already a user? <a href='Login.php'>Login</a>";

	$loginForm = "<div class = 'boxy'>
	<br>
	<h1 class = 'message'>Student Sign In</h1>
    <br>
    <form action='Login.php' method='POST'>
    Email: <input type='text' name='email' class = 'searchbox'><br>
    Password: <input type='password' name='password' class = 'searchbox'><br>
    <input type='submit' class = 'searchbutton'>
	<br>
    </form>
	</div>
	<p>Don't have an account? <a href='signup.php'>Sign Up</a>
	";

	$notLoggedIn = "<div class = 'boxy'>
	<br>
	<h1 class = 'message'>You haven't logged in yet.</h1>
	<br>
	<a href = 'signup.php'><div class = 'searchbutton'>Create Account.</div></a>
	<a href = 'Login.php'><div class = 'searchbutton'>Log in.</div></a>
	<br>
	</div>";

	$CreateTestForm = <<<"BOOM"
	<h1>1.</h1>
<div class = "problem">
			Question: <input type='text' name='question1_question' class = 'searchbox'><br>
			A: <input type='text' name='question1_a' class = 'searchbox'><br>
			B: <input type='text' name='question1_b' class = 'searchbox'><br>
			C: <input type='text' name='question1_c' class = 'searchbox'><br>
			D: <input type='text' name='question1_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question1_type' class = 'searchbox'><br>
			Answer: <select name="question1_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>2.</h1>
		<div class = "problem">
			Question: <input type='text' name='question2_question' class = 'searchbox'><br>
			A: <input type='text' name='question2_a' class = 'searchbox'><br>
			B: <input type='text' name='question2_b' class = 'searchbox'><br>
			C: <input type='text' name='question2_c' class = 'searchbox'><br>
			D: <input type='text' name='question2_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question2_type' class = 'searchbox'><br>
			Answer: <select name="question2_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select><br>
		</div>
		
	<h1>3.</h1>
		<div class = "problem">
			Question: <input type='text' name='question3_question' class = 'searchbox'><br>
			A: <input type='text' name='question3_a' class = 'searchbox'><br>
			B: <input type='text' name='question3_b' class = 'searchbox'><br>
			C: <input type='text' name='question3_c' class = 'searchbox'><br>
			D: <input type='text' name='question3_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question3_type' class = 'searchbox'><br>
			Answer: <select name="question3_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>4.</h1>
		<div class = "problem">
			Question: <input type='text' name='question4_question' class = 'searchbox'><br>
			A: <input type='text' name='question4_a' class = 'searchbox'><br>
			B: <input type='text' name='question4_b' class = 'searchbox'><br>
			C: <input type='text' name='question4_c' class = 'searchbox'><br>
			D: <input type='text' name='question4_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question4_type' class = 'searchbox'><br>
			Answer: <select name="question4_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>5.</h1>
		<div class = "problem">
			Question: <input type='text' name='question5_question' class = 'searchbox'><br>
			A: <input type='text' name='question5_a' class = 'searchbox'><br>
			B: <input type='text' name='question5_b' class = 'searchbox'><br>
			C: <input type='text' name='question5_c' class = 'searchbox'><br>
			D: <input type='text' name='question5_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question5_type' class = 'searchbox'><br>
			Answer: <select name="question5_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>6.</h1>
		<div class = "problem">
			Question: <input type='text' name='question6_question' class = 'searchbox'><br>
			A: <input type='text' name='question6_a' class = 'searchbox'><br>
			B: <input type='text' name='question6_b' class = 'searchbox'><br>
			C: <input type='text' name='question6_c' class = 'searchbox'><br>
			D: <input type='text' name='question6_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question6_type' class = 'searchbox'><br>
			Answer: <select name="question6_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>7.</h1>
		<div class = "problem">
			Question: <input type='text' name='question7_question' class = 'searchbox'><br>
			A: <input type='text' name='question7_a' class = 'searchbox'><br>
			B: <input type='text' name='question7_b' class = 'searchbox'><br>
			C: <input type='text' name='question7_c' class = 'searchbox'><br>
			D: <input type='text' name='question7_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question7_type' class = 'searchbox'><br>
			Answer: <select name="question7_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>8.</h1>
		<div class = "problem">
			Question: <input type='text' name='question8_question' class = 'searchbox'><br>
			A: <input type='text' name='question8_a' class = 'searchbox'><br>
			B: <input type='text' name='question8_b' class = 'searchbox'><br>
			C: <input type='text' name='question8_c' class = 'searchbox'><br>
			D: <input type='text' name='question8_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question8_type' class = 'searchbox'><br>
			Answer: <select name="question8_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>9.</h1>
		<div class = "problem">
			Question: <input type='text' name='question9_question' class = 'searchbox'><br>
			A: <input type='text' name='question9_a' class = 'searchbox'><br>
			B: <input type='text' name='question9_b' class = 'searchbox'><br>
			C: <input type='text' name='question9_c' class = 'searchbox'><br>
			D: <input type='text' name='question9_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question9_type' class = 'searchbox'><br>
			Answer: <select name="question9_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>10.</h1>
		<div class = "problem">
			Question: <input type='text' name='question10_question' class = 'searchbox'><br>
			A: <input type='text' name='question10_a' class = 'searchbox'><br>
			B: <input type='text' name='question10_b' class = 'searchbox'><br>
			C: <input type='text' name='question10_c' class = 'searchbox'><br>
			D: <input type='text' name='question10_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question10_type' class = 'searchbox'><br>
			Answer: <select name="question10_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
	
	<h1>11.</h1>
		<div class = "problem">
			Question: <input type='text' name='question11_question' class = 'searchbox'><br>
			A: <input type='text' name='question11_a' class = 'searchbox'><br>
			B: <input type='text' name='question11_b' class = 'searchbox'><br>
			C: <input type='text' name='question11_c' class = 'searchbox'><br>
			D: <input type='text' name='question11_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question11_type' class = 'searchbox'><br>
			Answer: <select name="question11_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>12.</h1>
		<div class = "problem">
			Question: <input type='text' name='question12_question' class = 'searchbox'><br>
			A: <input type='text' name='question12_a' class = 'searchbox'><br>
			B: <input type='text' name='question12_b' class = 'searchbox'><br>
			C: <input type='text' name='question12_c' class = 'searchbox'><br>
			D: <input type='text' name='question12_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question12_type' class = 'searchbox'><br>
			Answer: <select name="question12_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>13.</h1>
		<div class = "problem">
			Question: <input type='text' name='question13_question' class = 'searchbox'><br>
			A: <input type='text' name='question13_a' class = 'searchbox'><br>
			B: <input type='text' name='question13_b' class = 'searchbox'><br>
			C: <input type='text' name='question13_c' class = 'searchbox'><br>
			D: <input type='text' name='question13_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question13_type' class = 'searchbox'><br>
			Answer: <select name="question13_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>14.</h1>
		<div class = "problem">
			Question: <input type='text' name='question14_question' class = 'searchbox'><br>
			A: <input type='text' name='question14_a' class = 'searchbox'><br>
			B: <input type='text' name='question14_b' class = 'searchbox'><br>
			C: <input type='text' name='question14_c' class = 'searchbox'><br>
			D: <input type='text' name='question14_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question14_type' class = 'searchbox'><br>
			Answer: <select name="question14_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>15.</h1>
		<div class = "problem">
			Question: <input type='text' name='question15_question' class = 'searchbox'><br>
			A: <input type='text' name='question15_a' class = 'searchbox'><br>
			B: <input type='text' name='question15_b' class = 'searchbox'><br>
			C: <input type='text' name='question15_c' class = 'searchbox'><br>
			D: <input type='text' name='question15_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question15_type' class = 'searchbox'><br>
			Answer: <select name="question15_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>16.</h1>
		<div class = "problem">
			Question: <input type='text' name='question16_question' class = 'searchbox'><br>
			A: <input type='text' name='question16_a' class = 'searchbox'><br>
			B: <input type='text' name='question16_b' class = 'searchbox'><br>
			C: <input type='text' name='question16_c' class = 'searchbox'><br>
			D: <input type='text' name='question16_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question16_type' class = 'searchbox'><br>
			Answer: <select name="question16_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>17.</h1>
		<div class = "problem">
			Question: <input type='text' name='question17_question' class = 'searchbox'><br>
			A: <input type='text' name='question17_a' class = 'searchbox'><br>
			B: <input type='text' name='question17_b' class = 'searchbox'><br>
			C: <input type='text' name='question17_c' class = 'searchbox'><br>
			D: <input type='text' name='question17_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question17_type' class = 'searchbox'><br>
			Answer: <select name="question17_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>18.</h1>
		<div class = "problem">
			Question: <input type='text' name='question18_question' class = 'searchbox'><br>
			A: <input type='text' name='question18_a' class = 'searchbox'><br>
			B: <input type='text' name='question18_b' class = 'searchbox'><br>
			C: <input type='text' name='question18_c' class = 'searchbox'><br>
			D: <input type='text' name='question18_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question18_type' class = 'searchbox'><br>
			Answer: <select name="question18_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>19.</h1>
		<div class = "problem">
			Question: <input type='text' name='question19_question' class = 'searchbox'><br>
			A: <input type='text' name='question19_a' class = 'searchbox'><br>
			B: <input type='text' name='question19_b' class = 'searchbox'><br>
			C: <input type='text' name='question19_c' class = 'searchbox'><br>
			D: <input type='text' name='question19_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question19_type' class = 'searchbox'><br>
			Answer: <select name="question19_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>20.</h1>
		<div class = "problem">
			Question: <input type='text' name='question20_question' class = 'searchbox'><br>
			A: <input type='text' name='question20_a' class = 'searchbox'><br>
			B: <input type='text' name='question20_b' class = 'searchbox'><br>
			C: <input type='text' name='question20_c' class = 'searchbox'><br>
			D: <input type='text' name='question20_d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question20_type' class = 'searchbox'><br>
			Answer: <select name="question20_answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
BOOM;

	

?>