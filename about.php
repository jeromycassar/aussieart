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
                <h2>About Us</h2><br>
                <h3>Mission Statement</h3><br>
                <p class="italic">'To provide high-quality artworks presented by official artists. We as a company will provide easy shipment and deliveries,
                  catering for all around Australia and internationally.'</p><br><br>
                <h3>What we're all about</h3><br>
                <p>aussieart is a platform dedicated to connecting Australian artists to the global marketplace.
                  We believe that geographical distance shouldn't limit awareness or accessibility and that all aussie artists should get 'a fair dinkum go' at selling their art.
                  With this ethos in mind we created 'aussieart', an E-Commerce platform where Australian artists can connect and sell their work direct to the international consumers
                  without the dodgy commission fees charged by art dealers and galleries.
                </p>
              </td>
              <td class="body-spacing"></td>
          </tr>
      </table>
  </body><!--End of Content-->
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
