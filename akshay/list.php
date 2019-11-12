<?php

$u=$_REQUEST["user"];
$p=$_REQUEST["pass"];

include("conn.php");

$sql="select * from login where user='$u'";
$result=$conn->query($sql);

while($row = $result->fetch_assoc())
{
		//echo "Username=".$row["user"]."  "."password:".$row["pass"]."<BR/>";
		if($u == $row["user"] && $p == $row["pass"])
		 {
			 session_start();
			 $_SESSION["user"]=$u;
			 $_SESSION["pass"]=$p;
			 echo "welcome"." ". $row['user'];
			 include("h.html");
		 }	
		else
		{
				include("error.php");
		}
}




$sql="select image from login where user='$u'";
$result=$conn->query($sql);

while($row = $result->fetch_assoc())
{ ?>
	<img src=" <?php echo $row['image']; ?>" />
<?php 
}
$conn->close();
?>

