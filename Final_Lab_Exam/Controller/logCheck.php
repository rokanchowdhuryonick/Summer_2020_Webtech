<?php
@session_start();
require_once '../DB/config.php';

if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			$_SESSION['message'] = "<font color='brown'>Field can't be empty</font>";
			header('location: ../Views/login.php');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.php?error=invalid_user');
			}
		}
	}