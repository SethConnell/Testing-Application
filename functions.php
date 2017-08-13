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
			    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
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
		$sql = "CREATE TABLE IF NOT EXISTS testtable(
		    question1-question text NOT NULL,
			question1-a text NOT NULL,
			question1-b text NOT NULL,
			question1-c text NOT NULL,
			question1-d text NOT NULL,
			question1-type text NOT NULL,
			question1-answer text NOT NULL,
			question2-question text NOT NULL,
			question2-a text NOT NULL,
			question2-b text NOT NULL,
			question2-c text NOT NULL,
			question2-d text NOT NULL,
			question2-type text NOT NULL,
			question2-answer text NOT NULL,
			question3-question text NOT NULL,
			question3-a text NOT NULL,
			question3-b text NOT NULL,
			question3-c text NOT NULL,
			question3-d text NOT NULL,
			question3-type text NOT NULL,
			question3-answer text NOT NULL,
			question4-question text NOT NULL,
			question4-a text NOT NULL,
			question4-b text NOT NULL,
			question4-c text NOT NULL,
			question4-d text NOT NULL,
			question4-type text NOT NULL,
			question4-answer text NOT NULL,
			question5-question text NOT NULL,
			question5-a text NOT NULL,
			question5-b text NOT NULL,
			question5-c text NOT NULL,
			question5-d text NOT NULL,
			question5-type text NOT NULL,
			question5-answer text NOT NULL,
			question6-question text NOT NULL,
			question6-a text NOT NULL,
			question6-b text NOT NULL,
			question6-c text NOT NULL,
			question6-d text NOT NULL,
			question6-type text NOT NULL,
			question6-answer text NOT NULL,
			question7-question text NOT NULL,
			question7-a text NOT NULL,
			question7-b text NOT NULL,
			question7-c text NOT NULL,
			question7-d text NOT NULL,
			question7-type text NOT NULL,
			question7-answer text NOT NULL,
			question8-question text NOT NULL,
			question8-a text NOT NULL,
			question8-b text NOT NULL,
			question8-c text NOT NULL,
			question8-d text NOT NULL,
			question8-type text NOT NULL,
			question8-answer text NOT NULL,
			question9-question text NOT NULL,
			question9-a text NOT NULL,
			question9-b text NOT NULL,
			question9-c text NOT NULL,
			question9-d text NOT NULL,
			question9-type text NOT NULL,
			question9-answer text NOT NULL,
			question10-question text NOT NULL,
			question10-a text NOT NULL,
			question10-b text NOT NULL,
			question10-c text NOT NULL,
			question10-d text NOT NULL,
			question10-type text NOT NULL,
			question10-answer text NOT NULL,
			question11-question text NOT NULL,
			question11-a text NOT NULL,
			question11-b text NOT NULL,
			question11-c text NOT NULL,
			question11-d text NOT NULL,
			question11-type text NOT NULL,
			question11-answer text NOT NULL,
			question12-question text NOT NULL,
			question12-a text NOT NULL,
			question12-b text NOT NULL,
			question12-c text NOT NULL,
			question12-d text NOT NULL,
			question12-type text NOT NULL,
			question12-answer text NOT NULL,
			question13-question text NOT NULL,
			question13-a text NOT NULL,
			question13-b text NOT NULL,
			question13-c text NOT NULL,
			question13-d text NOT NULL,
			question13-type text NOT NULL,
			question13-answer text NOT NULL,
			question14-question text NOT NULL,
			question14-a text NOT NULL,
			question14-b text NOT NULL,
			question14-c text NOT NULL,
			question14-d text NOT NULL,
			question14-type text NOT NULL,
			question14-answer text NOT NULL,
			question15-question text NOT NULL,
			question15-a text NOT NULL,
			question15-b text NOT NULL,
			question15-c text NOT NULL,
			question15-d text NOT NULL,
			question15-type text NOT NULL,
			question15-answer text NOT NULL,
			question16-question text NOT NULL,
			question16-a text NOT NULL,
			question16-b text NOT NULL,
			question16-c text NOT NULL,
			question16-d text NOT NULL,
			question16-type text NOT NULL,
			question16-answer text NOT NULL,
			question17-question text NOT NULL,
			question17-a text NOT NULL,
			question17-b text NOT NULL,
			question17-c text NOT NULL,
			question17-d text NOT NULL,
			question17-type text NOT NULL,
			question17-answer text NOT NULL,
			question18-question text NOT NULL,
			question18-a text NOT NULL,
			question18-b text NOT NULL,
			question18-c text NOT NULL,
			question18-d text NOT NULL,
			question18-type text NOT NULL,
			question18-answer text NOT NULL,
			question19-question text NOT NULL,
			question19-a text NOT NULL,
			question19-b text NOT NULL,
			question19-c text NOT NULL,
			question19-d text NOT NULL,
			question19-type text NOT NULL,
			question19-answer text NOT NULL,
			question20-question text NOT NULL,
			question20-a text NOT NULL,
			question20-b text NOT NULL,
			question20-c text NOT NULL,
			question20-d text NOT NULL,
			question20-type text NOT NULL,
			question20-answer text NOT NULL,
		    id MEDIUMINT NOT NULL AUTO_INCREMENT,
		    primary key (id)
		)";
		send_query($conn, $sql);
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
			Question: <input type='text' name='question1-question' class = 'searchbox'><br>
			A: <input type='text' name='question1-a' class = 'searchbox'><br>
			B: <input type='text' name='question1-b' class = 'searchbox'><br>
			C: <input type='text' name='question1-c' class = 'searchbox'><br>
			D: <input type='text' name='question1-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question1-type' class = 'searchbox'><br>
			Answer: <select name="question1-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>2.</h1>
		<div class = "problem">
			Question: <input type='text' name='question2-question' class = 'searchbox'><br>
			A: <input type='text' name='question2-a' class = 'searchbox'><br>
			B: <input type='text' name='question2-b' class = 'searchbox'><br>
			C: <input type='text' name='question2-c' class = 'searchbox'><br>
			D: <input type='text' name='question2-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question2-type' class = 'searchbox'><br>
			Answer: <select name="question2-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select><br>
		</div>
		
	<h1>3.</h1>
		<div class = "problem">
			Question: <input type='text' name='question3-question' class = 'searchbox'><br>
			A: <input type='text' name='question3-a' class = 'searchbox'><br>
			B: <input type='text' name='question3-b' class = 'searchbox'><br>
			C: <input type='text' name='question3-c' class = 'searchbox'><br>
			D: <input type='text' name='question3-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question3-type' class = 'searchbox'><br>
			Answer: <select name="question3-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>4.</h1>
		<div class = "problem">
			Question: <input type='text' name='question4-question' class = 'searchbox'><br>
			A: <input type='text' name='question4-a' class = 'searchbox'><br>
			B: <input type='text' name='question4-b' class = 'searchbox'><br>
			C: <input type='text' name='question4-c' class = 'searchbox'><br>
			D: <input type='text' name='question4-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question4-type' class = 'searchbox'><br>
			Answer: <select name="question4-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>5.</h1>
		<div class = "problem">
			Question: <input type='text' name='question5-question' class = 'searchbox'><br>
			A: <input type='text' name='question5-a' class = 'searchbox'><br>
			B: <input type='text' name='question5-b' class = 'searchbox'><br>
			C: <input type='text' name='question5-c' class = 'searchbox'><br>
			D: <input type='text' name='question5-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question5-type' class = 'searchbox'><br>
			Answer: <select name="question5-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>6.</h1>
		<div class = "problem">
			Question: <input type='text' name='question6-question' class = 'searchbox'><br>
			A: <input type='text' name='question6-a' class = 'searchbox'><br>
			B: <input type='text' name='question6-b' class = 'searchbox'><br>
			C: <input type='text' name='question6-c' class = 'searchbox'><br>
			D: <input type='text' name='question6-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question6-type' class = 'searchbox'><br>
			Answer: <select name="question6-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>7.</h1>
		<div class = "problem">
			Question: <input type='text' name='question7-question' class = 'searchbox'><br>
			A: <input type='text' name='question7-a' class = 'searchbox'><br>
			B: <input type='text' name='question7-b' class = 'searchbox'><br>
			C: <input type='text' name='question7-c' class = 'searchbox'><br>
			D: <input type='text' name='question7-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question7-type' class = 'searchbox'><br>
			Answer: <select name="question7-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>8.</h1>
		<div class = "problem">
			Question: <input type='text' name='question8-question' class = 'searchbox'><br>
			A: <input type='text' name='question8-a' class = 'searchbox'><br>
			B: <input type='text' name='question8-b' class = 'searchbox'><br>
			C: <input type='text' name='question8-c' class = 'searchbox'><br>
			D: <input type='text' name='question8-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question8-type' class = 'searchbox'><br>
			Answer: <select name="question8-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>9.</h1>
		<div class = "problem">
			Question: <input type='text' name='question9-question' class = 'searchbox'><br>
			A: <input type='text' name='question9-a' class = 'searchbox'><br>
			B: <input type='text' name='question9-b' class = 'searchbox'><br>
			C: <input type='text' name='question9-c' class = 'searchbox'><br>
			D: <input type='text' name='question9-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question9-type' class = 'searchbox'><br>
			Answer: <select name="question9-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
	<h1>10.</h1>
		<div class = "problem">
			Question: <input type='text' name='question10-question' class = 'searchbox'><br>
			A: <input type='text' name='question10-a' class = 'searchbox'><br>
			B: <input type='text' name='question10-b' class = 'searchbox'><br>
			C: <input type='text' name='question10-c' class = 'searchbox'><br>
			D: <input type='text' name='question10-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question10-type' class = 'searchbox'><br>
			Answer: <select name="question10-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
	
	<h1>11.</h1>
		<div class = "problem">
			Question: <input type='text' name='question11-question' class = 'searchbox'><br>
			A: <input type='text' name='question11-a' class = 'searchbox'><br>
			B: <input type='text' name='question11-b' class = 'searchbox'><br>
			C: <input type='text' name='question11-c' class = 'searchbox'><br>
			D: <input type='text' name='question11-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question11-type' class = 'searchbox'><br>
			Answer: <select name="question11-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>12.</h1>
		<div class = "problem">
			Question: <input type='text' name='question12-question' class = 'searchbox'><br>
			A: <input type='text' name='question12-a' class = 'searchbox'><br>
			B: <input type='text' name='question12-b' class = 'searchbox'><br>
			C: <input type='text' name='question12-c' class = 'searchbox'><br>
			D: <input type='text' name='question12-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question12-type' class = 'searchbox'><br>
			Answer: <select name="question12-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>13.</h1>
		<div class = "problem">
			Question: <input type='text' name='question13-question' class = 'searchbox'><br>
			A: <input type='text' name='question13-a' class = 'searchbox'><br>
			B: <input type='text' name='question13-b' class = 'searchbox'><br>
			C: <input type='text' name='question13-c' class = 'searchbox'><br>
			D: <input type='text' name='question13-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question13-type' class = 'searchbox'><br>
			Answer: <select name="question13-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>14.</h1>
		<div class = "problem">
			Question: <input type='text' name='question14-question' class = 'searchbox'><br>
			A: <input type='text' name='question14-a' class = 'searchbox'><br>
			B: <input type='text' name='question14-b' class = 'searchbox'><br>
			C: <input type='text' name='question14-c' class = 'searchbox'><br>
			D: <input type='text' name='question14-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question14-type' class = 'searchbox'><br>
			Answer: <select name="question14-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>15.</h1>
		<div class = "problem">
			Question: <input type='text' name='question15-question' class = 'searchbox'><br>
			A: <input type='text' name='question15-a' class = 'searchbox'><br>
			B: <input type='text' name='question15-b' class = 'searchbox'><br>
			C: <input type='text' name='question15-c' class = 'searchbox'><br>
			D: <input type='text' name='question15-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question15-type' class = 'searchbox'><br>
			Answer: <select name="question15-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>16.</h1>
		<div class = "problem">
			Question: <input type='text' name='question16-question' class = 'searchbox'><br>
			A: <input type='text' name='question16-a' class = 'searchbox'><br>
			B: <input type='text' name='question16-b' class = 'searchbox'><br>
			C: <input type='text' name='question16-c' class = 'searchbox'><br>
			D: <input type='text' name='question16-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question16-type' class = 'searchbox'><br>
			Answer: <select name="question16-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>17.</h1>
		<div class = "problem">
			Question: <input type='text' name='question17-question' class = 'searchbox'><br>
			A: <input type='text' name='question17-a' class = 'searchbox'><br>
			B: <input type='text' name='question17-b' class = 'searchbox'><br>
			C: <input type='text' name='question17-c' class = 'searchbox'><br>
			D: <input type='text' name='question17-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question17-type' class = 'searchbox'><br>
			Answer: <select name="question17-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>18.</h1>
		<div class = "problem">
			Question: <input type='text' name='question18-question' class = 'searchbox'><br>
			A: <input type='text' name='question18-a' class = 'searchbox'><br>
			B: <input type='text' name='question18-b' class = 'searchbox'><br>
			C: <input type='text' name='question18-c' class = 'searchbox'><br>
			D: <input type='text' name='question18-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question18-type' class = 'searchbox'><br>
			Answer: <select name="question18-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>19.</h1>
		<div class = "problem">
			Question: <input type='text' name='question19-question' class = 'searchbox'><br>
			A: <input type='text' name='question19-a' class = 'searchbox'><br>
			B: <input type='text' name='question19-b' class = 'searchbox'><br>
			C: <input type='text' name='question19-c' class = 'searchbox'><br>
			D: <input type='text' name='question19-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question19-type' class = 'searchbox'><br>
			Answer: <select name="question19-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
		
		<h1>20.</h1>
		<div class = "problem">
			Question: <input type='text' name='question20-question' class = 'searchbox'><br>
			A: <input type='text' name='question20-a' class = 'searchbox'><br>
			B: <input type='text' name='question20-b' class = 'searchbox'><br>
			C: <input type='text' name='question20-c' class = 'searchbox'><br>
			D: <input type='text' name='question20-d' class = 'searchbox'><br>
			Problem type: <input type='text' name='question20-type' class = 'searchbox'><br>
			Answer: <select name="question20-answer">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="d">D</option>
		  	</select> <br>
		</div>
BOOM;

	

?>