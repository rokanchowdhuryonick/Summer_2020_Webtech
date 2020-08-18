<?php
session_start();
if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:../index.php');
	exit();
}

if (isset($_GET['adminId']) && !empty($_GET['adminId'])) {
	if ($_GET['adminId']==$_SESSION['userId']) {
		$_SESSION['message'] = "<font color='brown'>Sorry bro! You can't delete yourself!</font><br>";
	}else{
		require_once '../DB/config.php';
		$adminId = $_GET['adminId'];
		$sql = "DELETE FROM users WHERE id='$adminId'";
		if (mysqli_query($conn,$sql)) {
			$_SESSION['message'] = "<font color='darkgreen'>Admin account successfully deleted!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Failed to delete admin account!</font><br>";
		}
	}
	header('location:../Views/admins.php');
}else{
	header('location:../Views/dashboard.php');
}