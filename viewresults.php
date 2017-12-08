<style>
table, th, td {
   border: 1px solid black;
}

	.header {
		text-align:center;
	}
</style>

<h1 class = "header">Tests Taken By Students</h1>
<?php
require("functions.php");
global $conn5;
/// ORDER BY id LIMIT 10
$num = GetTopId("TestResults");
$num = intval($num);
if ($num >= 10) {
	$num1 = $num;
	$num2 = $num - 10;
	$query = "SELECT name, results, totalscore FROM TestResults ORDER by ID LIMIT $num1,$num2";
	echo "<h1>";
	if ($result = mysqli_query($conn5, $query)) {
		/* fetch associative array */
		$rows = array();
		while ($row=mysqli_fetch_assoc($result)) {
			$rows[] = $row;
			foreach ($rows as $row) {
				echo "<h1>" . $row["name"] . "</h1>";
				echo "<p>" . $row["results"] . "</p>";
				echo "<h3>" . $row["totalscore"] . "</h3>";
			}
		}
	}
} 
else {
	if ($num != 0) {
		$num1 = $num;
		$query = "SELECT name, results, totalscore FROM TestResults ORDER by ID LIMIT $num1";
		echo "<h1>";
		if ($result = mysqli_query($conn5, $query)) {
			/* fetch associative array */
			$rows = array();
			while ($row=mysqli_fetch_assoc($result)) {
				$rows[] = $row;
			}
			$rows = $rows;
			echo "<table style='width:40%; margin-left: 30%; text-align: center;'>";
			echo "<tr>
					<th>Name</th>
    				<th>Results</th> 
    				<th>Total Score</th>
  				  </tr>";
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["results"] . "</td>";
				echo "<td>" . $row["totalscore"] . "%</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	else {
		echo "No data!";
	}
}

?>