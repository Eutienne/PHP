#!/usr/bin/php
<?php
if ($argc == 4 )
{
	$a = (int)$argv[1];
	$op = trim($argv[2]);
	$b = (int)$argv[3];

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
	echo "Incorrect Parameters\n";
?>
