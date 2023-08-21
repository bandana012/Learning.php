<?php
    if(isset($_POST['btn'])){
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_error = $_FILES['image']['error'];
        // var_dump($_FILES);
        //Image file validation
        if(isset($image_error) && $image_error == 0){
            if( $image_size < 200000){
                $valid_types = ['image/jpg','image/jpeg','image/png'];
                if(in_array($image_type,$valid_types)){
                    if(move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image_name)){
                        echo "<span class='success'>Image uploaded successfully!</span>";
                    }else{
                        echo "<span class='err'>Error uploading image</span>";
                    }
                }else{
                    $image_type_error = "File type must be .jpg or .png!";
                }
            }else{
                $image_size_error = "File size exceeds the limit!";
            }
        }
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
            if(empty($uname)){
                $uname_empty_error = "Username cannot be empty!";
            }else if(!preg_match("/[A-Z]/",$uname)){
                $uname_pattern_error = "Username must have uppercase!";
            }
            // var_dump($pass);
            if(empty($pass)){
                $pass_empty_error = "Password cannot be empty!";
            }else if(strlen($pass) < 8){
                $pass_length_error = "Password must be more than 8 characters long!";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form validation</title>
    <style>
        .err{
            color:red;
        }
        .success{
            color:green;
        }
    </style>
</head>
<body>
    <!-- Server side validation using php -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Username: <input type="text" name="uname">
        <span class="err"><?php if(isset($uname_empty_error)){echo $uname_empty_error;} 
        if(isset($uname_pattern_error)){echo $uname_pattern_error;}?></span><br><br>

        Password: <input type="password" name="pass">
        <span class="err"><?php if(isset($pass_empty_error)){echo $pass_empty_error;} 
        if(isset($pass_length_error)){echo $pass_length_error;}?></span><br><br>

        Upload recent image: <input type="file" name="image">
        <span class="err"><?php if(isset($image_size_error)){ echo $image_size_error; }
         if(isset($image_type_error)){ echo $image_type_error;}?></span> <br><br>

        <input type="submit" value="Register" name="btn">
    </form>
    
</body>
</html>