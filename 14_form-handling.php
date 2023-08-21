<?php

//$_GET is an associative array
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<h2> Accessing input data from the form:</h2>";
echo "<br>Username is: ".$_REQUEST['uname'];
echo "<br>Password is: ".$_REQUEST['pass'];
echo "<br>Age is: ".$_REQUEST['age'];

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<h2>Few important Server details:</h2>";
echo "<br>Server name is: ".$_SERVER['SERVER_NAME'];
echo "<br>Request method is: ".$_SERVER['REQUEST_METHOD'];
echo "<br>PHP is directing to: ".$_SERVER['PHP_SELF'];
echo "<br>HTTP origin: ".$_SERVER['HTTP_ORIGIN'];
echo "<br>Request URI after submission is: ".$_SERVER['REQUEST_URI'];
?>
