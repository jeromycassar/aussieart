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

                    <div class="home-table">
                        <label id="home-label"><i>"This is where the mission statment will appear."</i></label>
                        <label id="home-label">Browse by theme</label>
                        <table>
                            <tr>
                                <td><img src="images/TjapT-1.jpg" width="270px" height="270px"></td>
                                <td><img src="images/TjapT-2.jpg" width="270px" height="270px"></td>
                                <td><img src="images/ThomA-3.jpg" width="270px" height="270px"></td>
                            </tr>
                            <tr>
                                <td><label id="home-label">Culture</label></td>
                                <td><label id="home-label">Pattern</label></td>
                                <td><label id="home-label">Abstract</label></td>
                            </tr>
                        </table>

                        <label id="home-label">Best selling Artist</label>
                        <label id="home-label"><strong>Ann Thompson</strong></label>
                        <table>
                            <tr>
                                <td><img src="images/ThomA-1.jpg" width="270px" height="270px"></td>
                                <td><img src="images/ThomA-2.jpg" width="270px" height="270px"></td>
                                <td><img src="images/ThomA-3.jpg" width="270px" height="270px"></td>
                            </tr>
                        </table>

                    </div>




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
