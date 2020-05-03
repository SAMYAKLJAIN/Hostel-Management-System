<?php
echo "mas";
session_start();
$_SESSION=array();

session_destroy();
header("Location:home.php");
?>
