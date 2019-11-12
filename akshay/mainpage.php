<!doctype html>
<html>
<head>
<link rel="stylesheet" href="cs.css" type="text/css" />
</head>

<body>
<?php

	include("h.html");
	session_start();
	
	if($_SESSION["user"])
	{
		echo "<h1 align='left'>Welcome:</h1>".$_SESSION["user"];
	}
	else
	{
		echo "<br><br>";
		echo "session timed out";
	}
 ?>

<img src="1.jpg"  />


</body>
</html>

