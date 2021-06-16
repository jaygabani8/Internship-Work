<?php
$a = array(
	'Name' => "JayGabani",
	'Mobile' => "9998885533",
  'College'=> "BITS Edu Campus",
	'City' => "Vadodara",
	'Pincode' => "391240",
	'Php' => "Internship",
);

$a1=array(15,21,10);
$pro = array_product ($a1);

$b=array(11,20,21,22,17,10,20,21,24,18,15,19,29,20);
$s = array_sum ($b);

$a1 = array("Name", "Mobile","College", "City", "Pincode", "Php");
$b1 = array("JayGabani", "9998885533","BITS Edu Campus","Vadodara", "391240", "Internship");

$z = "My Favourite Cricketer Is Virat Kohli";
$x = array("My", "Name", "Is", "JayGabani");

$c1=array("A","D","I","K","L");
$d1=array("D","Z","J","A","B","O");

$e=array(12,14,15,16,17,12,16,14,28,29,28);

//Counting Array
echo "<h2>Counting Array</h2>";
$Cou = count($a);
echo "<pre> A ";
print_r($a);
echo "<br/>A Array Contains $Cou Fields.";

//End Element
echo "<h2>End Element</h2>";
echo "<pre> A ";
print_r($a);
$End = end($a);
echo "<br/> Last Element Is : $End.";

//Flip Array Function
echo "<h2>Flip Array</h2>";
echo "<pre>";
print_r($a);
echo "<pre> Flipped ";
print_r(array_flip($a));

//Change Key Case
echo "<h2>Change Key Case</h2>";
echo "<pre> Before: A ";
print_r($a);
echo "<pre> After: A ";
print_r(array_change_key_case($a,CASE_UPPER));

//Combine Array
echo "<h2>Combine Array</h2>";
echo "<pre> A1 ";
print_r($a1);
echo "<pre> B1 ";
print_r($b1);
echo "<pre> Combined ";
print_r(array_combine($a1, $b1));

//Explode
echo "<h2>Explode</h2>";
$exp = explode(" ",$z);
echo $z;
echo "<pre>";
print_r($exp);


//Implode
echo "<h2>Implode</h2>";
echo "<pre>";
print_r($x);
$imp = implode(" ",$x);
echo "<br/>$imp";

//Intersect Array
echo "<h2>Intersect Array</h2>";
echo "<pre> C1 ";
print_r($c1);
echo "<pre> D1 ";
print_r($d1);
echo "<pre> Intersected ";
print_r(array_intersect($c1,$d1));

//Reverse Array
echo "<h2>Reverse Array</h2>";
echo "<pre> A ";
print_r($a);
echo "<pre> Reversed ";
print_r(array_reverse($a));

//asort Array
echo "<pre> Orinal ";
print_r($e);
asort($e);
echo "<pre> Sorted ";
print_r($e);

//Merge Array
echo "<h2>Merge Array</h2>";
echo "<pre> C1 ";
print_r($c1);
echo "<pre> D1 ";
print_r($d1);
echo "<pre> Merged ";
print_r(array_merge($c1,$d1));

// Array sum
echo "<pre>";
print_r(array_count_values ($b));
echo "Total Of All Array Numbers = $s.";

//Array Diffrence
echo "<h2>Array Difference</h2>";
$result=array_diff($c1,$d1);
print_r($result);

///Array Product
echo "<pre>";
print_r(array_count_values ($a1));
echo "<pre>";
echo "Product Of All Array Numbers = $pro.";


//Push Array
echo "<h2>Push Array</h2>";
echo "<pre> C1 ";
print_r($c1);
array_push($c1,"R","U","C","H","I","T");
echo "<pre> New C1 ";
print_r($c1);

//Pop Array
echo "<h2>Pop Array</h2>";
echo "<pre> A ";
print_r($a);
array_pop($a);
echo "<pre> New A ";
print_r($a);

//Random Array
echo "<h2>Random Array</h2>";
$R = array_rand($a, 2);
echo "<pre> ";
print_r($a);
echo "<pre> Random ";
print_r($R);

//Search Array
echo "<h2>Search Array</h2>";
$S = array_search('Ruchit', $a);
echo "<pre> ";
print_r($a);
echo "<br/> Index Position At : $S";

//Unique Array
echo "<h2>Unique Array</h2>";
echo "<pre> E ";
print_r($e);
echo "<pre> Unique E ";
print_r(array_unique($e));

//Shuffle Array
echo "<h2>Shuffled Array</h2>";
echo "<pre> A ";
print_r($a);
shuffle($a);
echo "<pre> Shuffled A ";
print_r($a);

//key exists array
$k = array_key_exists('Mobile', $a);
echo "<pre> ";
print_r($a);
echo "If Entred Value is Avaliable Then It Gives Out-put '1' Else ' '. <br/>Here Out-put is = $k.";


//Reverse Sorting Array
echo "<h2>Reversed Sorted Array</h2>";
echo "<pre> E ";
print_r($e);
rsort($e);
echo "<pre> Reverse Sorted E";
print_r($e);


//Printing Array Values
echo "<h2>Printing Array Values</h2>";
echo "<pre> A ";
print_r($a);
echo "<br/>Values Of A Array";
$Val = array_values($a);
foreach($Val as $key => $Value) {
echo " <br />$key - $Value";
}
?>
