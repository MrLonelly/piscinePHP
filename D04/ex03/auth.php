<?php

function auth($login, $password)
{
	$pwd = hash('whirlpool', $password);
	if(file_exists("./private/passwd") && file_exists("./private"))
	{
		$data = unserialize(file_get_contents("./private/passwd"));

		foreach($data as $user)
		{
			if($user['login'] === $login && $user['password'] === $pwd)
			{
				return true;
			}
		}
	}
	return false;
}

?>