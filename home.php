<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Home', $_SESSION["username"]);
currentStyleNavLink('background-color:rgb(117, 54, 58)');

//if seession unset then return to login
if(!isset($_SESSION["username"])){
   echo "<script>window.location.href='login.php';</script>";
}
?>
<td class="body-content">
    <!--Main Content-->
    <div class="home-table">
        <table>
            <tr>
                <td></td>
                <td>
                    <button class="open-button" onclick="openForm()"> Newsletter registration
                    </button>
                    <div class="form-popup" id="myForm">
                        <form action="home.php" method="POST" class="form-reg">
                            <label id="home-Title"><strong>Newsletter</strong></label>
                            <p>subscribe to our newsletter for aussieart updates</p>
                             
                            <label id="home-label" for="name"><b>Name</b></label>
                            <input type="text" placeholder="Enter Name" id="name" name="name" required>

                            <label id="home-label" for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" id="email" name="email" required>

                            <button type="submit" class="btn">Register</button>
                            <button type="button" class="btn cancelreg" onclick="closeForm()">Close</button>
                        </form>
                        <?php 
                        if(!empty($_POST['email'])){
                            $input = ($_POST['name'].",".$_POST['email']);
                           $file = fopen("database/registration.txt","a");
		                  //insert this input (plus a newline) into the database.txt
		                  fwrite($file,$input."\n");
		                  //close the "$file"
		                  fclose($file); 
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
        <label id="home-Title"><strong>Mission Statement</strong></label>
        <label id="home-label"><i>"To provide high-quality artworks presented by official artists. We as a company will provide easy shipment and deliveries, catering for all around Australia and internationally.'"</i></label>
        <br>
        <label id="home-Title"><strong>Browse by Artist</strong></label>
        <table>
            <tr>
                <td>
                    <form action="artists.php" method="POST">
                        <input type="image" src="images/Screen Shot 2019-09-30 at 9.19.58 am.png" id="product-size" width="200px" height="200px">
                        <input type="hidden" name="reveal" value="revealA">
                        <input type="hidden" name="artist" value="alli_elisabet_palmieri">
                    </form>
                </td>
                <td>
                    <form action="artists.php" method="POST">
                        <input type="image" src="images/Screen Shot 2019-09-30 at 8.30.18 am.png" id="product-size" width="200px" height="200px">
                        <input type="hidden" name="reveal" value="revealB">
                        <input type="hidden" name="artist" value="clare_ellison_jakes">
                    </form>
                </td>
                <td>
                    <form action="artists.php" method="POST">
                        <input type="image" src="images/Screen Shot 2019-09-30 at 8.31.25 am.png" id="product-size" width="200px" height="200px">
                        <input type="hidden" name="reveal" value="revealC">
                        <input type="hidden" name="artist" value="hannah_olivia_potter">
                    </form>
                </td>
            </tr>
            <tr>
                <td>Alli Elisabet</td>

                <td>Clare Ellison Jakes</td>

                <td>Hannah Olivia Potter</td>
            </tr>
        </table>
        <br>
        <br>
        <label id="home-Title"><strong>Best selling Artist</strong></label>

        <label id="home-label"><strong>Hannah Olivia Potter</strong></label>
        <br>

        <Div class=home-des>
            <p id="home-label">Hannah is an Australian artist with bodies of work that span across mediums. Studying her masters in interior architecture,
                Hannah uses words and phrases paired with abstract and line works to provoke.</p>
        </Div>

        <br>
        <table>
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
        </table>
    </div>
</td>
<?php
loadBottom();
?>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

</script>
