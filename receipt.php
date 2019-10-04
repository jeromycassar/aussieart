<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Your Receipt', $_SESSION["username"]);

 if (!isset($_SESSION["cart"]))
   {
      header("location: products.php");
   }

//preshow($_SESSION);

if (isset($_POST["confirm"])){
$userdata = array();
    // store varibles
        $userdata['date'] = date('d/m h:i A');
        $userdata['name'] = $_POST['name'];
        $userdata['surname'] = $_POST['surname'];
        $userdata['email'] = $_POST['email'];
        $userdata['mobile'] = $_POST['mobile'];
        $userdata['address'] = $_POST['address'];
        $userdata['city'] = $_POST['city'];
        $userdata['card'] = $_POST['card'];

$order = array();
$numItems = count($_SESSION['cart']);
//merge arrays below
for($i=0; $i < $numItems; $i++){
$order[$i] = array_merge($userdata, $_SESSION['cart'][$i]);
}

}



?>
<td class="body-content">
    <!--Main Content-->
    <div id="order">

        <h3>Your Receipt:</h3><br>
        <table class="receipt">
            <tr class="cart-row">
                <td class="receipt-head" bgcolor="#af565c"><label class="receipt-label"><strong>Name: </strong>
                        <?=$userdata['name']?><br></label>
                    <label class="receipt-label"><strong>Email: </strong>
                        <?=$userdata['email']?><br></label>
                    <label class="receipt-label"> <strong>Mobile: </strong>
                        <?=$userdata['mobile']?><br></label>
                    <label class="receipt-label"><strong>Address: </strong>
                        <?=$userdata['address']?><br></label>
                    <label class="receipt-label"><strong>City: </strong>
                        <?=$userdata['city']?><br></label></td>
                <td class="recipt-details" style="text-align:right; " bgcolor="#af565c"><img id="logo" src="images/aussieart_logo2.png" width="200px" height="100px"></td>
            </tr>
            <tr class="cart-row">
                <td class="recipt-customer"><br></td>
            </tr>
            <?php
    for ($x = 0; $x < count($_SESSION['cart']); $x++) {
                    $id = $_SESSION['cart'][$x]['prodImage'];
                    $price = $_SESSION['cart'][$x]['price'];
                    $artist = $_SESSION['cart'][$x]['artist'];
                    $prodName = $_SESSION['cart'][$x]['prodName'];
                    $img_class = "imgintable";     
                    $total += str_replace('$','', $price);
                    // for every item session echo out the following html and php to store varibles
                    $item =
                    '
                      <tr class="cart-row">
                        <td class="receipt-details"> <strong>Artwork: </strong>'.$prodName.'<strong>Artist: </strong>'.$artist.'
                        <td class="recipt-price">'.$price.'</td>
                      </tr>
                    ';
                    echo $item;
             }
            ?>
            <tr class="cart-row">
                <td></td>
                <td class="cart-row"><label><strong>Total Cost: </strong>
                        <?php echo '$'.number_format($total,2) ?><br></label></td>
            </tr>
            <tr class="cart-row">
                <td class="recipt-customer"><br></td>
            </tr>
            <tr>
                <td class="receipt-head" bgcolor="#af565c"><label class="receipt-label"><strong>Card No: </strong>
                        <?=$userdata['card']?><br></label></td>
                <td class="receipt-head" bgcolor="#af565c"><label class="receipt-label"><strong>Date: </strong>
                        <?=$userdata['date']?><br></label></td>
            </tr>
        </table>
    </div>
</td>
<?php
loadBottom();
//preshow($_SESSION['cart']);
//preshow($_SESSION);
// unset varibles 
//$numItems = count($_SESSION['cart']);
//for($i = 0; $i<$numItems;$i++){
//unset($_SESSION['cart'][$i]);
//}
?>
