<?php
session_start();
if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
if (isset($_GET['studentId']) && !empty($_GET['studentId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Student Account Successfully Blocked!</font><br>";
	header('location:students_list.php');
}else if (isset($_GET['teacherId']) && !empty($_GET['teacherId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Teacher Account Successfully Blocked!</font><br>";
	header('location:teachers_list.php');
}else{
	header('location:dashboard.php');
}