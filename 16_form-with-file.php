<?php
  if(isset($_POST['btn'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "<pre>";
    $filename = $_FILES['image']['name'];
    $filetype = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    echo "The file named $filename with size $size Bytes has been extracted!";
    $filename2 = $_FILES['certificate']['name'];
    $size2 = $_FILES['certificate']['size'];
    $tmp_name2 = $_FILES['certificate']['tmp_name'];
    echo "<br>The file named $filename2 with size $size2 Bytes has also been extracted!";

    move_uploaded_file($tmp_name,"uploads/".$filename);		//For uploading files to the destination folder in the server
    move_uploaded_file($tmp_name2,"uploads/".$filename2);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form with file</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
      Full name:<input type="text" name="name" /><br /><br />
      Upload recent photo: <input type="file" name="image" /><br /><br />
      Upload certificate: <input type="file" name="certificate" /><br /><br />
      <input type="submit" name="btn" />
    </form>
  </body>
</html>
