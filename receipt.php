<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Your Receipt', $_SESSION["username"]);

 if (!isset($_SESSION["cart"]))
   {
      header("location: products.php");
   }

if (isset($_POST["confirm"])){
$userdata = array();
    // store varibles
        $userdata['date'] = date('d/m h:i A');
        $userdata['name'] = $_POST['name'];
        $userdata['surname'] = $_POST['surname'];
        $userdata['email'] = $_POST['email'];
        $userdata['mobile'] = $_POST['mobile'];
        $userdata['address'] = $_POST['address']; 
    
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
    <label><strong>Name: </strong>
        <?=$_SESSION['order'][0]['name']?><br></label>
    <label><strong>Email: </strong>
        <?=$_SESSION['order'][0]['email']?><br></label>
    <label><strong>Address: </strong>
        <?=$_SESSION['order'][0]['address']?><br></label>
    <label> <strong>Mobile: </strong>
        <?=$_SESSION['order'][0]['mobile']?><br></label>
    <div id="order">

        <h3>Your Order:</h3><br>
        <table>
            <tr>
                <?php
    $numItems = count($_SESSION['order']);
    for ($i=0; $i < $numItems; $i++){

        echo "<tr>";
        echo "<td class='make an class'>" . $_SESSION['cart'][$i]['prodName'] . "</td>";
        echo "<td class='make an class'>" . $_SESSION['cart'][$i]['artist'] . "</td>";
        echo "<td class='make an class'>" . $_SESSION['order'][$i]['price'] . "</td>";
        //preshow($_SESSION['order']);
    }
            ?>
            </tr>
        </table>
    </div>
</td>
<?php
loadBottom();
?>
