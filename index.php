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

	}
	else if($p == "register")
	{

		
		
	}
	else if (isset($_SESSION['connected']))
	{



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