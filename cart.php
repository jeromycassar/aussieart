<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Cart', 'test');
currentStyleNavLink('background-color:rgb(117, 54, 58)');
?>
  <td class="body-content"><!--Main Content-->
     <?php 
      // post to session (add to cart)
if (isset($_POST["Send"])){
  $_SESSION['cart'][]=$_POST;   
}
  if (!isset($_SESSION["cart"]))
   {
      header("location: products.php");
   }
    
    
              // assign varibles to session 
              for ($x=0; $x<count($_SESSION['cart']); $x++) { 
                    $id = $_SESSION['cart'][$x]['prodImage'];
                    $Title = $_SESSION['cart'][$x]['price'];
                    $Price = $_SESSION['cart'][$x]['artist'];
                    $img_class = "imgintable";         
                    $dollar = "$";
                   

                    // for every item session echo out the following html and php to store varibles 
                   $cart_image = "
                   <div><img class =\"imgintable\" src='../../media/$id.png'></div>";    
                   $table= 
                "<div class=\"table\">
                   <div>
                   <div>$id</div>
                   <div>$Title</div>
                   <div>$dollar$Price</div>
                   </div>
                </div>";
                       echo $table;         
             }

preshow($_SESSION['cart']);

           ?>
  </td>
<?php
loadBottom();
?>
