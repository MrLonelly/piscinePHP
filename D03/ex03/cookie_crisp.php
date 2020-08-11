
<?php
	if(isset($_GET['action']) && isset($_GET['name']))
	{
		if($_GET['action'] == 'set')
		{
			setcookie($_GET['name'], $_GET['value'], time() + 8600, "/", "localhost", 0);
			echo "setted";
		}
		elseif ($_GET['action'] == 'get')
		{
			if(isset($_COOKIE[$_GET['name']]))
				echo $_COOKIE[$_GET['name']]."\n";
		}
		elseif ($_GET['action'] == 'del')
		{
			setcookie($_GET['name'], "", time() - 45, "/", "localhost", 0);
		}
	}
?>