<?php
session_start();


session_unset();
session_destroy();

include("Form.php");
echo $_SESSION["user"];

?>