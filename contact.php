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
                <h2>Contact Us</h2>
                <br>
                <h3>Fill in our contact us form below or email us at: aussieart@aussieart.com.au</h3>
                <br>
                <form method="post" class="contact-us-form">
                  <table>
                    <tr>
                      <td>
                        <label for="firstname">First Name</label><br>
                        <input type="text" id="firstname" name="firstname">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="lastname">Last Name</label><br>
                        <input type="text" id="lastname" name="lastname">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="comments">Comments</label><br>
                        <textarea id="comments" name="comments" cols="30" rows="10" placeholder="Enter your query here"></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td class="contact-center">
                        <button type="submit" class="btn">Submit</button>
                        <button type="reset" class="btn">Clear</button>
                      </td>
                    </tr>
                  </table>
                </form>
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
