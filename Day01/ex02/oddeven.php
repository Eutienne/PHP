#!/usr/bin/php
<?php
while (1){
echo "Enter a number: ";
$value = (fgets(STDIN));
if ($value === false)
{
	echo "\n";
	exit;
}
$value = substr($value, 0, strlen($value) - 1);
if (is_numeric($value))
{
	
	if (substr($value, -1) % 2 == 0)
		echo "The number $value is even\n";
	else
		echo "The number $value is odd \n";
}
else
	echo "'$value' is not a number \n";
}
?>
