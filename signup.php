<?php include "connection.php";
include "links.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>


</head>
<body>
    
<!-- header section starts  -->


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



</header>


<!-- contact section starts  -->

<section class="contact signup" id="signup">

    <div class="row">
     

    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
            <h3>Sign Up</h3>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input required type="text" name="first_name" placeholder="First Name">
                <input required type="text" name="last_name" placeholder="Last Nme">
            </div>

            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input required type="email" name="email" placeholder="Email">
            </div>

            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input required type="number" name="phone" placeholder="Number">
            </div>

            <div class="inputBox">
                <span><i class="fa-solid fa-location-dot"></i></span>
                <textarea type="text" name="address"></textarea>
                <input required type="text" name="city" placeholder="City">
            </div>

            <div class="inputBox">
                <span><i class="fa-solid fa-lock"></i></span>
                <input required type="password" name="password" placeholder="Password">
            </div>

            <div class="inputBox">
                <span><i class="fa-solid fa-lock"></i></span>
                <input required type="password" name="repassword" placeholder="Re-Enter Password">
            </div>

            <button class="btn" name="submit" type="submit">Sign Up</button>

        </form>








<?php 




if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($con,$_POST["first_name"]);
    $last_name = mysqli_real_escape_string($con,$_POST["last_name"]);
    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $phone = mysqli_real_escape_string($con,$_POST["phone"]);
    $address = mysqli_real_escape_string($con,$_POST["address"]);
    $city = mysqli_real_escape_string($con,$_POST["city"]);
    $password = mysqli_real_escape_string($con,$_POST["password"]);
    $repassword = mysqli_real_escape_string($con,$_POST["repassword"]);

    $emailquery = "select * from user where email='$email'";
    $query = mysqli_query($con,$emailquery);
 
    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0){
        echo "<h1>Email alredy Exist</h1>";
    }
    else{
    if($password === $repassword){
        $insert_query = "INSERT INTO `user`(`user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `password`) VALUES ('','$first_name','$last_name','$email','$phone','$address','$city','$password')";

        $query = mysqli_query($con,$insert_query);

        if($query){
       header("location:index.php");
        }

        else{
            echo "Somthing Went Wrong";
        }
    }
    else{
        echo "<h1>Password Dosent Match</h1>";
    }
}

}

?>
       

    </div>

</section>

<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    
    <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>