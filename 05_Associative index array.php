<?php

echo "<h3>2. Associate index array</h3>";
$book = array("bid"=>"101","title"=>"PHP","Price"=>"400.00");

foreach ($book as $attribute => $value) {
    echo "<br>";
    echo "$attribute : $value";            // echo $book[$attribute];
}


?>