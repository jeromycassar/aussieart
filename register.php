<?php
session_start();
include_once('tools.php');
loadTopLoginRegister('aussieart - Register'); //title will change based on product selection
?>
<!--Main Content-->
<td class="body-content">
    <h2>Register</h2>
    <form action="login.php" class="register-form" name="register" method="POST" onsubmit="return validateform()" oninput="CheckPassword()">
        <table>
            <tr>
                <td>
                    <h4>Personal Information:</h4>
                </td>
            </tr>
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
            <tr>
                <td>
                    <h4>Account Information:</h4>
                </td>
            </tr>
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
                <td><button class="btn" id="submit" type="submit">Register</button> <a href="login.php">Back</a></td>
            </tr>
        </table>
    </form>
    <script type="text/jscript">
        function CheckPassword() {
            password = document.getElementById('password').value;
            if (password.length < 1) {
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
<?php
loadBottomLoginRegister();
?>