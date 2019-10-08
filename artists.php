<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Artists', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');
//check if the user has remained signed in
if(!isset($_SESSION['username'])){
  echo '<script>window.location.href = "login.php";</script>';
}
?>

<td class="body-content"><!--Main Content-->
  <h2>Artists</h2>
  <button onclick="revealA()" id="revealA" class="link">+Alli Elisabet Palmieri</button><br>
  <div class="artist" id="alli_elisabet_palmieri" style="display:none;">
    <table class="artist">
      <tr>
        <td class="table-centred" id="artist-left"><!--artist name and image-->
          <br>
          <img src="images/Screen Shot 2019-09-30 at 9.19.58 am.png" width="200px" height="200px"><br><br>
          <h4>Alli Elisabet Palmieri</h4>
        </td>
        <td class="table-centred" id="artist-right"><!--artist bio-->
          <h3>Bio:</h3><br>
          <p>
            Alli Elisabet Palmieri is an interdisciplinary artist, designer, writer and self proclaimed rainbow based in Naarm (Melbourne, AUS).
            Currently Completing Honours of Interior Design at RMIT. Alli uses their art, design and writing practices to unpack taboo conventions of normative paradigms, including the visceral and the sexual in relation to the built environment and human bodies. Addressing these themes through appropriating architectural conventions of purity and order, along with exploring feminine coded materials; Alli transgresses the boundaries of high culture. The language of their work is textural, flirtatious, decorative and often anti-serious, with the intention to queer the prevalent basis of established ideals.
          </p>
        </td>
      </tr>
      <tr class="table-middle">
        <td colspan="2"><!--artist products-->
          <br><h3>Their work:</h3><br>
          <table class="their-work">
              <tr>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                              <form method="post" action="product.php">
                                <input type="image" src="images/orange.png" id="product-size">
                                <input type="hidden" name="prodImage" value="images/orange.png">
                                <input type="hidden" name="id" value="A001">
                                <input type="hidden" name="desc" value="Experimenting with overlapping shades of orange, this work expresses the languid lines and vibrancy that is orange.<br><br>Acrylic on MDF 20cm x 20cm">
                                <input type="hidden" name="price" value="$220.00">
                                <input type="hidden" name="prodName" value="Orange">
                                <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                              </form>
                          </td>
                      </tr>
                      <tr>
                          <td>Orange</td>
                      </tr>
                      <tr>
                          <td>Alli Elisabet Palmieri</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Hygiene is the Religion of Fascism.png" id="product-size">
                              <input type="hidden" name="prodImage" value="images/Hygiene is the Religion of Fascism.png">
                              <input type="hidden" name="id" value="A002">
                              <input type="hidden" name="desc" value="Grid lines representing bathroom tiles encase one of the artist’s signature colour works and a frame of open space. The necessity.<br><br>Acrylic, glitter, faux fur and glass tiles on MDF 2.5m x 1.5m">
                              <input type="hidden" name="price" value="$380.00">
                              <input type="hidden" name="prodName" value="Hygiene is the Religion of Fascism">
                              <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>HTRoF</td>
                      </tr>
                      <tr>
                          <td>Alli Elisabet Palmieri</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Bod{ily} 1.png" id="product-size">
                              <input type="hidden" name="prodImage" value="images/Bod{ily} 1.png">
                              <input type="hidden" name="id" value="A003">
                              <input type="hidden" name="desc" value="Exploring the converging of forms, this work in an expression of the way bodies can blend and melt into one another during intimate moments.<br><br>Acrylic and glitter on MDF 40cm x 40cm">
                              <input type="hidden" name="price" value="$350.00">
                              <input type="hidden" name="prodName" value="Bod{ily} 1">
                              <input type="hidden" name="artist" value="Alli Elisabet Palmieri">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>Bod{ily} 1</td>
                      </tr>
                      <tr>
                          <td>Alli Elisabet Palmieri</td>
                      </tr>
                  </table>
                </td>
              </tr>
          </table>
        </td><!--artist products-->
      </tr>
    </table>
  </div>
  <br>
  <button onclick="revealB()" id="revealB" class="link">+Clare Ellison Jakes</button><br>
  <div class="artist" id="clare_ellison_jakes" style="display:none;">
    <table class="artist">
      <tr>
        <td class="table-centred" id="artist-left"><!--artist name and image-->
          <br>
          <img src="images/Screen Shot 2019-09-30 at 8.30.18 am.png" width="300px" height="200px"><br><br>
          <h4>Clare Ellison Jakes</h4>
        </td>
        <td class="table-centred" id="artist-right"><!--artist bio-->
          <h3>Bio:</h3><br>
          <p>
            Clare Ellison Jakes (‘CEJ’ for short) is a visual artist, working in Naarm (Melbourne). CEJ acknowledges the Traditional Custodians throughout Australia. In particular the Wurundjeri people of the Kulin Nation where she lives and works, and recognises their continuing connection to land, waters and culture. She pays her respects to their Elders past, present and the emerging leaders of tomorrow. This is stolen land and sovereignty was never ceded. CEJ predominantly works in painting, but also across the fields of installation and video art. Primarily, her practice explores the relationship between art – and by extension culture – and the natural world. Particularly in the Global North, there is a prevailing culture-nature divide; the metabolic rift. In a time where our separation from the environment is beginning to collide with humanity’s existence, a paradigm shift is critical. While largely tar and concrete, the city is full of life; both human and non-human. CEJ’s recent works are an intimate reconnection to her/our eco-surroundings and the mortality, beauty and complexity of this existence. Furthermore, her practice sits in the ​discourse​ ​around ​sensuality and​ objectification, ​and their visual manifestations in contemporary and artistic culture.
          </p><br>
          <p>
            In 2017, CEJ graduated from the Victorian College of the Arts with First Class Honours. She is now studying a Master of Environment, at the University of Melbourne, specialising in the socio-political aspects of the environmental crises.
          </p>
        </td>
      </tr>
      <tr class="table-middle">
        <td colspan="2">
          <br><h3>Their work:</h3><br>
          <table class="their-work">
              <tr>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Finger a tattoo between your.png" id="product-size">
                              <input type="hidden" name="prodImage" value="images/Finger a tattoo between your.png">
                              <input type="hidden" name="id" value="A004">
                              <input type="hidden" name="desc" value="Acrylic on canvas and plastic.<br>36 x 32.5cm">
                              <input type="hidden" name="price" value="$350.00">
                              <input type="hidden" name="prodName" value="Finger a tattoo between your">
                              <input type="hidden" name="artist" value="Clare Ellison Jakes">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>FaTBY</td>
                      </tr>
                      <tr>
                          <td>Clare Ellison Jakes</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Butterfly map.png" id="product-size">
                              <input type="hidden" name="prodImage" value="images/Butterfly map.png">
                              <input type="hidden" name="id" value="A005">
                              <input type="hidden" name="desc" value="Acrylic on canvas and plastic<br>36cm x 32.5cm">
                              <input type="hidden" name="price" value="$300.00">
                              <input type="hidden" name="prodName" value="Butterfly Map">
                              <input type="hidden" name="artist" value="Clare Ellison Jakes">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>Butterfly Map</td>
                      </tr>
                      <tr>
                          <td>Clare Ellison Jakes</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Going to see a man about a dog.png" width="200px" height="200px">
                              <input type="hidden" name="prodImage" value="images/Going to see a man about a dog.png">
                              <input type="hidden" name="id" value="A006">
                              <input type="hidden" name="desc" value="Acrylic on canvas and plastic<br>36cm x 32.5cm">
                              <input type="hidden" name="price" value="$310.00">
                              <input type="hidden" name="prodName" value="Going to see a man about a dog">
                              <input type="hidden" name="artist" value="Clare Ellison Jakes">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>GTSaM</td>
                      </tr>
                      <tr>
                          <td>Clare Ellison Jakes</td>
                      </tr>
                  </table>
                </td>
              </tr>
          </table>
        </td><!--artist products-->
      </tr>
    </table>
  </div>
  <br>
  <button onclick="revealC()" id="revealC" class="link">+Hannah Olivia Potter</button><br>
  <div class="artist" id="hannah_olivia_potter" style="display:none;">
    <table class="artist">
      <tr>
        <td class="table-centred" id="artist-left"><!--artist name and image-->
          <br>
          <img src="images/Screen Shot 2019-09-30 at 8.31.25 am.png" width="230px" height="220px"><br><br>
          <h4>Hannah Olivia Potter</h4>
        </td>
        <td class="table-centred" id="artist-right"><!--artist bio-->
          <h3>Bio:</h3><br>
          <p>
            Hannah is an Australian artist with bodies of work that span across mediums. Studying her masters in interior architecture,
            Hannah uses words and phrases paired with abstract and line works to provoke.
          </p>
        </td>
      </tr>
      <tr class="table-middle">
        <td colspan="2">
          <br><h3>Their work:</h3><br>
          <table class="their-work">
              <tr>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Falling Through Tides.png" width="200px" height="200px">
                              <input type="hidden" name="prodImage" value="images/Falling Through Tides.png">
                              <input type="hidden" name="id" value="A007">
                              <input type="hidden" name="desc" value="Acrylic on canvas.<br>100cm x 100cm">
                              <input type="hidden" name="price" value="$290.00">
                              <input type="hidden" name="prodName" value="Falling Through Tides">
                              <input type="hidden" name="artist" value="Hannah Olivia Potter">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>Falling Through Tides</td>
                      </tr>
                      <tr>
                          <td>Hannah Olivia Potter</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/Youre a Funny Girl.png" width="200px" height="200px">
                              <input type="hidden" name="prodImage" value="images/Youre a Funny Girl.png">
                              <input type="hidden" name="id" value="A008">
                              <input type="hidden" name="desc" value="Acrylic on canvas.<br>100cm x 90cm">
                              <input type="hidden" name="price" value="$450.00">
                              <input type="hidden" name="prodName" value="You're a Funny Girl">
                              <input type="hidden" name="artist" value="Hannah Olivia Potter">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>You're a Funny Girl</td>
                      </tr>
                      <tr>
                          <td>Hannah Olivia Potter</td>
                      </tr>
                  </table>
                </td>
                <td>
                  <table class="product-item">
                      <tr>
                          <td>
                            <form action="product.php" method="post">
                              <input type="image" src="images/No Patience, No Virtue.png" width="200px" height="200px">
                              <input type="hidden" name="prodImage" value="images/No Patience, No Virtue.png">
                              <input type="hidden" name="id" value="A009">
                              <input type="hidden" name="desc" value="Acrylic on canvas.<br>30cm x 30cm">
                              <input type="hidden" name="price" value="$425.00">
                              <input type="hidden" name="prodName" value="No Patience, No virtue">
                              <input type="hidden" name="artist" value="Hannah Olivia Potter">
                            </form>
                          </td>
                      </tr>
                      <tr>
                          <td>No Patience, No virtue</td>
                      </tr>
                      <tr>
                          <td>Hannah Olivia Potter</td>
                      </tr>
                  </table>
                </td>
              </tr>
          </table>
        </td><!--artist products-->
      </tr>
    </table>
  </div>
