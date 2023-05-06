<?php 

session_start();


 
unset($_SESSION['cart']);

    
header("location:http://localhost/coffee/index.php");
?>