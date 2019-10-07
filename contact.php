<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Contact Us', $_SESSION["username"]);
//check if the user has remained signed in
if(!isset($_SESSION['username'])){
  echo '<script>window.location.href = "login.php";</script>';
}
?>
  <td class="body-content"><!--Main Content-->
                <h2>Contact Us</h2>
                <br>
                <h3>Fill in our contact us form below or email us at: aussieart@aussieart.com.au</h3>
                <br>
                <form method="POST" class="contact-us-form" name="contact-us">
                  <table>
                    <tr>
                      <td>
                        <label for="firstname">First Name</label><br>
                        <input type="text" id="firstname" name="firstname" required>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="lastname">Last Name</label><br>
                        <input type="text" id="lastname" name="lastname" required>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" required>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        <label for="comments">Comments</label><br>
                        <textarea id="comments" name="comments" cols="30" rows="10" placeholder="Enter your query here"></textarea required>
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
<?php
//send form to text file
if(!empty($_POST['firstname'])){
  $input = $_POST['firstname'].', '.$_POST['lastname'].', '.$_POST['email'].', '.$_POST['comments'];
  $file = fopen("database/contact.txt","a");
  //insert this input (plus a newline) into the text file
  fwrite($file,$input."\n");
  //close the "$file"
  fclose($file);
  echo "<script>window.location.href = 'home.php';</script>";//header("Location: home.php");
  echo '<script>alert("Your form has been submitted! Thank you for contacting us!");</script>';
}
loadBottom();
preShow($_POST);
?>