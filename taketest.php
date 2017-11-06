<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
<?php
	require("functions.php");
	
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

	function getproblems() {
		$query = "SELECT ID FROM $tablename";
	}

	
	$query = "SELECT ID FROM $tablename";
    $result = mysqli_query($conn3, $query);
	send_query($conn4, $sql);
?>
</body>

</html>