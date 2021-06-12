<?php
$number1 = 26;
$number2 = 42;
$ans = 0;
$case = 3;

switch($case) {
	case "1";
		$ans = $number1 + $number2;
		echo "The Addition of $number1 and $number2 is $ans. <br>";
		break;

	case "2";
		$ans = $number1 - $number2;
		echo "The Subtraction of $number1 and $number2 is $ans. <br>";
		break;

	case "3";
		$ans = $number1 * $number2;
		echo "The Multiplication of $number1 and $number2 is $ans. <br>";
		break;

	case "4";
		$ans = $number1 / $number2;
		echo "The Division of $number1 and $number2 is $ans. <br>";
		break;
	}
?>
