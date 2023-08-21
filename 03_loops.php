<?php

$a=10;
$b=20;
echo "The sum of $a and $b is ".($a+$b)."<br>";

//There are 4 types of loops in PHP
echo "<h3>1.The for loop</h3>";
$index;
for($index=1;$index<=5;$index++){
    echo "Statement $index<br>";
}

$std = array("Binu","Minu","Sinu","Ranju","Saru");
var_dump($std);
/*The count method is used to count the number of 
elements in an array*/
$size = count($std);
echo "<br>Size is ".$size;

for($i=0;$i<count($std);$i++){
    echo "<br>Student $i = $std[$i]";
}

echo"<h3>2. The while loop</h3>";

$i = 0;
while ($i < count($std)) {
    echo "<br>Student $i = $std[$i]";
    $i++;
}

echo"<h3>3. The do while loop</h3>";

$i = 0;
do{
    echo "<br>Student $i = $std[$i]";
    $i++;
}while($i < count($std));

?>