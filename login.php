<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <!--Head: JS/Fonts/CSS-->
    <title>aussieart - Home</title>
    <meta charset="utf-8">
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
=======
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
>>>>>>> jeromy-branch
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
                    <h2>Login</h2>
<<<<<<< HEAD
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
=======

                    <form name="login" method="POST" onsubmit="return validateform()">
                        Username: <input type="text" name="usernamel" id="usernamel">
                        <br /><br />
                        Password: <input type="text" name="passwordl" id="passwordl">
                        <br /><br />
                        <button class="btn" id="submit" type="submit">Login</button>
                        <a href="register.php">Register</a>
>>>>>>> jeromy-branch
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
<<<<<<< HEAD
     $input = $_POST['usernamel']. ",". $_POST['passwordl'];
    $_SESSION["usernamel"] = $_POST['usernamel'];
	list($username, $password) = explode(",",$input);
    if (isset($_POST['usernamel'])){
	$exist = 0;
=======
    if(isset($_POST)){
      $input = $_POST['usernamel']. ",". $_POST['passwordl'];
      $_SESSION["usernamel"] = $_POST['usernamel'];
	     list($username, $password) = explode(",",$input);
       if (isset($_POST['usernamel'])){
	        $exist = 0;
>>>>>>> jeromy-branch
           //read the file line by line
          $file = fopen("gs://aussie-users/users.txt","r");
           while(!feof($file))  {
                $line = trim(fgets($file));
               if($line == $_POST['usernamel']. ",". $_POST['passwordl']){
                  $exist = 1;
                       break;
<<<<<<< HEAD
               } 
           }
             fclose($file);	 
=======
               }
           }
             fclose($file);
>>>>>>> jeromy-branch
        //check if the input exist
    if ($exist == 1){
         echo "<script>location.href='home.php';</script>";
    }
    }
<<<<<<< HEAD
    
=======

>>>>>>> jeromy-branch
	//Receive input from clint side
	$input = $_POST['username'] ."," .$_POST['password'];
    //break the string based on a separator "," as two parts $a and $b
    list($username, $password) = explode(",",$input);
    if (!empty($_POST['username'])){
            //read the file line by line
            $file = fopen("gs://aussie-users/users.txt","r");
            //check if the input exist
            $exist = 0;
<<<<<<< HEAD
    
=======

>>>>>>> jeromy-branch
           while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));
                //compare the content of the input and the line
               if($line == $username .",". $password){
			$exist = 1;
			break;
<<<<<<< HEAD
	     }		
              }
             fclose($file);	
    
    
    if($exist == 1){
		
=======
	     }
              }
             fclose($file);


    if($exist == 1){

>>>>>>> jeromy-branch
	}else{
		//open a file named "users.txt"
		$content = file_get_contents("gs://aussie-users/users.txt");
		//insert this input (plus a newline) into the users.txt
        $new_content = $content . "\n" . $input;
		file_put_contents("gs://aussie-users/users.txt",$new_content);
<<<<<<< HEAD
        //echo "<br>".$content."<br>";
        //echo "<br>".$new_content."<br>";
	}
    }
=======
        echo "<br>".$content."<br>";
        echo "<br>".$new_content."<br>";
	}
    }
}
>>>>>>> jeromy-branch
?>
                </td>
                <td class="body-spacing"></td>
            </tr>
        </table>
    </body>
    <footer>
        <!--Footer-->
        <nav class="footer-bar">
            <!--Footer Navigation Bar-->

        </nav>
        <!--End of Footer Navigation Bar-->
    </footer>
    <!--End of Footer-->
</div>
<!--End of wrapper-->

</html>
<!--End of html-->
