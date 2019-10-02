<?php
session_start();
<<<<<<< HEAD
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <!--Head: JS/Fonts/CSS-->
    <title>aussieart - Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
</head>
<!--End of head-->
<div class="wrapper">
    <!--Wrapper-->
    <header>
        <!--Header-->
        <div class="top">
            <!--Logo and Login-->
            <table id="header-table">
                <tr>
                    <td></td>
                    <td><a href=''><img id="logo" src="images/aussieart_logo2.png" width="400px" height="120px"></a></td>
                    <td>
                        <p id="greeting">
                            <?php echo "Login as ". $_SESSION["usernamel"]?>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <nav class="nav-bar">
            <!--Navigation Bar-->
            <a href="home.php">home</a>
            <a href="products.php">products</a>
            <div class="topnav-centered">
                <form id="search" method="POST">
                    <input type="text" name="search" id="search-bar" placeholder="search">
                </form>
            </div>
            <div class="topnav-right">
                <a class="cart-link" href=''>
                    <div class="cart-wrapper">
                        <span id="cart-num">0</span>
                        <img id="cart" src="images/shopping-cart.png" width="22px" height="22px">
                    </div>
                </a>
                <a href='login.php' style="position:relative; bottom:2px;">Log out</a>
            </div>
        </nav>
        <!--End of Navigation Bar-->
    </header>
    <!--End of header-->

    <body>
        <!--Content-->
        <table id="content-table">
            <tr>
                <td class="body-spacing"></td>
                <td class="body-content">
                    <!--Main Content-->

                    <div class="home-table">
=======
include_once('tools.php');
loadTop('aussieart - Home', 'test');
currentStyleNavLink('background-color:rgb(117, 54, 58)');
?>
  <td class="body-content"><!--Main Content-->
    <div class="home-table">
>>>>>>> jeromy-branch
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
<<<<<<< HEAD
                                <td>Sculptures</td>
=======
                                <td>Skulptures</td>
>>>>>>> jeromy-branch
                                <td>Abstract</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <label id="home-Title"><strong>Best selling Artist</strong></label>

                        <label id="home-label"><strong>Thomas Tjapaltjarri</strong></label>
                        <br>
<<<<<<< HEAD
                        <Div class=home-des>
                            <p id="home-label">Thomas Tjapaltjarri is an Australian Aboriginal artist. He and his brothers Warlimpirrnga and Walala have become well known as the Tjapaltjarri Brothers. Tjapaltjarri and his family became known as the last group of Aborigines to come into contact with modern, European society.</p>
                        </Div>
=======
                        <div class="home-des">
                            <p id="home-label">Thomas Tjapaltjarri is an Australian Aboriginal artist. He and his brothers Warlimpirrnga and Walala have become well known as the Tjapaltjarri Brothers. Tjapaltjarri and his family became known as the last group of Aborigines to come into contact with modern, European society.</p>
                        </div>
>>>>>>> jeromy-branch
                        <br>
                        <table>
                            <tr>
                                <td><img src="images/TjapT-2.jpg" id="product-size"></td>
                                <td><img src="images/TjapT-3.jpg" id="product-size"></td>
                                <td><img src="images/TjapT-4.jpg" id="product-size"></td>
                            </tr>
                        </table>
                    </div>
<<<<<<< HEAD
                </td>
                <td class="body-spacing"></td>
            </tr>
        </table>
    </body>
    <!--End of Content-->
    <footer>
        <!--Footer-->
        <nav class="footer-bar">
            <!--Footer Navigation Bar-->
            <table id="header-table">
                <tr>
                    <td>
                        <ul>
                            <li><a href="about.php">about us</a></li>
                            <li><a href="contact.php">contact us</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="middle">
                        </ul> 
                    </td>
                    <td>
                        <ul>
                            <li><a id="right" href="http://www.facebook.com"><img  src="images/faceb.png" width="35px" height="35px"></a></li>
                            <li><a id="right" href="http://www.twitter.com"><img  src="images/twit.png" width="35px" height="35px"></a></li>
                            <li><a id="right" href="http://www.instagram.com"><img  src="images/insta.png" width="35px" height="35px"></a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </nav>
        <!--End of Footer Navigation Bar-->
    </footer>
    <!--End of Footer-->
</div>
<!--End of wrapper-->

</html>
<!--End of html-->
=======
  </td>
<?php
loadBottom();
?>
>>>>>>> jeromy-branch
