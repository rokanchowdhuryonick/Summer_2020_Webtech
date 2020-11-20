<?php
session_start();
if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}

if (isset($_GET['studentId']) && !empty($_GET['studentId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Student Account Successfully Deleted!</font><br>";
	header('location:students_list.php');
}else if (isset($_GET['teacherId']) && !empty($_GET['teacherId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Teacher Account Successfully Deleted!</font><br>";
	header('location:teachers_list.php');
}else if (isset($_GET['deptId']) && !empty($_GET['deptId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>A department successfully deleted!</font><br>";
	header('location:department_list.php');
}else if (isset($_GET['courseId']) && !empty($_GET['courseId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Course successfully deleted!</font><br>";
	header('location:course_list.php');
}else if (isset($_GET['noticeId']) && !empty($_GET['noticeId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Notice successfully deleted!</font><br>";
	header('location:notice_list.php');
}else if (isset($_GET['salaryId']) && !empty($_GET['salaryId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Salary successfully deleted!</font><br>";
	header('location:salary_list.php');
}else if (isset($_GET['studentPayId']) && !empty($_GET['studentPayId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Student Payment successfully deleted!</font><br>";
	header('location:student_payment_list.php');
}else if (isset($_GET['onholdId']) && !empty($_GET['onholdId'])) {
	$_SESSION['message'] = "<font color='darkgreen'>Account successfully deleted!</font><br>";
	header('location:accounts_onhold.php');
}else if (isset($_GET['adminId']) && !empty($_GET['adminId'])) {
	if ($_GET['adminId']==$_SESSION['userId']) {
		$_SESSION['message'] = "<font color='brown'>Sorry bro! You can't delete yourself!</font><br>";
	}else{
		require_once 'config.php';
		$adminId = $_GET['adminId'];
		$sql = "DELETE FROM users WHERE id='$adminId'";
		if (mysqli_query($conn,$sql)) {
			$_SESSION['message'] = "<font color='darkgreen'>Admin account successfully deleted!</font><br>";
		}else{
			$_SESSION['message'] = "<font color='brown'>Failed to delete admin account!</font><br>";
		}
	}
	header('location:admins.php');
}else{
	header('location:dashboard.php');
}