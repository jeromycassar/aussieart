<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Purchase History', $_SESSION["username"]);
//check if the user has remained signed in
if(!isset($_SESSION['username'])){
  echo '<script>window.location.href = "login.php";</script>';
}
//unset($_SESSION['purchase']);
?>
  <td class="body-content"><!--Main Content-->
    <h3>Purchase History</h3><br>
    <?php
    $id = $price = $artist = $name = $date_of_purchase = "";
    if(isset($_SESSION['purchase'])){
      for ($x = 0; $x < count($_SESSION['purchase']); $x++) {
            $id = $_SESSION['purchase'][$x]['prodImage'];
            $price = $_SESSION['purchase'][$x]['price'];
            $artist = $_SESSION['purchase'][$x]['artist'];
            $name = $_SESSION['purchase'][$x]['prodName'];
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
        }
    }else{
        echo "<p>You haven't purchased a product from our site yet! <br> Browse our <a href='products.php'>products</a> page to see our talented artists and their work!<p>";
    }
    ?>
  </td>
<?php
loadBottom();
//preShow($_SESSION['purchase']);
?>
