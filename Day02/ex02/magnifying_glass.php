#!/usr/bin/php
<?php

function match($str)
{
	$string2 = preg_replace_callback('/title=".*?"/', "match2", $str);
	$string2 = preg_replace_callback('/>.*?</', "match3", $string2[0]);
	return ($string2);
}

function match2 ($str)
{
	$str = preg_replace_callback('/".*"/', "match3", $str);
	return ($str[0]);
}

function match3 ($str)
{
	return (mb_strtoupper($str[0]));
}

if ($argc == 1)
	exit;
$tab = file_get_contents($argv[1]);

$line = preg_replace_callback('/<a.*<\/a>/', "match", $tab);
echo $line;
?>
