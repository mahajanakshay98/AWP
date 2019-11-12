<?php

include("2.php");

// Create table
$sql = "create table login_details(
		id int Auto_increment primary key Not Null,
		fname varchar(20) Not Null,
		lname varchar(20) Not Null,
		age int Not Null,
		DOB varchar(20) Not Null,
		gender varchar(20) Not Null,
		phone varchar(20) Not Null,
		address varchar(20) Not Null,
		pincode varchar(20) Not Null,
		Email varchar(20) Not Null,
		Education varchar(20) Not Null,
		Hobbies varchar(20) )";

if ($conn->query($sql) === TRUE)
	{
		echo "Table created successfully";
	} 
	else 
	{
		echo "Error creating Table: " . $conn->error;
	}

//$conn->close();

?>