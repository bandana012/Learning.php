<?php

echo "<h3>4. The foreach loop</h1>";

$arr = array(3,4,5,0,2);

foreach ($arr as $key) {
    echo "<br>array element: ".$key;
}

echo "<h2>Arary</h2>";
echo "<h3>1. Numeric index array</h3>";

$cities = array("MNR","USA","DNH","KTM");
$even = array(2,4,6,8,10,12);

echo $cities[2];            //accessing array element using numeric index
echo "<br>";
echo $even[4];
echo "<br>";
$cities[4] = "Pokhara";     //inserting into array using numeric index
echo $cities[4];            //accessing array element using numeric index
echo "<br>";
var_dump($cities);

echo "<br>";
$even[6] = 14;
echo $even[6];

echo "<h3>2. Associative index array</h3>";

$std = array("Roll"=>"1","Name"=>"Binu bhatt","Age"=>"20.5");
//inserting into array using associative index
$std["Address"] = "Mahendranagar";      

foreach ($std as $key => $value) {
    echo "<br>";
    // echo $std[$key];
    echo "$key : $value";
}

?>