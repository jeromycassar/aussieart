<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Sitemap', $_SESSION["username"]);

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
<td class="body-content"><!--Main Content-->
  <h3>Sitemap</h3><br>
  <table class="sitemap-table">
    <tr>
      <td>
        <table>
          <tr>
            <th colspan="2">Main Pages</th>
          </tr>
          <tr>
            <td><a href="home.php">Home Page</a></td>
            <td><a href="artists.php">Artists Page</a></td>
          </tr>
          <tr>
            <td><a href="products.php">Products Page</a></td>
            <td><a href="cart.php">Cart Page</a></td>
          </tr>
        </table>
      </td>
      <td>
        <table>
          <tr>
            <th colspan="2">Other</th>
          </tr>
          <tr>
            <td><a href="about.php">About Us Page</a></td>
            <td><a href="contact.php">Contact Us Page</a></td>
          </tr>
          <tr>
            <td><a href="wishlist.php">Wishlist Page</a></td>
            <td><a href="purchaseHistory.php">Purchase History Page</a></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <br>
  <table class="sitemap-table">
    <tr>
      <th colspan="3">Advanced Features</th>
    </tr>
    <tr>
      <td>
        Search Bar (all pages):<br><br>
        <a href="home.php">Home Page</a>
      </td>
      <td>
        Wishlist:<br><br>
        <a href="wishlist.php">Wishlist Page</a>
      </td>
      <td>
        Purchase History:<br><br>
        <a href="purchaseHistory.php">Purchase History</a>
      </td>
    </tr>
  </table>
</td>
<?php
loadBottom();
?>