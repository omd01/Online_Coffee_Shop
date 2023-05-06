<?php include "connection.php";
include "links.php"; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin</title>


</head>
<body>
    
<!-- header section starts  -->

<!-- 
<header class="header">

    <a href="/index.php" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php#about">about</a>
        <a href="index.php#menu">menu</a>
        <a href="index.php#products">products</a>
        <a href="index.php#review">review</a>
        <a href="index.php#contact">contact</a>
        <a href="index.php#blogs">blogs</a>

    </nav>

    <div class="icons">
    
    </div>



</header> -->

<?php if($_SESSION['user_data'][8] == 1)
{
    ?>
<h1>Hii Admin <?php echo $_SESSION['user_data'][1]; ?></h1>
    <?php
  
}
else{
    header("location:http://localhost/coffee/index.php");
}
?>















<!-- footer section starts  -->
<!-- 
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    
    <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

</section> -->

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>