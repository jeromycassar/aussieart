<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Your Receipt', $_SESSION["username"]);

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}

 if (!isset($_SESSION["totalcart"]))
   {
      echo "<script>window.location.href='products.php';</script>";
   }

//preshow($_SESSION);
$total = 0.00;
$filename = '../database/orders/'.$_SESSION['username'].'.txt'; //create file name
if (isset($_POST["confirm"])){
$userdata = array();
    // store varibles
        $userdata['date'] = date('d/m/Y');
        $userdata['name'] = $_POST['name'];
        $userdata['surname'] = $_POST['surname'];
        $userdata['email'] = $_POST['email'];
        $userdata['mobile'] = $_POST['mobile'];
        $userdata['address'] = $_POST['address'];
        $userdata['city'] = $_POST['city'];
        $userdata['card'] = $_POST['card'];

$order = array();
$numItems = count($_SESSION['totalcart']);
//merge arrays below
  for($i=0; $i < $numItems; $i++){
    $order[$i] = array_merge($userdata, $_SESSION['totalcart'][$i]);
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
    for ($x = 0; $x < count($_SESSION['totalcart']); $x++) {
                    $id = $_SESSION['totalcart'][$x]['prodImage'];
                    $price = $_SESSION['totalcart'][$x]['price'];
                    $artist = $_SESSION['totalcart'][$x]['artist'];
                    $prodName = $_SESSION['totalcart'][$x]['prodName'];
                    $total += str_replace('$','', $price);
                    // for every item session echo out the following html and php to store varibles
                $item =
                    '
                      <tr class="cart-row">
                        <td class="receipt-details"> <strong>Artwork: </strong>'.$prodName.'<strong><br>Artist: </strong>'.$artist.'
                        <td class="recipt-price">'.$price.'</td>
                      </tr>
                    ';
                    echo $item;
             }
             //send order to text file
            if(!empty( $_POST['totalcart'])){
            $exist = 0;
             //if file exists, append to that file
            $string_data = file_get_contents("database/orders/ben.txt");
            $explode = explode("<!-- explode -->", $string_data);
            $count = count($explode);
            for($i = 0; $i < $count; $i++){
                $array = unserialize($explode[$i]);
                if ( $_SESSION["username"] == $_SESSION["username"]){
                    $exist = 1;
            }
            }
             if ($exist == 1) {
               //write to file
                 $content = serialize($_SESSION['totalcart']);
                 echo $content;
                file_put_contents("database/orders/ben.txt", $content . "<!-- explode -->", FILE_APPEND);
             }
            }
                    //send order to purchase history
                    $_SESSION['purchase']=$_SESSION['totalcart'];
                    
             //reset cart
             unset($_SESSION['totalcart']);
                    
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
    <div style="text-align:center;">
      <label id="home-label">
        Thank you for shopping with us! Your estimated delivery is between:<br>
        <?php
        $firstDay = date('d/m/Y', time() + (86400*10));
        $secondDay = date('d/m/Y', time() + (86400*15));
        echo $firstDay.' - '.$secondDay;
        ?>
      </label>
    </div>
</td>
<?php
loadBottom();
?>