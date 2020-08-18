<?php
session_start();
if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
//For Profile data change
if (isset($_POST['changeProfile'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	if (empty($name) || empty($email)) {
		$_SESSION['message'] = "<font color='brown'>Name and Email can not be empty!</font><br>";
	}else{
		$q1 = "UPDATE users SET name='$name', email='$email' WHERE id='$userId'";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>Profile data successfully changed!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during update!</font><br>";
		}
	}
}

//For Password Change
if (isset($_POST['changePassword'])) {
	$currentPassword = $_POST['currentPassword'];
	$newPassword = $_POST['newPassword'];
	$newPassword2 = $_POST['newPassword2'];
	if (empty($currentPassword) || empty($newPassword) || empty($newPassword2)) {
		$_SESSION['message'] = "<font color='brown'>During password change field should not be empty!</font><br>";
	}else if ($newPassword != $newPassword2) {
		$_SESSION['message'] = "<font color='brown'>New Password and Again New Password not matched!</font><br>";
	}else if ($currentPassword!=$userData['password']) {
		$_SESSION['message'] = "<font color='brown'>Current Password was wrong</font><br>";
	}else{
		$q1 = "UPDATE users SET password='$newPassword' WHERE id='$userId'";
		if (mysqli_query($conn, $q1)) {
			$_SESSION['message'] = "<font color='darkgreen'>Password successfully changed!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Opps! Error occured with database during update!</font><br>";
		}
	}
	header('location:')
}