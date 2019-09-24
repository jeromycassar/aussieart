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
                        <p id="greeting"></p>
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
                <td class="body-content">
                    <!--Main Content-->

                    <h2>Register</h2>

                    <form action="login.php" class="register-form" name="register" method="POST" onsubmit="return validateform()" oninput="CheckPassword()">
                  <table>
                    <tr><td><h4>Personal Information:</h4></td></tr>
                    <tr>
                      <td>
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" required><br>
                        <label for="lastname">Family Name</label>
                        <input type="text" name="lastname" id="lastname" required><br>
                        <label for="DOB">Date of Birth</label>
                        <input type="date" name="DOB" id="DOB" required>
                      </td>
                    </tr>
                    <tr><td><h4>Account Information:</h4></td></tr>
                    <tr>
                      <td>
                        <label for="username">Username</label>
                        <input type="username" name="username" id="username"><br>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required><br>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                      </td>
                    </tr>
                    <tr>
                      <td><button class="btn" id="submit" type="submit">Register</button></td>
                    </tr>
                </table>
                </form>
                    <script type="text/jscript">
                        function CheckPassword() {
                            password = document.getElementById('password').value;
                            if (password.length < 6) {
                                document.getElementById('submit').disabled = true;
                                document.getElementById('submit').innerHTML = "Register";
                            } else {
                                document.getElementById('submit').disabled = false;
                                document.getElementById('submit').innerHTML = "Register";
                            }
                        }

                        function validateform() {
                            var x = document.forms["register"]["username"].value;
                            if (x == "") {
                                alert("User name or password cannot be empty");
                                return false;
                            }
                        }

                    </script>
                </td>
                <td class="body-spacing"></td>
            </tr>
        </table>
    </body>
    <footer>
        <!--Footer-->
        <nav class="footer-bar">
            <!--Footer Navigation Bar-->
            <table id="header-table">
               
            </table>
        </nav>
        <!--End of Footer Navigation Bar-->
    </footer>
    <!--End of Footer-->
</div>
<!--End of wrapper-->

</html>
<!--End of html-->
