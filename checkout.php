<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Checkout', $_SESSION["username"]); //title will change based on product selection

$name = $surname = $email = $address = $mobile = $card = $expire = $city = "";
$validate_name = $validate_surname = $validate_email = $validate_address = $validate_mobile = $validate_card = $validate_card = $validate_city = "";
if(!isset($_SESSION['cart'])){
  header("Location: cart.php");
  exit;
}
?>
<!--Main Content-->
<td class="body-content">
    <h2>Checkout</h2>
    <form method="post" target="_self" class="login-form" action="receipt.php" onsubmit="return validateForm();" name="checkout">
        <div class="container">

            <b>Name:</b>
            <input type="text" placeholder="John" name="name" required  style="float:right;">

            <br><br>
            <b>Surname:</b>
            <input type="text" placeholder="Smith" name="surname" required  style="float:right;">

            <br><br>
            <b>Email:</b>
            <input type="text" placeholder="john@student.rmit.edu.au" name="email" required  style="float:right;">

            <br><br>
            <b>Address:</b>
            <input type="text" placeholder="12 Example St, Example" name="address" required  style="float:right;">

            <br><br>
            <b>City:</b>
            <input type="text" placeholder="Melbourne" id="city" name="city" style="float:right;" required >
            <br><br>
            <b>Phone:</b>
            <input type="text" placeholder="04XXXXXXXX" name="mobile" required  style="float:right;">

            <br><br>
            <b>Credit card:</b>
            <input type="text" placeholder="4123 4567 8901 2345" id="cardNum" class oninput="ValidateCreditCardNumber();" name="card" required  style="float:right;">

            <br><br>
            <b>Expiry Date:</b>
            <input type="text" placeholder="e.g. 10/22" name="expire" required  style="float:right;">

            <br><br>
            <b>CVV:</b>
            <input type="text" placeholder="123" name="cvv" required  style="float:right;">

            <br><br>
                <div><br></div>
            <a href="cart.php" class="checkoutbutton">Previous</a>
                <form method="post"><input type="submit" value="confirm" onclick="" class="btn" name='confirm'></form>
        </div>
    </form>
</td>
<?php
loadBottom();
//preShow($_SESSION['cart']);
?>