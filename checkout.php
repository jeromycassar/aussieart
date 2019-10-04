<?php
session_start();
include_once('tools.php');
loadTop('aussieart - checkout', $_SESSION["username"]); //title will change based on product selection
$name = $surname = $email = $address = $mobile = $card = $expire = "";
$validate_name = $validate_surname = $validate_email = $validate_address = $validate_mobile = $validate_card = $validate_card = "";
if(!isset($_SESSION['cart']))
{
    header("Location: cart.php");
    exit;
}
if(isset( $_POST['name'])){
     $name = $_POST['name'];
    if (empty($_POST['name'])){
        $validate_name = false;
        }else{
    if (preg_match("/([^0-9]*)|^[a-zA-Z,'-\s]*$/", $name)){
         $validate_name = true;
    }else{
        $validate_name = false;
         $_POST['name'] = false;
}
    }
}
if(isset( $_POST['surname'])){
    $surname = $_POST['surname'];
     if (empty($_POST['surname'])){
        $validate_surname = false;
        }else{
    if (preg_match("/([^0-9]*)|^[a-zA-Z,'-\s]*$/", $surname)){
         $validate_surname = true;
    }else{
        $validate_surname = false;
         $_POST['surname'] = "invalid";
}
     }
}
$validate_email = true;
if(isset($_POST['email'])){
    $email = $_POST['email'];
    if (empty($_POST['email'])){
        $validate_email = false;
        }else{
     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         $validate_email = true;
    }else{
        $validate_email = false;
         $_POST['email'] = "invalid";
}
}
}
$validate_address =true;
if(isset($_POST['address'])){
    $address= $_POST['address'];
    if (empty($_POST['address'])){
        $validate_address = false;
        }else{
if (preg_match("/^[0-9a-zA-Z,.-\s]*$/", $address)){
         $validate_address =true;
    }else{
        $validate_address = false;
         $_POST['address'] = "invalid";
}
    }
}
 $validate_mobile = true;
if(isset($_POST['mobile'])){
    $mobile = $_POST['mobile'];
     if (empty($_POST['mobile'])){
        $validate_mobile = false;
        }else{
if (preg_match("/^[0-9]{4}\s[0-9]{4}|[0-9]{8}/", $mobile)){
         $validate_mobile = true;
    }else{
        $validate_mobile = false;
         $_POST['mobile'] = "invalid";
}
     }
}
$validate_card = true;
if(isset($_POST['card'])){
    $card = $_POST['card'];
    if (empty($_POST['card'])){
        $validate_card = false;
        }else{
 if (preg_match('/^\d{12,19}$/', $card)){
         $validate_card = true;
    }else{
        $validate_card = false;
         $_POST['card'] = "invalid";
}
}
}
$validate_time = true;
if(isset($_POST['expire'])){
    $expire = $_POST['expire'];
    if (empty($_POST['expire'])){
        $expire_error = "Invalid Date";
        $validate_time = false;
        }else{
        $expire = str_replace(' ','',$_POST['expire']);
        $exp_year = substr($expire, 2);
        $exp_month = substr($expire, 0, 2);
        if (!preg_match("/[0-9]{4}|[0-9]{2}\s[0-9]{2}/", $expire)){
        $expire_error = "Incorrect format. numbers with or without spaces";
        $validate_time = false;
        }else{
        $exp_year = (int)$exp_year;
        $exp_month = (int)$exp_month;
        $current_month = (int)date("m");
        $current_year = (int)date("y");
        if($exp_month > 12 || $exp_year < $current_year){
            $expire_error = "Months must nor be less then 12 and Year cannot be earlier then current?>";
            $validate_time =false;
        }
        $compare = $exp_month - $current_month;
        if($compare<= 0 && $exp_year == $current_year){
            $expire_error = "credit card cannot expire within a month of purchase";
            $validate_time =false;
        }
    }
    }
    //$validate_time = true;
}



$receiptPage = "";
if(isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['address'], $_POST['mobile'], $_POST['card'], $_POST['expire']))
if($validate_name === false){
    //header("Location: checkout.php");
    }else{
    if($validate_surname === false){
        //header("Location: checkout.php");
        }else{
        if($validate_email === false){
            //header("Location: checkout.php");
            }else{
            if($validate_address === false){
                //header("Location: checkout.php");
                }else{
                if($validate_mobile === false){
                    //header("Location: checkout.php");
                    }else{
                        if($validate_card === false){
                            //header("Location: checkout.php");
                        }else{
                            if($validate_time === false){
                                //header("Location: checkout.php");
                        }else{
                                $receiptPage = "receipt.php";
                                //header("Location: receipt.php");
                    }
                }
            }
        }
    }
}
}
?>
<!--Main Content-->
<td class="body-content">
    <h2>Checkout</h2>
    <form method="post" target="_self" class="login-form" action="<?php echo $receiptPage; ?>" onsubmit="return validateForm();" name="checkout">
        <div class="container">

            <b>Name:</b>
            <input type="text" placeholder="John" name="name" required value="<?= $name ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_name == false){echo "invalid Name";}?></a>
            <br><br>
            <b>Surname:</b>
            <input type="text" placeholder="Smith" name="surname" required value="<?= $surname ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_surname == false){echo "invalid Surname";}?></a>
            <br><br>
            <b>Email:</b>
            <input type="text" placeholder="john@student.rmit.edu.au" name="email" required value="<?= $email ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_email == false){echo "invalid Email";}?></a>
            <br><br>
            <b>Address:</b>
            <input type="text" placeholder="14 Bean Road Richmond" name="address" required value="<?= $address ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_address == false){echo "invalid Address";}?></a>
            <br><br>
            <b>Phone:</b>
            <input type="text" placeholder="0495846628" name="mobile" required value="<?= $mobile ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_mobile === false){echo "invalid Mobile";}?></a>
            <br><br>
            <b>Credit card:</b>
            <input type="text" placeholder="4123 4567 8901 2345" id="cardNum" class oninput="ValidateCreditCardNumber();" name="card" required value="<?= $card ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"])&& $validate_card === false){echo "invalid Card number";}?></a>
            <!--<div class="hidden"><img id="visa" src='images/visa.png'></div>-->
            <br><br>
            <b>Expiry Date:</b>
            <input type="text" placeholder="10 20 or 1020 (mmyy)" name="expire" required value="<?= $expire ?>" style="float:right;">
            <a class="invalid">
                <?php if(isset($_POST["confirm"]) && $validate_time === false){echo $expire_error;}?></a>
            <br><br>
                <a href="cart.php" class="checkoutbutton">Previous</a>
                <div><br></div>
                <form method="post"><input type="submit" value="confirm" onclick="" class="btn" name='confirm'></form>
        </div>
    </form>
</td>
<?php
loadBottom();
?>
