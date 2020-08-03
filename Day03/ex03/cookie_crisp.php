<?php
if (!$_GET)
	exit;
if ($_GET["action"] == "set")
	setcookie($_GET["name"], $_GET["value"]);
else if ($_GET["action"] == "get")
{
	foreach ($_COOKIE as $key => $value)
	{
		if ($_GET["name"] == $key)
			echo $value . "\n";
	}
}
else if ($_GET["action"] == "del")
	setcookie($_GET["name"], '', time () - 60);
?>
