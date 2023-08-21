<?php
// $arr = [2,3,5,9,0];
echo "<h3>3. Multi-dimentional array";
//Multi-dimentional array with numeric index
//Creating multidimentional array function
$students1 = array(
    array(1,"Binu","MNR"),
    array(2,"Minu","KTM"),
    array(3,"Saru","MNR")
);
//Creating multidimentional array with big brackets
$students2 = [
    [1,"Sinu","MNR"],
    [2,"Bindu","KTM"],
    [3,"Ranju","MNR"]
];

echo "<pre>";
print_r($students1);
echo "</pre>";

//Multi-dimentional array with associative index
$books =[
    "Programming"=>["bid"=>"101","title"=>"PHP","price"=>"700.00"],
    "Mathematics"=>["bid"=>"101","title"=>"Maths","price"=>"400.00"],
    "Management"=>["bid"=>"101","title"=>"Account","price"=>"500.00"]
];

echo "<pre>";
print_r($books);
echo "</pre>";

?>