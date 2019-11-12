<?php
$servername="localhost";
$username="root";
$password="root";

//check db connection
$conn=new mysqli("$servername","$username","$password");

if($conn->connect_error == TRUE)
	die("db connection failed!!!!");
else
	echo "Connection successfully established <br>";



$sql="create database akshay";

if($conn->query($sql) === TRUE)
{
	echo "database created";
}
else 
{
	echo "Database already created!!!!";
}

// to include database schema

include("createtable.php");

include("insert_prepare.php");

$conn->close();


?>