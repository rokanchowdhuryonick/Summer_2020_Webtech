<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['email'])){

		    $email = $_POST['email'];

			$status = isEmailExists($email);

			if($status==true){
				//header('location: ../views/login.php?success=registration_done');
				echo "Email already exists!";
			}else{
				echo " ";
				//header('location: ../views/register.php?error=db_error');
			}
	}



?>


