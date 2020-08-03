#!/usr/bin/php
<?php
function check($a, $b)
{
	$i = 0;
	$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$a_index = stripos($line, $a[$i]);
		$b_index = stripos($line, $b[$i]);
		if ($a_index > $b_index)
			return (1);
		else if ($a_index < $b_index)
			return (-1);
		else
			$i++;
	}
}

function ft_split($str)
{
	$str = trim(preg_replace('/\s+/', ' ', $str));
	$str_ar = explode(' ', $str);
	sort($str_ar, SORT_STRING);
	return ($str_ar);
}
if ($argc == 1)
	exit;
unset($argv[0]);
foreach($argv as $elem)
	$arr .= ' ' . $elem;
$arr = ft_split($arr);
usort($arr, "check");
foreach ($arr as $elem)
	echo "$elem" . "\n";
?>
