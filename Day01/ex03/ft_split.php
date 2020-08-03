#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = trim(preg_replace('/ +/', ' ', $str));
	$str_ar = explode(' ', $str);
	sort($str_ar, SORT_STRING);
	return ($str_ar);
}
?>
