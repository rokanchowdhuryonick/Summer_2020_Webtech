<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}


if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$q1 = mysqli_query($conn,"SELECT * FROM users WHERE userType!='admin' AND username='$username'");
	if(mysqli_num_rows($q1)>=1)
	{
		$row=mysqli_fetch_assoc($q1);

		$data = "<table>";
		$data .="<tr><td>".$row['name']."</td></tr>";
		$data .="<tr><td>".$row['phone']."</td></tr>";
		$data .="<tr><td>".$row['username']."</td></tr>";
		$data .="<tr><td>".$row['password']."</td></tr>";
		echo $data;
	}else{
		echo "Nothig Found..";
	}
}