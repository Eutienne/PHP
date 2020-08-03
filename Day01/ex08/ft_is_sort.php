#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp, SORT_STRING);
	if ($tmp == $tab)
		return (true);
	else
		return (false);
}
?>
