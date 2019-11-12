<?php
session_start();
include("h.html");

echo $_SESSION["user"];

include ("conn.php");
$sql="select * from login";
$result=$conn->query($sql);
echo  "<table border='1'><tr><th>USERNAME</th><th>PASSWORD</th></tr>";
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>".$row["user"]."</td><td> ".$row["pass"]."</td></tr>";
	}
}
$conn->close();
echo "</table>";
?>