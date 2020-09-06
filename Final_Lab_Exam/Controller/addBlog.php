<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 ) {
	header('location: ../Views/login.php');
	exit();
}

if (isset($_POST['addBlog'])) {
	$title = $_POST['title'];
	$blog = $_POST['details'];
	if (empty($title) || empty($blog) ) {
		$_SESSION['message'] = "<font color='brown'>Field can not be empty!</font><br>";
		header('location:../Views/addBlog.php');
	}else{
		$userId = $_SESSION['userId'];
		$q1 = "INSERT INTO post (title, details, userId) VALUES ('$title', '$details', '$userId')";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>New Blog successfully Added!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during insertion!</font><br>";
			
		}
		header('location:../Views/addBlog.php');
	}
}