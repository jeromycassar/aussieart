<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Product', $_SESSION["username"]); //title will change based on product selection

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}

$prodImage = $_POST['prodImage'];
$price = $_POST['price'];
$artist = $_POST['artist'];
$prodName = $_POST['prodName'];
$desc = $_POST['desc'];



?>
<td class="body-content">
    <!--Main Content-->
    <div class="prod-container">
            <div id="prod-left">
                <p>
	<a href="javascript:history.go(-1)"  class="btn" title="Return to the previous page">&laquo; back</a>
</p><br>
                <img style="margin-top:15px;" src="<?php echo $_POST['prodImage']?>" height="200px" width="200px">
                <p class="prod-price" name="price">
                    <?php echo $_POST['price']?>
                </p><br>
                <p id="product-font">Artist: </p><br><span class="artist-name">
                    <?php echo $_POST['artist']?></span><br><br>
                <p id="product-font">Themes: </p><br><span class="prod-themes"></span>
            </div>

            <div id="prod-right">
                <p class="prod-name"><strong>
                        <?php echo $_POST['prodName']?></strong></p><br>
                <p class="prod-desc">
                    <?php echo $_POST['desc']?>
                </p><br><br>
                </div>
        <form method="post" target="_self" action="cart.php" name="product">
            <input type="hidden" name="prodImage" value="<?= $prodImage?>">
            <input type="hidden" name="price" value="<?= $price?>">
            <input type="hidden" name="artist" value="<?= $artist?>">
            <input type="hidden"name="prodName" value="<?= $prodName?>">
            <input type="hidden"name="desc" value="<?= $desc?>">
           <button type="submit" class="btn" name='Send'>Add to Cart</button>
        </form>
        
        <form method="post" target="_self" action="wishlist.php" name="wishlist">
            <input type="hidden" name="prodImage" value="<?= $prodImage?>">
            <input type="hidden" name="price" value="<?= $price?>">
            <input type="hidden" name="artist" value="<?= $artist?>">
            <input type="hidden"name="prodName" value="<?= $prodName?>">
            <input type="hidden"name="desc" value="<?= $desc?>">
           <button type="submit" class="btn" name='wishlist'>Add to Wishlist</button>
        </form>
        
    </div>
</td>
<?php
loadBottom();
?>
