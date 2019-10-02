<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Product', 'test'); //title will change based on product selection
?>
                <td class="body-content"><!--Main Content-->
                <div class="prod-container">
                  <div id="prod-left">
                    <a href="products.php" class="btn">Back</a><br>
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
<?php
loadBottom();
?>