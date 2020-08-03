#!/usr/bin/php
<?php
if ($argv)
$value = $argv[1];

foreach(array_slice($argv, 2) as $element)
{
	$split = explode(':', $element);

	$key = $split[0];
	$answer = $split[1];

	$map[$key] = $answer;
}
if ($map[$value])
	echo $map[$value] . "\n";
?>
