<?php
session_start();
include_once('tools.php');
loadTop('aussieart - wishlist', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
  <td class="body-content"><!--Main Content-->
      <h2>Wishlist</h2><br>
     
      <?php
      if (isset($_POST["clear"])){
   unset($_SESSION['wishlist']);
          unset($_SESSION['cart']);
}
     $total = 0.00;
      // post to session (add to cart)
      if (isset($_POST["wishlist"])){
    $_SESSION['wishlist'][]=$_POST;
      }      
    if (!isset($_SESSION["wishlist"]))
        {
            echo "<label class='login-form' id='home-Title'>Your wishlist is empty.</label>";
        echo "<p class='register-form'>You haven't added a product to your wishlist yet!";
            }else{
              // assign varibles to session
              for ($x = 0; $x < count($_SESSION['wishlist']); $x++) {
                    $id = $_SESSION['wishlist'][$x]['prodImage'];
                    $price = $_SESSION['wishlist'][$x]['price'];
                    $artist = $_SESSION['wishlist'][$x]['artist'];
                    $name = $_SESSION['wishlist'][$x]['prodName'];
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
           ?>
      
      <table class="login-form">
             <tr>
                 <td><a href="cart.php" class="checkout-btn"><button class="btn" id="add" name="add" type="submit">Add all to cart</button></a></td>
                 <td></td>
                 <td><form method="POST"><button class="btn" id="clear" name="clear" type="submit">Empty wishlist</button></form></td>
             </tr>
           </table>
  </td>
<?php
loadBottom();
unset($_POST["wishlist"]);
?>