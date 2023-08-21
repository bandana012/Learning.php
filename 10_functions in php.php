<?php
/*
Functions in PHP
syntax:
    function functionName($para1,$para2,...){
        code to be executed
    }
*/
function sayHello(){                            //User-defined function without parameteres
    echo "Hello user, you're welcome.<br>";
}
sayHello();                                     //Function call

//Function overloading is not possible in PHP
function sayHi($user){                            //User-defined function with a parameter
    echo "Hi $user, you're welcome.<br>";
}
sayHi("Ram");                                     //Function call

function sum($num1,$num2){              //User-defined function with parameters and return
    $sum = $num1+$num2;
    return $sum;                                  //$sum is a local varible
}
$total = sum(3,4);
echo "The sum is: $total<br>";

function add($num1,$num2,$num3=0,$num4=0){
    $add = $num1+$num2+$num3+$num4;
    return $add;
}
$totalOf2 = add(55,45);                 //returns 100
echo "The sum is: $totalOf2<br>";
$totalOf3 = add(3,4,20);                //returns 27
echo "The sum is: $totalOf3<br>";
$totalOf4 = add(55,45,30,20);                 //returns 100
echo "The sum is: $totalOf4<br>";

function displayDetails($userName,$userAdd="Mahendranagar",$gender="Female"){
    echo "Hello $userName from $userAdd and you're $gender.<br>";
}
displayDetails("Binu");
displayDetails("Bnu","Mnr");
displayDetails("Ranju","Kathmandu","Female");
?>