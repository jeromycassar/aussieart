<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Home', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');
?>
<td class="body-content">
    <!--Main Content-->
    <div class="home-table">
        <label id="home-Title"><strong>Mission Statement</strong></label>
        <label id="home-label"><i>"To provide high-quality artworks presented by official artists. We as a company will provide easy shipment and deliveries, catering for all around Australia and internationally.'"</i></label>
        <br>
        <label id="home-Title"><strong>Browse by Art Style</strong></label>
        <table>
            <tr>
                <td><img src="images/Butterfly map.png" id="product-size" class="product-item"></td>
                <td><img src="images/orange.png" id="product-size" class="product-item"></td>
                <td><img src="images/Falling Through Tides.png" id="product-size" class="product-item"></td>
            </tr>
            <tr>
                <td>Acryllic</td>
                <td>Paintings</td>
                <td>Abstract</td>
            </tr>
        </table>
        <br>
        <br>
        <label id="home-Title"><strong>Best selling Artist</strong></label>
        <label id="home-label"><strong>Clare Ellison Jakes</strong></label>
        <br>
        <img src="images/Screen Shot 2019-09-30 at 8.30.18 am.png" width="250px" height="160px"><br>
        <div class="home-des">
            <p id="home-label">
              Clare Ellison Jakes is a visual artist, working in Naarm (Melbourne). CEJ acknowledges the traditional Custodians throughout Australia. In particular the Wurundjeri people of the Kulin Nation where she lives and works, and recognises their continuing connection to land, waters and culture. She pays her respects to their Elders past, present and the emerging leaders of tomorrow.
            </p><br>
            <h3>Popular Art Pieces from the Art:</h3>
        </div>

        <br>
        <table>
            <tr>
                <td>
                  <form action="product.php" method="post" class="product-item">
                    <input type="image" src="images/Finger a tattoo between your.png" id="product-size">
                    <input type="hidden" name="prodImage" value="images/Finger a tattoo between your.png">
                    <input type="hidden" name="id" value="A004">
                    <input type="hidden" name="desc" value="Acrylic on canvas and plastic.<br>36 x 32.5cm">
                    <input type="hidden" name="price" value="$350.00">
                    <input type="hidden" name="prodName" value="Finger a tattoo between your">
                    <input type="hidden" name="artist" value="Clare Ellison Jakes">
                  </form>
                </td>
                <td>
                  <form action="product.php" method="post" class="product-item">
                    <input type="image" src="images/Butterfly map.png" id="product-size">
                    <input type="hidden" name="prodImage" value="images/Butterfly map.png">
                    <input type="hidden" name="id" value="A005">
                    <input type="hidden" name="desc" value="Acrylic on canvas and plastic<br>36cm x 32.5cm">
                    <input type="hidden" name="price" value="$300.00">
                    <input type="hidden" name="prodName" value="Butterfly Map">
                    <input type="hidden" name="artist" value="Clare Ellison Jakes">
                  </form>
                </td>
                <td>
                  <form action="product.php" method="post" class="product-item">
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
        </table>
    </div>
</td>
<?php
loadBottom();
?>
