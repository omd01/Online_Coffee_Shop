<?php   include "connection.php";
        include "links.php";

session_start();
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responsive coffee shop website</title>
  
</head>

<body>


<h2><?php echo $_SESSION['user_data'][8];?> </h2>

    <!-- header section starts  -->
    <header class="header">
        <a href="/index.html" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>

        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div><i id="login-btn" class="fa-solid fa-user"></i></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>


        <!------------ Login Container ----------- -->

        <?php include "Components/LoginContainer.php"?>


        <!-- ---------- cart-items-container --------- -->
        <?php include "Components/Cart.php"?>

    </header>

    

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3>fresh coffee in the morning</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat   labore, sint cupiditate distinctio
            tempora reiciendis.</p>
            <a href="#" class="btn">Cafena</a>
        </div>

    </section>



    <!-- about section starts  -->
    <?php include "Components/about.php";?>



    <!-- menu section starts  -->
    <?php include "Components/menu.php";?> 

   

    <!-- Product section starts  -->
    <?php include "Components/Product.php";?> 



    <!-- review section starts  -->
    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>



    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30067.311850986272!2d75.77559083236628!3d19.609591454164033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdae4adcc25d25f%3A0xbb5722e15b920129!2sAmbad%2C%20Maharashtra%20431204!5e0!3m2!1sen!2sin!4v1665062263703!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>



    <!-- blogs section starts  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">tasty and refreshing coffee</a>
                    <span>by admin / 21st may, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>



    <!-- footer section starts  -->
    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">blogs</a>
        </div>

        <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

    </section>



    <!-- custom js file link  -->
    <script src="js/index.js"></script>

</body>

</html>


