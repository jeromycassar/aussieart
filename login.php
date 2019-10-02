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
    if(isset( $_POST['usernamel'])){
    $input = $_POST['usernamel']. ",". $_POST['passwordl'];
    $_SESSION["usernamel"] = $_POST['usernamel'];
	list($username, $password) = explode(",",$input);
    if (isset($_POST['usernamel'])){
	$exist = 0;
           //read the file line by line
          $file = fopen("gs://aussie-users/users.txt","r");
           while(!feof($file))  {
                $line = trim(fgets($file));
               if($line == $_POST['usernamel']. ",". $_POST['passwordl']){
                  $exist = 1;
                       break;
               } 
           }
             fclose($file);	 
        //check if the input exist
    if ($exist == 1){
         echo "<script>location.href='home.php';</script>";
    }
    }
    
	//Receive input from clint side
	$input = $_POST['username'] ."," .$_POST['password'];
    //break the string based on a separator "," as two parts $a and $b
    list($username, $password) = explode(",",$input);
    if (!empty($_POST['username'])){
            //read the file line by line
            $file = fopen("gs://aussie-users/users.txt","r");
            //check if the input exist
            $exist = 0;
    
           while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));
                //compare the content of the input and the line
               if($line == $username .",". $password){
			$exist = 1;
			break;
	     }		
              }
             fclose($file);	
    
    
    if($exist == 1){
		
	}else{
		//open a file named "users.txt"
		$content = file_get_contents("gs://aussie-users/users.txt");
		//insert this input (plus a newline) into the users.txt
        $new_content = $content . "\n" . $input;
		file_put_contents("gs://aussie-users/users.txt",$new_content);
        //echo "<br>".$content."<br>";
        //echo "<br>".$new_content."<br>";
	}
    }
    }
?>
</td>
<?php
loadBottom();
?>
