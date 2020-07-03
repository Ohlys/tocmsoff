<?php 
session_start();
include('php/init.php');

if(isset($_GET['p']))
{

	$p = htmlentities($_GET['p']);

	if($p == "index")
	{

		include('php/act/login.php');
		include('php/ftc/newsindex.php');

		include('page/index.php');

		if (isset($_SESSION['connected']))
		{

			header('Location: ?p=me');

		}



	}
	else if($p == "register")
	{

		include('php/act/register.php');
		include('php/ftc/lastusers.php');

		include('page/register.php');
		if (isset($_SESSION['connected']))
		{

			header('Location: ?p=me');

		}
		
	}

	else if($p == "me")
	{

		include('php/ftc/userinfo.php');
		include('php/ftc/maj.php');
		include('php/ftc/badges.php');

		include('page/me.php');

		if(!isset($_SESSION['connected']))
		{

			header('Location: ?p=index');

		}

	}
	else if($p == "online")
	{

		include('php/ftc/online.php');

		include('page/online.php');

		if(!isset($_SESSION['connected']))
		{

			header('Location: ?p=index');

		}

	}
	else if($p == "logout")
	{

		require('logout.php');

	}
	
	else
	{

		header('Location: ?p=index');

	}

}
else
{

	header('Location: ?p=index');

}
?>
