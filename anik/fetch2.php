<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aniket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	
$ref=$_REQUEST["Fname"];
print_r($ref);
	
$sql="select * from login_details where fname='$ref'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
		echo "fname ="."  ".$row["fname"]."lname ="." ".$row["lname"]."<br>";
}	


$conn->close();
?>