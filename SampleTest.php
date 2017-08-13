<?php
	
?>

<div class = "problem">
<form action="SampleTest.php" method="post">
    <select name="question1-answer">
		   	<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
			<option value="d">D</option>
	</select> 
    <input type="submit" name="formSubmit" value="Submit" />
	<?php
	if (isset($_POST['question1-answer'])) {
		echo "<br>";
		$answer1 = $_POST['question1-answer'];
		echo $answer1;
	}
	?>
</form>
</div>
