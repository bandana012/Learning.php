<?php
/*
$x = 'y';
$$x = 10;

echo "value of x: $x";
echo "<br>value of y:".$$x;
echo "<br>value of y:".$y;

$dog = "cat";
$$dog = "monkey";
$$$dog = "Donkey";

echo "<br>Value of dog: ".$dog;
echo "<br>Value of cat: ".$$dog;
echo "<br>Value of cat: ".$cat;
echo "<br>Value of monkey: ".$$$dog;
echo "<br>Value of monkey: ".$monkey;
*/
//Working with files in PHP

$file = "new_file1.txt";
$fp = fopen($file,"w");
if(file_exists($file)){
    //processing
    $data = "This is the fwrite function for file handling.";
    fwrite($fp,$data);
}else{
    echo "Error: File cannot not be created!!";
}
fclose($fp);

$fptr = fopen($file,"r");
if(file_exists($file)){
    //processing
    $str = fread($fptr,30);
    echo $str;
}else{
    echo "Error: File not found!";
}
fclose($fptr);
?>
