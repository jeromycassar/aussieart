<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Purchase History', $_SESSION["username"]);

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}

?>
  <td class="body-content"><!--Main Content-->
    <?php
    $filename = 'database/orders/'.$_SESSION["username"].'.txt'; //create file name
    //if file exists show all orders
    if (file_exists($filename)) {
      $fp = fopen($filename, 'r');
      $temp_file = file_get_contents($filename);
      $explode = explode("|", $temp_file);
      $count = count($explode);
      for($i = 0; $i < $count; $i++) {
          $purchase = array(
            'date' => $explode[0],
            'firstname' => $explode[1],
            'lastname' => $explode[2],
            'email' => $explode[3],
            'mobile' => $explode[4],
            'address' => $explode[5],
            'city' => $explode[6],
            'price' => $explode[9],
            'artist' => $explode[10],
            'prod_name' => $explode[11]
          );
        $purchase = str_replace(chr(34), "", $purchase);
        }
        preShow($purchase);
        fclose($fp);
      }else{
        echo "<p>You haven't purchased a product from our site yet! <br> Visit our <a href='products.php'>products</a> page to see our talented artists and their work!<p>";
      }
    ?>
  </td>
<?php
loadBottom();
?>