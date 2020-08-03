<?php
function auth($login, $passwd)
{
	$pass = hash("whirlpool", $passwd);
	$compdata = file_get_contents("../private/passwd");
	$undata = unserialize($compdata);
	foreach ($undata as &$user)
	{
		if ($login == $user["login"])
		{
			if ($user["passwd"] == $pass)
				return (TRUE);
			else
				return (FALSE);
		}
	}
	return (FALSE);
}
?>
