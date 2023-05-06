<section class="menu" id="menu">
        <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <?php
            $selectrquerty = "select * from product" ;
            $query = mysqli_query($con,$selectrquerty);
            while($result = mysqli_fetch_array($query)){
                if($result['pro_cat'] === "liquid"){
        ?>

        <div class="box">
            <img src="<?php echo $result["pro_img"] ?>" alt="">
            
            <h3><?php echo $result["pro_name"] ?></h3>

            <p><?php echo $result["pro_desc"] ?></p>

            <div class="price">₹ <?php echo $result["pro_price"] ?>
            <span>.00</span></div>

            <a href="./Components/AddToCart.php?pro_id=<?php echo $result["pro_id"]?>" class="btn">add to cart</a>

            
        </div>



        <?php }} ?>
    </div>


    </section>