<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang='en'>
<head> <!--Head-->
  <title>aussieart - Products</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/CSS" href="stylesheets/style.css">
</head><!--End of head-->
<div class="wrapper"><!--Wrapper-->
  <header><!--Header-->
      <div class="top"><!--Logo and Login-->
          <table id="header-table">
              <tr>
                  <td></td>
                  <td><a href=''><img id="logo" src="images/aussieart_logo2.png" width="400px" height="120px"></a></td>
                  <td><p id="greeting"></p></td>
              </tr>
          </table>
      </div>
      <nav class="nav-bar"><!--Navigation Bar-->
          <a href="home.php">home</a>
          <a href="products.php">products</a>
          <a href=''>help</a>
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
            <a href='' style="position:relative; bottom:2px;">login</a>
          </div>
      </nav><!--End of Navigation Bar-->
  </header><!--End of header-->
  <body><!--Content-->
      <table id="content-table">
          <tr>
              <td class="body-spacing"></td>
              <td class="body-content"><!--Main Content-->
                <h2>Artworks</h2><br>
                <table class="products-table">
                  <tr>
                    <td>
                      <table>
                        <tr>
                          <td><img src="images\Products\Ann Thomson\2497_1_m.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Ann Thomson\8666_1_m.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Ann Thomson\8836_1_m.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\13476.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\13554.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\13821.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\541174_1_grid.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\DES618-800x1582.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\Thomas-Jap-015102-1.jpg" width="200px" height="200px"></td>
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
                      <table>
                        <tr>
                          <td><img src="images\Products\Thomas Tjapaltjarri\Thomas-Tjapaltjarri-6506bg.jpg" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                          <td>Indigenous Painting 7</td>
                        </tr>
                        <tr>
                          <td>Thomas Tjapaltjarri</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
              <td class="body-spacing"></td>
          </tr>
      </table>
  </body><!--End of Content-->
  <footer><!--Footer-->
    <nav class="footer-bar"><!--Footer Navigation Bar-->
      <table id="header-table">
        <tr>
          <td>
            <ul>
              <li><a href=''>about us</a></li>
              <li><a href=''>contact us</a></li>
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
    </nav><!--End of Footer Navigation Bar-->
  </footer><!--End of Footer-->
</div><!--End of wrapper-->
</html><!--End of html-->
