<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Cart', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
  <td class="body-content"><!--Main Content-->
       <h2>Cart</h2><br>
     <?php
      if (isset($_POST["clear"])){
   unset($_SESSION['cart']);
unset($_SESSION['totalcart']);
unset($_SESSION['mycart']);
}
      
      
     $total = 0.00;
      // post to session (add to cart)
if (isset($_POST["Send"])){
  $_SESSION['cart'][]=$_POST;
}
      
if(isset($_SESSION['wishlist']) and isset($_SESSION['cart']) ){
  $_SESSION['totalcart']= array_merge($_SESSION['cart'],$_SESSION['wishlist']);
}elseif(isset($_SESSION['cart']) and isset($_SESSION['mycart']) ){
    $_SESSION['totalcart']=  $_SESSION['mycart'];
    $_SESSION['totalcart']= array_merge($_SESSION['mycart'],$_SESSION['cart']);
}elseif(isset($_SESSION['wishlist']) and isset($_SESSION['mycart']) ){
    $_SESSION['totalcart']=  $_SESSION['mycart'];
    $_SESSION['totalcart']= array_merge($_SESSION['mycart'],$_SESSION['wishlist']);
}elseif(isset($_SESSION['cart'])){
    $_SESSION['totalcart']=$_SESSION['cart'];
}elseif(isset($_SESSION['wishlist'])){
    $_SESSION['totalcart']=$_SESSION['wishlist'];
}

     // echo "cart----------------------------------------------";
     // preshow($_SESSION['cart']);
      //echo "whishlist-----------------------------------------";
     // preshow($_SESSION['wishlist']);
      // echo "totalcart-----------------------------------------";
     // preshow($_SESSION['totalcart']);
      
  if (!isset($_SESSION["totalcart"]))
   {
      echo "<script>window.location.href='home.php';</script>";
   }else{
              // assign varibles to session
              for ($x = 0; $x < count($_SESSION['totalcart']); $x++) {
                    $id = $_SESSION['totalcart'][$x]['prodImage'];
                    $price = $_SESSION['totalcart'][$x]['price'];
                    $artist = $_SESSION['totalcart'][$x]['artist'];
                    $name = $_SESSION['totalcart'][$x]['prodName'];
                    $img_class = "imgintable";
                    $dollar = "$";
                    // for every item session echo out the following html and php to store varibles
                    $item =
                    '<table class="cart-item">
                      <tr class="cart-row">
                        <td class="cart-img"><img src="'.$id.'" width="100px" height="100px"></td>
                        <td class="cart-details">'.$name.'<br><br>'.$artist.'</td>
                        <td class="cart-price">'.$price.'</td>
                      </tr>
                    </table>';
                    echo $item;
                    //get total price
                    $total += str_replace('$','', $price);
             }
           }
            //preshow($_SESSION['cart']);
           ?>
           <table>
             <tr>
               <td><p class="cart-prices">Subtotal: <?php echo '$'.number_format($total,2) ?></p></td>
             </tr>
             <tr>
               <td><p class="cart-prices">Shipping: $5.00</p></td>
             </tr>
             <tr>
               <td><h3 class="cart-prices" id="h3-cart">Total: <?php echo '$'.number_format(($total+5.00),2)?></h3></td>
             </tr>
           </table>
      <table class="login-form">
             <tr>
                 <td><a href="checkout.php" class="checkout-btn"><button class="btn" id="submit" type="submit">Proceed to checkout</button></a></td>
                 <td></td>
                 <td><form method="POST"><button class="btn" id="clear" name="clear" type="submit">Empty Cart</button></form></td>
             </tr>
           </table>
  </td>
<?php
loadBottom();
unset($_POST);
?>