<?php

include ("2.php");
$f=$_REQUEST["fname"];
$l=$_REQUEST["lname"];
$a=$_REQUEST["age"];
$d=$_REQUEST["DOB"];
$g=$_REQUEST["gender"];
$p=$_REQUEST["phone"];
$add=$_REQUEST["address"];
$pin=$_REQUEST["pincode"];
$e=$_REQUEST["Email"];
$Edu=$_REQUEST["Education"]; 
$h=implode(",",$_REQUEST["Hobbies"]);


$stmt=$conn->prepare("INSERT INTO login_details(fname,lname,age,DOB,gender,phone,address,pincode,Email,Education,Hobbies)
	  values (?,?,?,?,?,?,?,?,?,?,?)" );
	  

$stmt->bind_param("ssissssssss",$fname,$lname,$age,$DOB,$gender,$phone,$address,$pincode,$Email,$Education,$Hobbies);
$fname=$f;
$lname=$l;
$age=$a;
$DOB=$d;
$gender=$g;
$phone=$p;
$address=$add;
$pincode=$pin;
$Email=$e;
$Education=$Edu;
$Hobbies=$h;


$stmt->execute();
$stmt->close();
$conn->close();




?>