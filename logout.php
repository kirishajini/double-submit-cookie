<?php
	session_start(); 
	if((!isset($_SESSION["logined"])))
	{
		header("location:index.php");
		exit();
	}
	if(isset($_POST['csrf']) && isset($_COOKIE['CSRF-Token'])){
		if($_POST['csrf'] == $_COOKIE['CSRF-Token']){
			echo "Logout Success";
			session_destroy();
		}
		else{
			echo "CSRF Check Failed";
		}
	}
	
?>