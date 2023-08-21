<?php
echo "12. implode(): It converts array into string, we can pass separator.<br>";
$arr = [34,21,90,56,78];
$str = implode('-',$arr);
echo $str;
echo "<br>";

echo "13. array_pop(): Removes the last element and returns it<br>";
$lastElement = array_pop($arr);
echo "<br>";
echo "Last element is: $lastElement";
echo "<br>";

echo "14. array_push(): Adds number of elements from the last index.<br>";
array_push($arr,49,33);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "15. array_shift(): Removes the first element and returns it.<br>";
$firstElement = array_shift($arr);
echo "<br>";
echo "First element is: $firstElement";
echo "<br>";

echo "15. array_ushift(): Adds number of elements from the first index.<br>";
array_unshift($arr,1,2);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "16. array_slice(): Extracts a portion of an array and returns a new array with the selected elements.<br>";
$slicedArray = array_slice($arr,2,3);
echo "<pre>";
print_r($slicedArray);
echo "</pre>";

?>