<?php 
session_start();
session_unset(); // unset all session variables
header("Location: ../index.php");
?>
