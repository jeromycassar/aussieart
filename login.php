<?php
session_start();
include_once('tools.php');
loadTopLoginRegister('aussieart - Login');
//reset Login
unset($_SESSION['username']);
?>
                <td class="body-content">
                  <!--Main Content-->
                  <h2>Login</h2>
                  <br>
                  <form class="login-form" name="login" action="" method="POST" onsubmit="return validateform()">
                    <label for="username1">Username</label>
                    <input type="text" name="usernamel" id="usernamel" class="input-login" required>
                    <br />
                    <label for="password1">Password</label>
                    <input type="password" name="passwordl" id="passwordl" class="input-login" required>
                    <br />
                    <p>Don't have an account? <a href="register.php">Register</a></p><br>
                    <button class="btn" id="submit" type="submit">Login</button>
                  </form>
                  <script>
                  function validateform() {
                    var x = document.forms["login"]["usernamel"].value;
                    var y = document.forms["login"]["passwordl"].value;
                    if (x == "") {
                      alert("User name or password cannot be empty");
                      return false;
                    }
                    if (y == "") {
                      alert("User name or password cannot be empty");
                      return false;
                    }
                  }

                  </script>
                  <?php
    //CREATING ARRAY------------------------------
    if(!empty($_POST['username'])){
    $user = array(
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "DOB" => $_POST['DOB'],
        "email" => $_POST['email']);
    }

    //LOGIN-----------------------------------------------------
    if(!empty( $_POST['usernamel'])){
    $_SESSION["username"] = $_POST['usernamel'];
        $exist = 0;
        //check if the input exist
        $string_data = file_get_contents("users.txt");
        $explode = explode("<!-- explode -->", $string_data);
        $count = count($explode);
        for($i = 0; $i < $count; $i++){
            $array = unserialize($explode[$i]);
           echo "i :" . $i;
                 preshow($array);
            if ( $array['username'] == $_POST['usernamel']){
                if($array['password'] == $_POST['passwordl'] ){
                 $exist = 1;
            }
            }
        }
    if ($exist == 1){
         echo "<script>location.href='home.php';</script>";
    }
    }

         //REGISTER-------------------------------------------
    if (!empty($user['username'])){
            $exist = 0;
        //check if the input exist
        $string_data = file_get_contents("users.txt");
        $explode = explode("<!-- explode -->", $string_data);
        $count = count($explode);
        for($i = 0; $i < $count; $i++){
            $array = unserialize($explode[$i]);
            if ( $array['username'] == $_POST['username']){
                 $exist = 1;
            }
        }

    if($exist == 1){
		echo "<br>"."User already exists"."<br>";
	}else{
        $content = serialize($user);
        file_put_contents("users.txt", $content . "<!-- explode -->", FILE_APPEND);
        $string_data = file_get_contents("users.txt");
        $explode = explode("<!-- explode -->", $string_data);
        $count = count($explode);
        for($i = 0; $i < $count; $i++){
            $array = unserialize($explode[$i]);
            if ($array){
                echo "i :" . $i;
                 preshow($array);
            }
        }
    }
    }

?>
</td>
<?php
loadBottomLoginRegister();
?>
