#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}
$str = trim(preg_replace('/\s+/', '', $argv[1]));
$op = strpbrk($str, "+-*/%");
$op = $op[0];
$str_ar = explode($op, $str);
if (!is_numeric($str_ar[0]) || !is_numeric($str_ar[1]) || (count($str_ar) != 2))
{
	echo "Syntax Error\n";
	exit;
}
$a = (int)$str_ar[0];
$b = (int)$str_ar[1];
$opper = array('+', '-', '*','/', '%');
if (array_search($op, $opper) != NULL)
{
	switch($op)
	{
		case "+":
			echo ($a + $b) . "\n";
		break;
		case "*":
			echo ($a * $b) . "\n";
			break;
		case "/":
			if ($b == 0)
				echo "Wrong input\n";
			else
				echo ($a / $b) . "\n";
			break;
		case "-":
			echo ($a - $b) . "\n";
			break;
		case "%":
			if ($b == 0)
				echo "Wrong input\n";
			else
				echo ($a % $b) . "\n";
			break;
	}
}
else
	echo "Syntax Error\n";
?>
