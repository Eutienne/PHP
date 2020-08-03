#!/usr/bin/php
<?php
if ($argc == 1)
	exit;
$str = $argv[1];
$str = trim(preg_replace('/\s+/', ' ', $str));
$str_ar = explode(' ', $str);
$tmp = $str_ar[0];
unset($str_ar[0]);
foreach($str_ar as $elem)
	echo $elem . " ";
echo $tmp . "\n";
?>
