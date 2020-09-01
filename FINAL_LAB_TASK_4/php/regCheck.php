<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			echo "Required filed is empty";
			//header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				//header('location: ../views/login.php?success=registration_done');
				echo "Registration Done";
			}else{
				echo "Registration Failed";
				//header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>