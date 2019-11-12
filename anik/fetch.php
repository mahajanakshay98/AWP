<?php

include ("2.php");
/*
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
}*/
$q1="select * from dept;";
$r1=$conn->query($q1);
print_r($r1);


if ($r1->num_rows > 0) 
{
	
	while($row = $conn->fetch_assoc())
	{
		echo "<option value='name1'>".$row['fname']."</option>";
	}	
}
//print_r($row['fname']);
echo "<select name='name'>
        <option value='name1'></option>
        <option value='name2'></option> 
        <option value='name3'></option> 
        <option value='name4'></option> 
        </select>";
		  



//$stmt->close();
$conn->close();

?>