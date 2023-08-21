<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP introduction</title>
</head>
<body>
    <h2>Learning PHP basics:</h2>
    <?php

    //Single Line Comment
    /*
    Multiple
    Line
    Comment
     */
    $person = "Binu Bhatt";
    $age = 20;
    $salary = 40000.99;
    $isPresent = true;
    $arr = array("C",1000,false,12.56,"JavaScript");

    echo "<H2> Datatypes in PHP</h2>";
    echo "The age of the ".$person." is ".$age." and her salary is Rs. ".$salary." and She is ".$isPresent;
    echo "<br>";
    echo var_dump($person);             //string(11) "Binu Bhatt"
    echo "<br>";
    echo var_dump($age);                //int(20)
    echo "<br>";
    echo var_dump($salary);             //float(40000.99)
    echo "<br>";
    echo var_dump($isPresent);          //bool(true)
    echo "<br>";
    echo var_dump($arr);
        /*array(5) { [0]=> string(1) "C" [1]=> int(1000) [2]=> bool(false)
         [3]=> float(12.56) [4]=> string(10) "JavaScript" }
         */
    echo "Frist element of array is: ".$arr[0];
    echo "<br>Last element of array is: ".$arr[4];

    echo "<h2>Operators in PHP</h2>";
    
    $num_1 = 20;
    $num_2 = 5;
    echo "<br>Sum of ".$num_1." and ".$num_2." is ".($num_1+$num_2);
    echo "<br>Sum of ".$num_1." and ".$num_2." is ".($num_1-$num_2);
    echo "<br>Sum of ".$num_1." and ".$num_2." is ".($num_1*$num_2);
    echo "<br>Sum of ".$num_1." and ".$num_2." is ".($num_1/$num_2);
    echo "<br>Sum of ".$num_1." and ".$num_2." is ".($num_1%$num_2);

    $a = true;
    $b = false;
    echo "<br>The and of a and b ".($a and $b);
    echo "<br>The and of a and b ".($a && $b);
    echo "<br>The or of a and b ".($a or $b);
    echo "<br>The or of a and b ".($a || $b);
    echo "<br>The not of a ".(!$a);
    echo "<br>The xor of a and b ".($a xor $b);
    ?>
</body>
</html>