<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Cart', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');
?>
  <td class="body-content"><!--Main Content-->
     <?php
     $total = 0.00;
      // post to session (add to cart)
if (isset($_POST["Send"])){
  $_SESSION['cart'][]=$_POST;
}
  if (!isset($_SESSION["cart"]))
   {
      header("location: products.php");
   }else{
              // assign varibles to session
              for ($x = 0; $x < count($_SESSION['cart']); $x++) {
                    $id = $_SESSION['cart'][$x]['prodImage'];
                    $price = $_SESSION['cart'][$x]['price'];
                    $artist = $_SESSION['cart'][$x]['artist'];
                    $name = $_SESSION['cart'][$x]['prodName'];
                    $img_class = "imgintable";
                    $dollar = "$";
                    // for every item session echo out the following html and php to store varibles
                    $item =
                    '<table class="cart-item">
                      <tr class="cart-row">
                        <td class="cart-img"><img src="'.$id.'" width="100px" height="100px"></td>
                        <td class="cart-details">'.$name.'<br><br>'.$artist.'</td>
                        <td class="cart-price">'.$price.'</td>
                        <td class="cart-delete"><button class="delete"><img src="images/delete.png" width="20px" height="20px"></button></td>
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
           <a href="checkout.php" class="checkout-btn"><button class="btn" id="submit" type="submit">Proceed to checkout</button></a>
  </td>
<?php
loadBottom();
unset($_POST);
?>