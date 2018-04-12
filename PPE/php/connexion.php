<?php

	$username = "toto";
	$password = "tata";

	if(isset($_GET['username']) && isset($_GET['password']))	{
		if($_GET['username'] == $username && $_GET['password'] == $password)	{
			session_start();
			$_SESSION['user'] = $username;
			echo "Succes";
		} else {
			echo "Failed";
		}
	}
?>