</td>
<?php
loadBottom();
?>
<script type="text/javascript">
var clickA = 1;
var clickB = 1;
var clickC = 1;
//user clicks on first element
document.getElementById("revealA").addEventListener("click", function() {
console.log("reveal A has been clicked");
clickA++;
  if(clickA % 2 == 0){
    console.log("A is now visible. CLICK = "+clickA);
    document.getElementById("alli_elisabet_palmieri").style="display:inline; transition-duration:0.5s;";
    document.getElementById("revealA").style="border:1px solid rgb(175, 86, 92);";
  }else{
    console.log("A is now hidden. CLICK = "+clickA);
    document.getElementById("alli_elisabet_palmieri").style="display:none; transition-duration:0.5s;";
    document.getElementById("revealA").style="border:1px solid white;";
  }
});

//user clicks on second element
document.getElementById("revealB").addEventListener("click", function() {
console.log("reveal B has been clicked");
clickB++;
  if(clickB % 2 == 0){
    console.log("B is now visible. CLICK = "+clickB);
    document.getElementById("clare_ellison_jakes").style="display:inline;";
    document.getElementById("revealB").style="border:1px solid rgb(175, 86, 92);";
  }else{
    console.log("B is now hidden. CLICK = "+clickB);
    document.getElementById("clare_ellison_jakes").style="display:none;";
      document.getElementById("revealB").style="border:1px solid white;";
  }
});

