<?php
//--PHP FRAMEWORKS--
function loadTop($title, $username) {
  //get cart
  if(isset($_SESSION['cart'])){
    $cartNum = count($_SESSION['cart']);
  } else {
    $cartNum = 0;
  }
  //print html
  $top = <<<"TOP"
  <!DOCTYPE html>
  <html lang='en'>

  <head>
      <!--Head: JS/Fonts/CSS-->
      <title>$title</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
      <script type="text/javascript" src="js/script.js"></script>
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
                      <td><a href='home.php'><img id="logo" src="images/aussieart_logo2.png" width="400px" height="120px"></a></td>
                      <td>
                          <p id="greeting">Welcome, $username</p>
                      </td>
                  </tr>
              </table>
          </div>
          <nav class="nav-bar">
              <!--Navigation Bar-->
              <a href="home.php">home</a>
              <a href="products.php">products</a>
              <a href="artists.php">artists</a>
              <div class="topnav-centered">
                  <form id="search" method="POST">
                      <input type="text" name="search" id="search-bar" placeholder="search">
                  </form>
              </div>
              <div class="topnav-right">
                  <a class="cart-link" href='cart.php'>
                      <div class="cart-wrapper">
                          <span id="cart-num">$cartNum</span>
                          <img id="cart" src="images/shopping-cart.png" width="22px" height="22px">
                      </div>
                  </a>
                  <a href='login.php' style="position:relative; bottom:2px;">log out</a>
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
TOP;
  echo $top;
}

function loadBottom(){
  $bottom = <<<"BOTTOM"
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
              <li><a href="#">site map</a></li>
          </ul>
      </td>
      <td>
          <ul class="middle">

          </ul>
      </td>
      <td>
          <ul class="right">
            <li><a id="right" href="http://www.facebook.com"><img  src="images/faceb.png" width="35px" height="30px"></a></li>
            <li><a id="right" href="http://www.twitter.com"><img  src="images/twit.png" width="35px" height="30px"></a></li>
            <li><a id="right" href="http://www.instagram.com"><img  src="images/insta.png" width="35px" height="30px"></a></li>
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
BOTTOM;
  echo $bottom;
}

function loadTopLoginRegister($title) {
  $top = <<<"TOP"
  <!DOCTYPE html>
  <html lang='en'>

  <head>
      <!--Head: JS/Fonts/CSS-->
      <title>$title</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
      <script type="text/javascript" src="js/script.js"></script>
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
                      <td><img id="logo" src="images/aussieart_logo2.png" width="400px" height="120px"></td>
                      <td>
                          <p></p>
                      </td>
                  </tr>
              </table>
          </div>
          <nav class="nav-bar">
          </nav>
          <!--End of Navigation Bar-->
      </header>
      <!--End of header-->
      <body>
          <!--Content-->
          <table id="content-table">
              <tr>
                  <td class="body-spacing"></td>
TOP;
  echo $top;
}
function loadBottomLoginRegister(){
  $bottom = <<<"BOTTOM"
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
BOTTOM;
  echo $bottom;
}
//--SETTING CURRENT ACTIVE PAGE--
function currentStyleNavLink($css) {
  $here = $_SERVER['SCRIPT_NAME'];
  $bits = explode('/',$here);
  $filename = $bits[count($bits)-1];
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}

//--VIEWING ARRAY CONTENTS--
function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

?>