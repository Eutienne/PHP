<?php
if (!$_POST["passwd"] || $_POST && $_POST["submit"] != "OK")
{	
	echo "ERROR\n";
	exit;
}

if (!file_exists("../private"))
{
	mkdir ("../private");
	file_put_contents("../private/passwd",	"");
}

else if (!file_exists("../private/passwd"))
	file_put_contents("../private/passwd", "");

$compdata = file_get_contents("../private/passwd");
$undata = unserialize($compdata);
if ($undata)
{
	foreach ($undata as $user)
	{
		if ($_POST["login"] == $user["login"])
		{
			echo "ERROR\n";
			exit;
		}

	}
}
$user = 
	[
		"login" => $_POST["login"], 
		"passwd" => hash("whirlpool", $_POST["passwd"])
	];
$undata [] = $user;
$compdata = serialize($undata);
file_put_contents("../private/passwd", $compdata);
echo "OK\n";
?>
