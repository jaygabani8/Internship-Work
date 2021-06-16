<?php
//Associative Array
//Key=Value

//Method 1
$a[0] = 15;
$a['c'] = "Computer";
$a['php'] = "Web Development";
$a[10] = "Ten";
$a[50] = 50.50;

//Method 2
$a = array(
     0 =>15,
     "c"=>"Computer",
     "php"=>"Web Devlopment",
     10=>"Ten",
     50=> 50.50
);

//Print Value
echo "c for ".$a['c'];

foreach ($a as $value) {
    echo "<br> Value is <b>$value</b>";
}

foreach ($a as $key => $value) {
    echo "<br>Key is <b>$key</b> Value is <b>$value</b>";
}


?>
