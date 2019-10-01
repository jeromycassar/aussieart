<<<<<<< HEAD
<?php
session_start();
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
                    <h2>Artworks</h2><br>
                    <table class="products-table">
                        <tr>
                            <td>
                                    <table class="product-item">
                                        <tr>
                                            <td>
                                                <form method="get" action="product.php">
                                                    <input type="image" src="images/ThomA-1.jpg" id="product-size"/>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Abstract Painting 1</td>
                                        </tr>
                                        <tr>
                                            <td>Ann Thompson</td>
                                        </tr>
                                    </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/ThomA-2.jpg"id="product-size"></td>
                                    </tr>
                                    <tr>
                                        <td>Abstract Painting 2</td>
                                    </tr>
                                    <tr>
                                        <td>Ann Thompson</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/ThomA-3.jpg" id="product-size"></td>
                                    </tr>
                                    <tr>
                                        <td>Abstract Painting 3</td>
                                    </tr>
                                    <tr>
                                        <td>Ann Thompson</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-1.jpg" id="product-size"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 1</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-2.jpg" id="product-size"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 2</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-3.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 3</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-4.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 4</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-5.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 5</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-6.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 6</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/TjapT-7.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Indigenous Painting 7</td>
                                    </tr>
                                    <tr>
                                        <td>Thomas Tjapaltjarri</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/morwA-1.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Skull 1</td>
                                    </tr>
                                    <tr>
                                        <td>Angela Morris-Winmill</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/morwA-2.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Skull 2</td>
                                    </tr>
                                    <tr>
                                        <td>Angela Morris-Winmill</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/morwA-3.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Skull 3</td>
                                    </tr>
                                    <tr>
                                        <td>Angela Morris-Winmill</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="product-item">
                                    <tr>
                                        <td><img src="images/morwA-4.jpg" width="200px" height="200px"></td>
                                    </tr>
                                    <tr>
                                        <td>Skull 4</td>
                                    </tr>
                                    <tr>
                                        <td>Angela Morris-Winmill</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
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
<?php
session_start();
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
                        <p id="greeting"><?php echo "Login as ". $_SESSION["usernamel"]?></p>
                    </td>
                </tr>
            </table>
        </div>
        <nav class="nav-bar">
            <!--Navigation Bar-->
            <a href="home.php">home</a>
            <a href="home.php">products</a>
            <a href="home.php">help</a>
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
                <a href='login.php' style="position:relative; bottom:2px;">login</a>
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
                            <li><a href="product.php">Product</a></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="middle">
                        </ul>
                    </td>
                    <td>
                        <ul class="right">
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
>>>>>>> 19562a07718a265d15f6d7b9d18897a7ab6d052b
