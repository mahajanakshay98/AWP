<?php 
session_start();
session_unset();
?>
<html>
<body>

<?php 

echo "WELCOME to PHP";
foreach($_REQUEST as $k=>$v)
{
	$_SESSION["$k"]=$v;
}
print_r($_SESSION);

?>
<a href="../book.html">click</a>
<a href="bill.php">billllll</a>
</body>
</html>