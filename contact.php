<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Contact Us', $_SESSION["username"]);
?>
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
<?php
loadBottom();
?>
