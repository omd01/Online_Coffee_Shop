<section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">
        <?php
            $selectrquerty = "select * from product" ;
            $query = mysqli_query($con,$selectrquerty);
            while($result = mysqli_fetch_array($query)){
                if($result['pro_cat'] === "solid"){
        ?>
        
            <div class="box">
               
                <div class="image">
                <img src="<?php echo $result["pro_img"] ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo $result["pro_name"] ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price"><?php echo $result["pro_price"] ?><span> .00</span></div>
                </div>
                <div class="icons">
                    <a href="./Components/AddToCart.php?pro_id=<?php echo $result["pro_id"]?>" class="btn"> Add To Cart</a>
                
                </div>
            </div>
            <?php }} ?>
            

        </div>

    </section>