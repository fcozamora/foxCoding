<?php
include "../Configs/config.php";
session_start();

session_unset();

session_destroy();
 
header("Location: ../Views/loginView.html");
?>