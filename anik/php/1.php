<html>
<body>

<?php 
echo "WELCOME to PHP";
print_r($_REQUEST);
//validation() or die("Inavalid details");

/*function validation()
{*/
	if($_REQUEST["email"]== "vita" && $_REQUEST["pwd"]=="doit")
	{
		// echo "Your \user id is " $_REQUEST["email"] "and password is" $_["pwd"] ;
		echo "Welcome";
	
	}

	else
	{
		echo "hi";
			/*echo "Invalid User";
		echo "";*/
		Header("Location:../login.php");
	
	
	}
//}
?>

</body>
</html>