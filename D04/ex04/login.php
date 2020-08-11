<?php
	session_start();

	require ("auth.php");

	if($_SESSION['logged_as_user'])
	{
		?>
		<a href="chat.php">Click Here to join chat</a>
		<?php
	}
	else
	{
		if($_POST['login'] && $_POST['password'])
		{
			if(auth($_POST['login'], $_POST['password']))
			{
				$_SESSION['logged_as_user'] = $_POST['login'];
				?>
					<a href="chat.php">Click Here to join chat</a>
				<?php
			}
			else
			{
				echo "wrong username or passowrd";
			}
		}
	}
?>