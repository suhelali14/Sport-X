<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Checkout</span>
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>



<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->




<div class="col-md-12" ><!-- col-md-12 Starts -->
<?php

$ip_add = getRealUserIp();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

$count = mysqli_num_rows($run_cart);

?>


<?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else
{
  
  

while($row_cart = mysqli_fetch_array($run_cart)){

  $pro_id = $row_cart['p_id'];
  
  $pro_size = $row_cart['size'];
 
  $pro_qty = $row_cart['qty'];
  
  $only_price = $row_cart['p_price'];
  
  $get_products = "select * from products where product_id='$pro_id'";
  
  $run_products = mysqli_query($con,$get_products);
  
  while($row_products = mysqli_fetch_array($run_products)){
    $available=$row_products['available'];

  $available=$available-$pro_qty;
  $_SESSION['pro_qty'] = $pro_qty;
 
  }
}


$update_product = "update products set available='$available' where product_id='$pro_id'";

$run_product = mysqli_query($con,$update_product);






  include("payment_options.php");
}



?>


</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>