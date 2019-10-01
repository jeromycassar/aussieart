<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Product', 'test'); //title will change based on product selection
?>
                <td class="body-content">
                    <!--Main Content-->
                    <div class="prod-container">
                        <div id="prod-left">
                            <a href="" class="btn">&#17; Back</a><br>
                            <img style="margin-top:15px;" src="" height="200px" width="200px">
                            <p class="prod-price" name="price"></p><br>
                            Artist: <br><span class="artist-name"></span><br><br>
                            Themes: <br><span class="prod-themes"></span>
                        </div>
                        <div id="prod-right">
                            <p class="prod-name" name="name"><strong></strong></p><br>
                            <p class="prod-desc">

                            </p><br><br>
                            <button class="btn">Add to Cart</button>
                        </div>
                    </div>
                </td>
<?php
loadBottom();
?>
