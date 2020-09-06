<?php
@session_start();
require_once '../DB/config.php';
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==1) {
	header('location: ../Views/dashboard.php');
	exit();
}

if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			$_SESSION['message'] = "<font color='brown'>Field can't be empty</font>";
			header('location: ../Views/login.php');
		}else{

			$query=mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
		//var_dump($query);
		 if(mysqli_num_rows($query)>=1)
		   {
		   		$user= mysqli_fetch_assoc($query);

			    $_SESSION['userId'] = $user['id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['userType'] = $user['userType'];
				$_SESSION['logged_in'] = 1;
				if (isset($_POST['save'])) {
					setcookie('username', $username, time() + (86400 * 30), "/");
					setcookie('password', $password, time() + (86400 * 30), "/");
				}else{
					unset($_COOKIE['username']);
					unset($_COOKIE['password']);
				}
				header('location:../Views/dashboard.php');
		   }else{
		   		$_SESSION['message'] = '<font color="red">User with this id and password doesn\'t exists!</font><br>';
		   		header('location:../Views/login.php');
		   }
		}
	}




		
			
