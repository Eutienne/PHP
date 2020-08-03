#!/usr/bin/php
<?php
date_default_timezone_set("CET");
if ($argc != 2)
	exit;
if (preg_match('/^.* \d{2} .* \d{4} \d\d:\d\d:\d\d$/', $argv[1]) == 0)
{
	echo "Wrong Format\n";
	exit;
}
$date = explode(' ', $argv[1]);
$day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi","dimanche");
$month = array("janvier" => 1, "février" => 2, "mars" => 3, "avril" => 4, "mai" => 5, "juin" => 6, "juillet" => 7, "août" => 8, "septembre" => 9,"octobre" => 10, "novembre" => 11, "décembre" => 12);
$nday = (int)$date[1];
$keym = mb_strtolower($date[2]);
$keyd = mb_strtolower($date[0]);
$year = (int)$date[3];
$date = explode(':', $date[4]);

if (!$month[$keym] || !array_search($keyd, $day))
{
	echo "Wrong Format\n";
	exit;
}

$time = mktime ($date[0], $date[1], $date[2], $month[$keym], $nday, $year);

echo $time."\n";
?>
