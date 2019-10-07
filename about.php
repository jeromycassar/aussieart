<?php
session_start();
include_once('tools.php');
loadTop('aussieart - About Us', $_SESSION["username"]);

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
<td class="body-content">
    <!--Main Content-->
    <h2>About Us</h2><br>
    <h3>Mission Statement</h3><br>
    <p id="fontcolour" class="italic">'To provide high-quality artworks presented by official artists. We as a company will provide easy shipment and deliveries,
        catering for all around Australia and internationally.'</p><br><br>
    <h3>What we're all about</h3><br>
    <p id="fontcolour">aussieart is a platform dedicated to connecting Australian artists to the global marketplace.
        We believe that geographical distance shouldn't limit awareness or accessibility and that all aussie artists should get 'a fair dinkum go' at selling their art.
        With this ethos in mind we created 'aussieart', an E-Commerce platform where Australian artists can connect and sell their work direct to the international consumers
        without the dodgy commission fees charged by art dealers and galleries.
    </p><br>
    <h3>What we offer to customers</h3><br>
    <p>
        <ul>
            <li id="fontcolour" class="dot-point">
                <span>Connection</span><br>Customers can purchase direct from the artist which provides a more meaningful connection and value to the art piece purchased
            </li>
            <br>
            <li id="fontcolour" class="dot-point">
                <span>Experience</span><br>Customers can have the gallery experience when browsing work by reading the artists own description of their piece
            </li>
            <br>
            <li id="fontcolour" class="dot-point">
                <span>Transparency</span><br>There aren’t any secret fees that will be charged as typically would when purchasing from a gallery or art dealer
            </li>
        </ul>

</td>
<?php
loadBottom();
?>
