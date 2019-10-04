<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Product', 'test'); //title will change based on product selection
?>
<!--Main Content-->
<td class="body-content">
    <h2>Checkout</h2>
    <form method="post" target="_self" action="<?php echo $receiptPage; ?>" onsubmit="return validateForm();" name="checkout">
        <div class="container">
            <div>
                <b>Name:</b>
                <input type="text" placeholder="John" name="name" required value="<?= $name ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_name == false){echo "invalid Name";}?></a>
            </div>
            <div>
                <b>Surname:</b>
                <input type="text" placeholder="Smith" name="surname" required value="<?= $surname ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_surname == false){echo "invalid Surname";}?></a>
            </div>

            <div>
                <b>Email:</b>
                <input type="text" placeholder="john@student.rmit.edu.au" name="email" required value="<?= $email ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_email == false){echo "invalid Email";}?></a>
            </div>

            <div>
                <b>Address:</b>
                <input type="text" placeholder="14 Bean Road Richmond" name="address" required value="<?= $address ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_address == false){echo "invalid Address";}?></a>
            </div>

            <div>
                <b>Mobile Phone:</b>
                <input type="text" placeholder="0495846628" name="mobile" required value="<?= $mobile ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_mobile === false){echo "invalid Mobile";}?></a>
            </div>

            <div>
                <b>Credit card:</b>
                <input type="text" placeholder="4123 4567 8901 2345" id = "cardNum" class  oninput="ValidateCreditCardNumber();" name="card" required value="<?= $card ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"])&& $validate_card === false){echo "invalid Card number";}?></a>
                        <div class ="hidden"><img id="visa" src='../../media/visa.png'></div>
            </div>
           
            <div>
                <b>Expiry Date:</b>
                <input type="text" placeholder="10 20 or 1020 (mmyy)" name="expire" required value="<?= $expire ?>">
                <a class="invalid">
                    <?php if(isset($_POST["confirm"]) && $validate_time === false){echo $expire_error;}?></a>
            </div>

            <div class="wrapper">
                <a href="cart.php" class="checkoutbutton">Previous</a>
                <div><br></div>
                <form method="post"><input type="submit" value="confirm" onclick="" class=" checkoutbutton" name='confirm'></form>
            </div>
        </div>
    </form>
    <script type="text/jscript">
        function CheckPassword() {
            password = document.getElementById('password').value;
            if (password.length < 6) {
                document.getElementById('submit').disabled = true;
                document.getElementById('submit').innerHTML = "Register";
            } else {
                document.getElementById('submit').disabled = false;
                document.getElementById('submit').innerHTML = "Register";
            }
        }

        function validateform() {
            var x = document.forms["register"]["username"].value;
            if (x == "") {
                alert("User name or password cannot be empty");
                return false;
            }
        }

    </script>
</td>
<?php
loadBottom();
?>
