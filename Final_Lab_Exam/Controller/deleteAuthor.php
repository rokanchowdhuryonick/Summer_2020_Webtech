<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}

if (isset($_GET['id'])) {
	if ($_GET['id']==$_SESSION['userId']) {
		$_SESSION['message'] = "<font color='brown'>Sorry bro! You can't delete yourself!</font><br>";
	}else{
		$authorId=$_GET['id'];
		$sql = "DELETE FROM users WHERE id='$authorId'";
		if (mysqli_query($conn,$sql)) {
			$_SESSION['message'] = "<font color='darkgreen'>Author account successfully deleted!</font><br>";
			header('location: ../Views/authorList.php');
		}else{
			$_SESSION['message'] = "<font color='brown'>Failed to delete author account!</font><br>";
			header('location: ../Views/authorList.php');
		}
	}
}else{
	header('location: ../Views/authorList.php');
}