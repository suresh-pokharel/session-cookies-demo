<?php 
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header('location:login.php');
	}

 ?>



This is home page

<a href="logout.php">logout</a>