//user clicks on third element
document.getElementById("revealC").addEventListener("click", function() {
console.log("reveal C has been clicked");
clickC++;
  if(clickC % 2 == 0){
    console.log("C is now visible. CLICK = "+clickC);
    document.getElementById("hannah_olivia_potter").style="display:inline;";
    document.getElementById("revealC").style="border:1px solid rgb(175, 86, 92);";
  }else{
    console.log("C is now hidden. CLICK = "+clickC);
    document.getElementById("hannah_olivia_potter").style="display:none;";
      document.getElementById("revealC").style="border:1px solid white;";
  }

});
</script>
<?php
    if(!empty($_POST['artist'])){
echo '<script>
console.log("'.$_POST['reveal'].' has been clicked");
clickt = 2;
  if(clickt==2){
    console.log("'.$_POST['reveal'].' is now visible. CLICKT = "+clickt);
    document.getElementById("'.$_POST['artist'].'").style="display:inline;";
    document.getElementById("'.$_POST['reveal'].'").style="border:1px solid rgb(175, 86, 92);";

    document.getElementById("'.$_POST['reveal'].'").addEventListener("click", function() {
    console.log("'.$_POST['reveal'].' has been clicked");
    clickt++;
      if(clickt % 2 == 0){
        console.log("'.$_POST['reveal'].' is now visible. CLICKT = "+clickt);
        document.getElementById("'.$_POST['artist'].'").style="display:inline;";
        document.getElementById("'.$_POST['reveal'].'").style="border:1px solid rgb(175, 86, 92);";
      }else{
        console.log("'.$_POST['reveal'].' is now hidden. CLICKT = "+clickt);
        document.getElementById("'.$_POST['artist'].'").style="display:none;";
          document.getElementById("'.$_POST['reveal'].'").style="border:1px solid white;";
      }
    });
  }</script>';
    }
unset($_POST['artist']);
unset($_POST['reveal']);
?>
