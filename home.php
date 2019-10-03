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
                <td><img src="images/TjapT-1.jpg" id="product-size"></td>
                <td><img src="images/morwA-1.jpg" id="product-size"></td>
                <td><img src="images/ThomA-3.jpg" id="product-size"></td>
            </tr>
            <tr>
                <td>Cultural</td>

                <td>Sculptures</td>

                <td>Abstract</td>
            </tr>
        </table>
        <br>
        <br>
        <label id="home-Title"><strong>Best selling Artist</strong></label>

        <label id="home-label"><strong>Thomas Tjapaltjarri</strong></label>
        <br>

        <Div class=home-des>
            <p id="home-label">Thomas Tjapaltjarri is an Australian Aboriginal artist. He and his brothers Warlimpirrnga and Walala have become well known as the Tjapaltjarri Brothers. Tjapaltjarri and his family became known as the last group of Aborigines to come into contact with modern, European society.</p>
        </Div>

        <br>
        <table>
            <tr>
                <td><img src="images/TjapT-2.jpg" id="product-size"></td>
                <td><img src="images/TjapT-3.jpg" id="product-size"></td>
                <td><img src="images/TjapT-4.jpg" id="product-size"></td>
            </tr>
        </table>
    </div>
</td>
<?php
loadBottom();
?>
>>>>>>> jeromy-branch
