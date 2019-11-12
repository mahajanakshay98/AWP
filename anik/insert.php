<?php

include ("2.php");
$f=$_REQUEST["fname"];
$l=$_REQUEST["lname"];
$a=$_REQUEST["age"];


$sql="INSERT INTO login_details(fname,lname,age)
	  values ('$f','$l','$a')" ;
	  
if ($conn->query($sql) === TRUE)
	{
		echo "Entry created successfully";
	} 
	else 
	{
		echo "Error creating Entry: " . $conn->error;
	}	  






?>