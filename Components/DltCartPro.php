<?php 

session_start();



function dltcartitm($var){

   return $var !== $_GET['pro_id'];

}

$_SESSION['cart'] = array_filter($_SESSION['cart'],"dltcartitm");


    
header("location:http://localhost/coffee/index.php");

?>