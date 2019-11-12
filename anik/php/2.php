<html>
<body>

<?php 
echo "WELCOME to PHP";
print_r($_REQUEST);

	if($_REQUEST["rad"]=="plus")
	{
		echo $_REQUEST["num1"]+$_REQUEST["num2"];
	}
	else
	{
	echo $_REQUEST["num1"]-$_REQUEST["num2"];
	}
?>
</body>
</html>