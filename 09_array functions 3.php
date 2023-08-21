<?php
$arr = [45,32,10,23,89,67,34];
echo "<pre>";
print_r($arr);
echo "<pre>";
echo "17. array_splice() : Removes, replaces, or adds elements to an array.<br>";
$spilicedArray = array_splice($arr,2,3,100);
echo "<pre>";
print_r($arr);
echo "<pre>";

echo "18. array_merge() : Combines two or more arrays into a single array.<br>";
$arr1 = [2,4,6,8];
$arr2 = [1,3,5,7,9];
$mergedArr = array_merge($arr1,$arr2);          //more than two arrays can also be merged
echo "<pre>";
print_r($mergedArr);
echo "<pre>";

echo "19. array_search() : Searches for a value in an array and returns the corresponding<br>";
$searchElement = 9;
$key = array_search($searchElement,$mergedArr);
echo "The index of $searchElement is $key<br>";

echo "20. array_reverse(): Reverses the order of elements in an array.<br>";
$revArr = array_reverse($arr);
echo "<pre>";
print_r($revArr);
echo "<pre>";

echo "21. array_diff() : ";
$myArr1 = [0,1,2,3,4,5,6,7,8,9];
$myArr2 = [1,3,5,7,9,11];
$filteredArr = array_diff($myArr1,$myArr2);
echo "<pre>";
print_r($filteredArr);
echo "<pre>";

echo "22. array_intersect() : ";
$commonArr = array_intersect($myArr1,$myArr2);
echo "<pre>";
print_r($commonArr);
echo "<pre>";
?>