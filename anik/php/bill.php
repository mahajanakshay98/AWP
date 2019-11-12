<?php
session_start();




echo "<table border='1'><tr><th>Book</th><th>price</th></tr>";
$sum=0;
foreach($_SESSION as $k=>$v)
{
	echo "<tr><td>$k</td><td>$v</td></tr>";
	$sum=$sum+$v;
}
echo "<tr><td>total</td><td>$sum</td></tr></table>";
echo $sum;
?>
