<?php

//Constant in php
define("PI","3.14");
echo "The value of PI in maths is: ".PI;
echo "<br>";
//PI++;         - It throws an error

//Some more operators
//3.Assignment operators (=,+=,-=,*=,/=,%=)
$x = 10;
$x += 100;          //$x = $x + 100;
echo "x =".$x;
echo "<br>";

$x %= 50;                 //$x = $x % 50;
echo "New value of x = ".$x;

//4.Comparision operators and conditional(>,<,<=,>=,==,!=)
$v1 = 10;
$v2 = 20;
echo "<br>";
echo "v1 <= v2 is: ".($v1<=$v2);    
//write the expression within parenthesis

//The if-else-if ladder
$obtained_marks = 120;
if($obtained_marks >= 80 and $obtained_marks <=100){
    echo "<br>The obtained grade is A";    
}else if($obtained_marks >= 60 and $obtained_marks < 80){
    echo "<br>The obtained grade is B";
}else if($obtained_marks >= 40 and $obtained_marks < 60){
    echo "<br>The obtained grade is C";
}else if($obtained_marks < 40 and $obtained_marks > 0){
    echo "<br>Your are failed";
}else{
    echo "<br>Invalid input";
}

//5. Increment/decrement operators (++,--)
echo "<br>";
$z = 10;                 
echo "Value of z is: ".$z;              //10
echo "<br>";
$y = ++$z;                              // => $z=$z+1;  $y=$z; 
echo "Value of y is: ".$y;              //11
echo "<br>New value of y is: ".$z;              //11

//6. Ternary operator
echo "<br>";
$newAge = 20;
if($newAge>=18){
echo "You can cast vote";
}else{
echo "You have no right to vote";
}

$a = 100;
$b = 12;
$greatest = ($a > $b) ? $a : $b;
echo "<br>Greatest number is ".$greatest;

//Switch case statement
$day = 2;
switch($day){
    case 1:
        echo "<br>Sunday";
        break;
    case 2:
        echo "<br>Monday";
        echo "<br>It's second day of the week";
        break;
    default:
        echo "<br>Invalid input";
}

$city = "KTM";
switch($city){
    case "MNR":
        echo "<br>Mahendranagar";
        break;
    case "KTM":
        echo "<br>Kathmandu";
        break;
    default:
        echo "<br>Invalid input";

}

?>