<?php
//--PHP FRAMEWORKS--
function loadTop($title, $username) {
  //get cart
  if(isset($_SESSION['totalcart'])){
    $cartNum = count($_SESSION['totalcart']);
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
      <meta name="description" content="Shop at our online store for artistic pieces created by our national Australian artists!">
      <meta name="keywords" content="art, artworks, Australian art, paintings, acryllic, canvas, MDF, aussieart.com.au, Australia">
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
                  <div id="search">
                      <input oninput="openResults()" type="text" name="search" id="search-bar" placeholder="search";" onkeyup="search();">
                  </div>
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
          
          <div id="FormResult" class="searchresult">
            <p id="listing"></p>
        </div>
       
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
              <li><a href="wishlist.php">Wish List</a></li>
              <li><a href="purchaseHistory.php">Purchase History</a></li>
              <li><a href="sitemap.php">site map</a></li>
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
<script>
var terms = new Array();
var max = 12;
            
for (i=1;i<=max;i++) { 
    terms[i] = new Array();
}
            
terms[1]['search'] = 'cart'; 
terms[1]['des'] = 'Cart Page'; 
terms[1]['lnk'] = 'cart.php';

terms[2]['search'] = 'home'; 
terms[2]['des'] = 'Home Page'; 
terms[2]['lnk'] = 'home.php';

terms[3]['search'] = 'artists artwork paintings'; 
terms[3]['des'] = 'Artists Page'; 
terms[3]['lnk'] = 'artists.php';

terms[4]['search'] = 'alli elsisabet palmieri'; 
terms[4]['des'] = 'Alli Elsisabet Palmieri'; 
terms[4]['lnk'] = 'artists.php';

terms[5]['search'] = 'clare ellison jakes'; 
terms[5]['des'] = 'Clare Ellison Jakes'; 
terms[5]['lnk'] = 'artists.php';
    
terms[6]['search'] = 'hannah olivia potter'; 
terms[6]['des'] = 'Hannah Olivia Potter'; 
terms[6]['lnk'] = 'artists.php';
    
terms[7]['search'] = 'contact us'; 
terms[7]['des'] = 'Contact us Page'; 
terms[7]['lnk'] = 'contact.php';

terms[8]['search'] = 'about us'; 
terms[8]['des'] = 'About us Page'; 
terms[8]['lnk'] = 'about.php';
    
terms[9]['search'] = 'products paintings artwork'; 
terms[9]['des'] = 'Products Page'; 
terms[9]['lnk'] = 'products.php';
    
terms[10]['search'] = 'site map link tabs navigation'; 
terms[10]['des'] = 'Site Map'; 
terms[10]['lnk'] = 'sitemap.php';
    
terms[11]['search'] = 'wish list'; 
terms[11]['des'] = 'Wish list'; 
terms[11]['lnk'] = 'wishlist.php';
    
terms[12]['search'] = 'purchase history orders'; 
terms[12]['des'] = 'Purchase History'; 
terms[12]['lnk'] = 'purchaseHistory.php';
    
    function openResults() {
   if (document.getElementById("search-bar").value){
        document.getElementById("FormResult").style.display = "block";
        document.getElementById("FormResult").style.visibility = "visible";
    }else{
       document.getElementById("FormResult").style.display = "none";
         document.getElementById("FormResult").style.visibility = "hidden";
        }
    }
function search() {
    document.getElementById("listing").style.display = "none";
    var input = document.getElementById('search-bar').value.toLowerCase();
    var i=0;
    var list="";
    var pos=-1;
                
    if(input!="") { 
        for(i=1; i<=max; i++) { 
            pos= terms[i]['search'].indexOf(input);
            
            if(pos!=-1) { 
                list= list + '<a class="search_lnk" href="'+terms[i]['lnk']+'">' + terms[i]['des'] + '</a>' + '<br>'; 
            }   
            pos=-1;
        }
        console.log(list);
        if(document.getElementById("search-bar").value === ""){ 
            document.getElementById("listing").style.display = "none";
            document.getElementById("FormResult").style.visibility = "hidden";
            document.getElementById("listing").innerHTML = "";
        } else { 
            document.getElementById("listing").innerHTML = list;
            document.getElementById("listing").style.display = "block";
        }
    }
}
</script>