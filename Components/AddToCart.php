<?php 
include "connection.php";
session_start();

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
};

if(in_array( $_GET['pro_id'],$_SESSION['cart']) ){
    echo "Item Already exist In Cart";
    header('location:http://localhost/coffee/index.php');

}
else{
    array_push($_SESSION['cart'],$_GET['pro_id']);
    header('location:http://localhost/coffee/index.php');
}


 ?>

