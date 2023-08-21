<?php
     if(isset($_POST['btn'])){				//It is used to tell server to direct the page to destination only when btn is set i.e. submitted
            $uname = $_POST['uname'];
            echo "Hello $uname, your form has been submitted successfully!!!<br>";
            $age = $_POST['age'];
            if($age >= 20){
                echo "<br>$uname, you can access further!";
            }else{
                echo "<br>$uname, you cannot access further. Kindly leave the website!";
            }
        }
        // echo $_SERVER['PHP_SELF'] is used to print the file that is requested by submittig the given form
    ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <h3>Login form</h3>

    <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST">
      Username: <input type="text" name="uname" /><br /><br />
      Password: <input type="password" name="pass" /><br /><br />
      Age: <input type="number" name="age" required/><br /><br />
      <input type="submit" value="Register" name="btn" />
    </form>
  </body>
</html>