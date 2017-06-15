<?php

	$username = "toto";
	$password = "tata";

	if(isset($_POST['username']) && isset($_POST['password']))	{
		if($_POST['username'] == $username && $_POST['password'] == $password)	{
			session_start();
			$_SESSION['user'] = $username;
			echo "Succes";
		} else {
			echo "Failed";
		}
	}
?>