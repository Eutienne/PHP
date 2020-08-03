#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = trim(preg_replace('/ +/', ' ', $str));
	$str_ar = explode(' ', $str);
	sort($str_ar, SORT_STRING);
	return ($str_ar);
}
if ($argc == 1)
	exit;
unset($argv[0]);
foreach ($argv as $elem)
	$arr .= ' ' . $elem;
$arr = ft_split($arr);
foreach ($arr as $elem)
		echo "$elem\n";
?>
