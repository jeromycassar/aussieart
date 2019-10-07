<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Catalogue', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');
unset($_POST);

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
<td class="body-content">
    <!--Main Content-->
    <h2>Artworks</h2><br>
    <table class="products-table">
        <tr>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                            <form method="post" action="product.php">
                              <input type="image" src="images/orange.png" id="product-size">
                              <input type="hidden" name="prodImage" value="images/orange.png">
                              <input type="hidden" name="id" value="A001">
                              <input type="hidden" name="desc" value="Experimenting with overlapping shades of orange, this work expresses the languid lines and vibrancy that is orange.<br><br>Acrylic on MDF 20cm x 20cm">
                              <input type="hidden" name="price" value="$220.00">
                              <input type="hidden" name="prodName" value="Orange">
                              <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Orange</td>
                    </tr>
                    <tr>
                        <td>Alli Elisabet Palmieri</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Hygiene is the Religion of Fascism.png" id="product-size">
                            <input type="hidden" name="prodImage" value="images/Hygiene is the Religion of Fascism.png">
                            <input type="hidden" name="id" value="A002">
                            <input type="hidden" name="desc" value="Grid lines representing bathroom tiles encase one of the artist’s signature colour works and a frame of open space. The necessity.<br><br>Acrylic, glitter, faux fur and glass tiles on MDF 2.5m x 1.5m">
                            <input type="hidden" name="price" value="$380.00">
                            <input type="hidden" name="prodName" value="Hygiene is the Religion of Fascism">
                            <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>HTRoF</td>
                    </tr>
                    <tr>
                        <td>Alli Elisabet Palmieri</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Bod{ily} 1.png" id="product-size">
                            <input type="hidden" name="prodImage" value="images/Bod{ily} 1.png">
                            <input type="hidden" name="id" value="A003">
                            <input type="hidden" name="desc" value="Exploring the converging of forms, this work in an expression of the way bodies can blend and melt into one another during intimate moments.<br><br>Acrylic and glitter on MDF 40cm x 40cm">
                            <input type="hidden" name="price" value="$350.00">
                            <input type="hidden" name="prodName" value="Bod{ily} 1">
                            <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Bod{ily} 1</td>
                    </tr>
                    <tr>
                        <td>Alli Elisabet Palmieri</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Finger a tattoo between your.png" id="product-size">
                            <input type="hidden" name="prodImage" value="images/Finger a tattoo between your.png">
                            <input type="hidden" name="id" value="A004">
                            <input type="hidden" name="desc" value="Acrylic on canvas and plastic.<br>36 x 32.5cm">
                            <input type="hidden" name="price" value="$350.00">
                            <input type="hidden" name="prodName" value="Finger a tattoo between your">
                            <input type="hidden" name="artist" value="Clare Ellison Jakes">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>FaTBY</td>
                    </tr>
                    <tr>
                        <td>Clare Ellison Jakes</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Butterfly map.png" id="product-size">
                            <input type="hidden" name="prodImage" value="images/Butterfly map.png">
                            <input type="hidden" name="id" value="A005">
                            <input type="hidden" name="desc" value="Acrylic on canvas and plastic<br>36cm x 32.5cm">
                            <input type="hidden" name="price" value="$300.00">
                            <input type="hidden" name="prodName" value="Butterfly Map">
                            <input type="hidden" name="artist" value="Clare Ellison Jakes">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Butterfly Map</td>
                    </tr>
                    <tr>
                        <td>Clare Ellison Jakes</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Going to see a man about a dog.png" width="200px" height="200px">
                            <input type="hidden" name="prodImage" value="images/Going to see a man about a dog.png">
                            <input type="hidden" name="id" value="A006">
                            <input type="hidden" name="desc" value="Acrylic on canvas and plastic<br>36cm x 32.5cm">
                            <input type="hidden" name="price" value="$310.00">
                            <input type="hidden" name="prodName" value="Going to see a man about a dog">
                            <input type="hidden" name="artist" value="Clare Ellison Jakes">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>GTSaM</td>
                    </tr>
                    <tr>
                        <td>Clare Ellison Jakes</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Falling Through Tides.png" width="200px" height="200px">
                            <input type="hidden" name="prodImage" value="images/Falling Through Tides.png">
                            <input type="hidden" name="id" value="A007">
                            <input type="hidden" name="desc" value="Acrylic on canvas.<br>100cm x 100cm">
                            <input type="hidden" name="price" value="$290.00">
                            <input type="hidden" name="prodName" value="Falling Through Tides">
                            <input type="hidden" name="artist" value="Hannah Olivia Potter">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Falling Through Tides</td>
                    </tr>
                    <tr>
                        <td>Hannah Olivia Potter</td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/Youre a Funny Girl.png" width="200px" height="200px">
                            <input type="hidden" name="prodImage" value="images/Youre a Funny Girl.png">
                            <input type="hidden" name="id" value="A008">
                            <input type="hidden" name="desc" value="Acrylic on canvas.<br>100cm x 90cm">
                            <input type="hidden" name="price" value="$450.00">
                            <input type="hidden" name="prodName" value="Youre a Funny Girl">
                            <input type="hidden" name="artist" value="Hannah Olivia Potter">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>You're a Funny Girl</td>
                    </tr>
                    <tr>
                        <td>Hannah Olivia Potter</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table class="product-item">
                    <tr>
                        <td>
                          <form action="product.php" method="post">
                            <input type="image" src="images/No Patience, No Virtue.png" width="200px" height="200px">
                            <input type="hidden" name="prodImage" value="images/No Patience, No Virtue.png">
                            <input type="hidden" name="id" value="A009">
                            <input type="hidden" name="desc" value="Acrylic on canvas.<br>30cm x 30cm">
                            <input type="hidden" name="price" value="$425.00">
                            <input type="hidden" name="prodName" value="No Patience, No virtue">
                            <input type="hidden" name="artist" value="Hannah Olivia Potter">
                          </form>
                        </td>
                    </tr>
                    <tr>
                        <td>No Patience, No virtue</td>
                    </tr>
                    <tr>
                        <td>Hannah Olivia Potter</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</td>
<?php
loadBottom();
?>