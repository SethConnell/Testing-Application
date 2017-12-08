<?php
	function totaltest($tablename){
		require("functions.php");
		$sql = "SELECT * FROM $tablename";
		$result = $conn3->query($sql);
		
		
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arrayvar = Array();
				for($i = 1; $i < 20; ++$i){
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
			echo "0 results";
		};
	}

	echo totaltest("blaaah")["question4_question"]; // this echos question 4 from the test 


	
	
?>

<form method="post" action="check.php">
    <select name="website_string">
        <option value="" selected="selected"></option>
        <option VALUE="abc"> ABC</option>
        <option VALUE="def"> def</option>
        <option VALUE="hij"> hij</option>
    </select>
    <INPUT TYPE="submit" name="submit" />
</form>