<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}

if (isset($_POST['editAuthor']) ) {
	$userId = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$userType = 'author';
	if (empty($name) || empty($phone) || empty($username) || empty($password)) {
		$_SESSION['message'] = "<font color='brown'>Field can not be empty!</font><br>";
		header('location:../Views/editAuthor.php?id='.$userId);
	}else{
		$q1 = "UPDATE users SET name = '$name', phone='$phone', username='$username', password='$password' WHERE userType='author' AND id='$userId'";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>Author successfully Updated!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during update!</font><br>";
			
		}
		header('location:../Views/editAuthor.php');
	}
}