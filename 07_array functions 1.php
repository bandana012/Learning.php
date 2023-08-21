<?php
echo "1. array(): Creates an array.<br>";
$arr = array(2,3,9,0,1);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "2. count(): Returns the number of elements in an array.<br>";
$count = count($arr);
echo "No. of elements: $count";
echo "<br>";

echo "3. empty(): Checks if an array is empty.<br>";
$arr2 = [];
$isEmpty = empty($arr2);
echo "The given array is empty is $isEmpty <br>";

echo "4. sort():Sorts the given array in acending order.<br>";
$sortedArray = sort($arr);         //returns 1
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "5. rsort():Sorts the given array in reverse or decending order.<br>";
rsort($arr);         //returns 1
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "6. asort(): Sorts the associative array taking care of the index.<br>";
$std = ['Sid'=>'1','Name'=>'minu','Address'=>'Mahendranagar','Gender'=>'Female'];
asort($std);
echo "<pre>";
print_r($std);
echo "</pre>";

echo "7. arsort(): Sorts the associative array in reverse order taking care of the index.<br>";
arsort($std);
echo "<pre>";
print_r($std);
echo "</pre>";

echo "8. ksort(): Sorts the array according to the key.<br>";
ksort($std);
echo "<pre>";
print_r($std);
echo "</pre>";

echo "9. krsort(): Sorts in reverse roder according to the key.";
krsort($std);
echo "<pre>";
print_r($std);
echo "</pre>";

echo "10. natsort(): Natural sorting case sensitive ";
$books = ['book1'=>'PHP','book2'=>'java','book3'=>'Web'];
natsort($books);
echo "<pre>";
print_r($books);
echo "</pre>";

echo "11. natcasesort(): Natual sorting ignores case";
natcasesort($books);
echo "<pre>";
print_r($books);
echo "</pre>";

?>