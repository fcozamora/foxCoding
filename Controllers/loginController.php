<?php
session_start(); 
include "../Configs/config.php";
include "../Models/loginModel.php";
include "../Models/dbModel.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: ../Views/loginView.html?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: ../Views/loginView.html?error=Password is required");
	    exit();
	}else{

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && $row['password'] == $password) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['descriptionAuth'] = userIdAuth($row['id_authorization']);
				if ($row['id_authorization'] == 1){					
					header("Location: ../Views/adminView.php");
					exit();
				} else if ($row['id_authorization'] == 2){					
					header("Location: ../Views/accountingView.html");
					exit();
				}
            	
            }else{
				header("Location: ../Views/loginView.html?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../Views/loginView.html?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../Views/loginView.html");
	exit();
}

?>