#!/usr/bin/php
<?php
if ($argc == 2)
{
	$str = trim(preg_replace('/\s+/', ' ', $argv[1]));
	echo $str . "\n";
}
else
	echo "bad argument\n";
?>
