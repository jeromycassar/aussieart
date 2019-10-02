<?php
session_start();
include_once('tools.php');
loadTop('aussieart - Product', 'test'); //title will change based on product selection
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
        <input type="text" name="passwordl" id="passwordl" class="input-login" required>
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
    $user = array(
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "DOB" => $_POST['DOB'],
        "email" => $_POST['email']);
            
    if(isset( $_POST['username'])){
    $_SESSION["username"] = $_POST['username'];
    if (isset($_POST['username'])){
	$exist = 0;
           //read the file line by line
          $file = fopen("users.txt","r");
          while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));
                //compare the content of the input and the line
               
			//$exist = 1;
			break;
	     		
              }
             fclose($file);		 
        //check if the input exist
    if ($exist == 1){
         echo "<script>location.href='home.php';</script>";
    }
    }
}
         
    if (!empty($user['username'])){
            //read the file line by line
            $file = fopen("users.txt","r");
            //check if the input exist
        //read from users.txt
        
            $exist = 0;
    
           while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));
                //compare the content of the input and the line
               if($line == $_POST['username']){
			$exist = 1;
			break;
	     }		
              }
             fclose($file);
    
    if($exist == 1){
		echo "<br>"."SOMETHING HAPPENEED"."<br>";
	}else{
        $content = serialize($user);
        file_put_contents("users.txt", $content . "<!-- explode -->", FILE_APPEND);
        $string_data = file_get_contents("users.txt");
        $explode = explode("<!-- explode -->", $string_data);
        $count = count($explode);
        for($i = 0; $i < $count; $i++){
            $array = unserialize($explode[$i]);
            if ($array){
                 preshow($array);
            }
        }
    }
    }  
?>
</td>
<?php
loadBottom();
?>