<div class="cart-items-container">
<?php 
include "connection.php";
if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
};
if($_SESSION['cart']){
    foreach($_SESSION['cart'] as $pro_id){
        $selectrquerty = "select * from product where pro_id = '$pro_id'";
        $query = mysqli_query($con,$selectrquerty);
        
        if($query){
          while ($result = mysqli_fetch_array($query)) {
           ?>
           <div class="cart-item">
                 <a href="./components/DltCartPro.php?pro_id=<?php  echo $result['0'];?>"> <span class="fas fa-times" ></span> </a> 
            
                      <img src="<?php  echo $result['4'];?>" alt="<?php  echo $result['1'];?>">
                          <div class="content">
                              <h3><?php  echo $result['1'];?></h3>
                              <div class="price"><?php  echo $result['3'];?>/-</div>
                          </div>
                  </div>
           <?php
          }
        }
      }
}
else{
    echo "<h2> Your cart is empty ! </h2>";
}

 ?>

 <?php if($_SESSION['cart'])
 {
  ?>
   <a href="./Components/ClearCart.php" class="btn">Clear Cart</a>
   <a href="#" class="btn">checkout now</a>
  <?php
 }
?>  
        
        </div>

