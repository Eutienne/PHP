<?php
if (!$_POST["oldpw"] || !$_POST["newpw"] || !$_POST || $_POST["submit"] != "OK")
{
	echo "ERROR\n";
	exit;
}
$compdata = file_get_contents("../private/passwd");
$undata = unserialize($compdata);
if ($undata)
{
	foreach ($undata as &$user)
	{
		if ($_POST["login"] == $user["login"])
		{
			if ($user["passwd"] == hash("whirlpool", $_POST["oldpw"]))
			{
				$user["passwd"] = hash("whirlpool", $_POST["newpw"]);
				$compdata = serialize($undata);
				file_put_contents("../private/passwd", $compdata);
				echo "OK\n";
				exit;
			}
			else
			{
				echo "ERROR\n";
				exit;
			}
		}
	}
}
echo "ERROR\n";
?>
