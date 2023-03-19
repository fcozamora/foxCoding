<?php
session_start();
include "../Configs/config.php";
session_unset();

session_destroy();
 
header("Location: ../Views/loginView.html");
?>