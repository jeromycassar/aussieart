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
    <body><!--Content-->
      <table id="content-table">
          <tr>
              <td class="body-spacing"></td>
              <td class="body-content"><!--Main Content-->
                <div class="prod-container">
                  <div id="prod-left">
                    <a href="products.php" class="btn">&#17; Back</a><br>
                    <img style="margin-top:15px;" src="images/ThomA-1.jpg" height="200px" width="200px">
                    <p class="prod-price" name="price"></p><br>
                    <p id="product-font">Artist: </p><br><span class="artist-name">Ann Thompson</span><br><br>
                    <p id="product-font">Themes: </p><br><span class="prod-themes">warm, earthy, abstract</span>
                  </div>
                  <div id="prod-right">
                    <p class="prod-name" name="name"><strong>Abstract Painting 1</strong></p><br>
                    <p class="prod-desc">
                      This art piece endures warm, earthy colours, perfect for hanging on bland walls. This art piece by Ann Thompson will bring color.
                    </p><br><br>
                    <button class="btn">Add to Cart</button>
                  </div>
                </div>
              </td>
              <td class="body-spacing"></td>
          </tr>
      </table>
  </body><!--End of Content-->
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
