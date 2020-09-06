<?php
session_start();
require_once '../DB/config.php';

if (isset($_POST['addAuthor'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$userType = 'admin';
	if (empty($name) || empty($email) || empty($username) || empty($password)) {
		$_SESSION['message'] = "<font color='brown'>Field can not be empty!</font><br>";
		header('location:../Views/admins.php');
	}else{
		$q1 = "INSERT INTO users (username, password, email, name, userType) VALUES ('$username','$password','$email','$name','$userType')";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>New admin successfully Added!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during insertion!</font><br>";
			
		}
		header('location:../Views/admins.php');
	}
}