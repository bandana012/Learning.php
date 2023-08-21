<?php
//PHP Variable Length Argument Function
function sumOfN(...$elements){
    $sum = 0;
    foreach ($elements as $key) {
        $sum += $key;
    }
    var_dump($elements);
    return $sum;
} 
$totalOf3 = sumOfN(2,3,4);
echo "Sum is: $totalOf3<br>";

$totalOf5 = sumOfN(2,4,6,8,10);
echo "Sum is: $totalOf5<br>";

$totalOf10 = sumOfN(1,2,3,4,5,6,7,8,9,10);
echo "Sum is: $totalOf10<br>";

//Find the factorail using PHP Variable Length Argument Function
function factorial(...$arr){
    $fact = 1;
    foreach ($arr as $key) {    
        $fact *= $key;
    }
    return $fact;
}
$factorailOf5 = factorial(1,2,3,4,5);
echo "Factorial is $factorailOf5<br>";

//Recursion using Recursive function 
function fact($num){
    if($num == 0)
    return 1;
    else
    return $num*fact($num-1);
}
$f = fact(10);
echo "Factorail is $f<br>";


?>
