<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}

if (isset($_POST['addAuthor'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$userType = 'author';
	if (empty($name) || empty($phone) || empty($username) || empty($password)) {
		$_SESSION['message'] = "<font color='brown'>Field can not be empty!</font><br>";
		header('location:../Views/addAuthor.php');
	}else{
		$q1 = "INSERT INTO users (name, phone, username, password, userType) VALUES ('$name', '$phone', '$username','$password','$userType')";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>New author successfully Added!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during insertion!</font><br>";
			
		}
		header('location:../Views/addAuthor.php');
	}
}