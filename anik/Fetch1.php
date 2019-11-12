<?php

include ("2.php");

$sql="select fname from login_details;";
$r1=$conn->query($sql);



$query="SELECT fname,lname FROM login_details";



//https://www.php.net/manual/en/mysqli-stmt.fetch.php

if($stmt = $conn->prepare($query))
{
	echo "<table border='1'>";
	echo "<tr><th>Fname</td>"."<th>Lname</th></tr>";
	$stmt->execute();
	$stmt->bind_result($fname,$lname);
	while($stmt->fetch())
	{
		 //printf ("%s (%s)\n", $fname, $lname);
			
			echo "<tr><td>$fname</td>"."<td>$lname</td></tr>";
	}
	
	echo "</table>";
}


if ($r1->num_rows > 0) 
{
	echo "<select>";
	while($row = $r1->fetch_assoc())
	{
		echo "<option value='name1'>".$row['fname']."</option>";
	}
echo "</select>";	
}

		  

$stmt->close();

$conn->close();

?>