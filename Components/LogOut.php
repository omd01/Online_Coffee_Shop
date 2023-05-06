<?php 
session_start();
unset($_SESSION['user_data']);
header("location:http://localhost/coffee/index.php");
?>