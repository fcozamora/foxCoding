<?php
session_start(); 
include "../Configs/config.php";
include "../Models/dbModel.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: ../Views/loginView.html?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: ../Views/loginView.html?error=Password is required");
	    exit();
	}else{
		roleAuth($email, $password);
	}
	
}else{
	header("Location: ../Views/loginView.html");
	exit();
}
?>