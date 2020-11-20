<?php
//Coded by Rokan Chowdhury Onick
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) ||  ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}
if ((!isset($_GET['teacherId']) || empty($_GET['teacherId'])) && (!isset($_GET['studentId']) || empty($_GET['studentId']))) {
	header('location: dashboard.php');
	exit();
}

if (isset($_POST['editTeacher'])) {
	$message = "<font color='darkgreen'>Teacher Successfully Edited!</font><br>";
}
if (isset($_POST['editStudent'])) {
	$message = "<font color='darkgreen'>Student Successfully Edited!</font><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Edit User | Rokan
				</h1>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<?php include_once 'includes/topbar.php'; ?>
			</td>
		</tr>
		<tr height="360px">
			<td width="25%">
				<?php include_once 'includes/sidebar.php'; ?>
			</td>
			<td align="center" bgcolor="cadetblue">
				<?php if(!empty($message))echo $message."<br>"; ?>
				<form action="" method="post">
					<table width="90%" cellpadding="6" cellspacing="3">
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name" value="Md. Demo Man" size="50">
							</td>
							<td>
								Date of Birth
							</td>
							<td>
								<input type="date" value="1999-10-31" name="birthday">
							</td>
						</tr>
					<?php if (isset($_GET['studentId'])) { ?>
						<tr>
							<td>
								Father
							</td>
							<td>
								<input type="text" name="father" value="Mr. Demo" size="50">
							</td>
							<td>
								Mother
							</td>
							<td>
								<input type="text" name="mother" value="Mrs. Demo">
							</td>
						</tr>
					<?php } ?>
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="text" name="email" value="demo@gmail.com" size="50">
							</td>
							<td>
								Mobile
							</td>
							<td>
								<input type="text" name="phone" value="0188888888">
							</td>
						</tr>
						<tr>
							<td>
								Address
							</td>
							<td>
								<input type="address" name="address" value="Dhaka, Bangladesh" size="50">
							</td>
							<td>
								Department
							</td>
							<td>
								<select name="department">
									<option value="1">Department of CSE</option>
									<option value="2">Department of BBA</option>
									<option value="3">Department of EEE</option>
									<option value="4">Department of English</option>
									<option value="5" selected>Department of Psycology</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								User Id
							</td>
							<td>
								<?php if(isset($_GET['teacherId'])){ ?>
									<input type="text" value="15-1002-1" disabled="" name="username" size="50">
								<?php }elseif (isset($_GET['studentId'])) {
									?>
									<input type="text" value="18-36782-1" disabled="" name="username" size="50">
								<?php } ?>
								
							</td>
							<td>
								Profile Image
							</td>
							<td>
								<input type="file" name="photo" accept="image/*">
							</td>
						</tr>
						<tr>
							<td>
								Gender
							</td>
							<td>
								<select name="gender">
									<option value="0">Male</option>
									<option value="1">Female</option>
								</select>
							</td>
					<?php if (isset($_GET['teacherId'])) { ?>
						
							<td>
								Position
							</td>
							<td>
								<select name="position">
									<option value="1">Lecturer</option>
									<option value="2">Assistant Professor</option>
									<option value="3" selected="">Associate Professor</option>
								</select>
							</td>
						
					<?php } ?>
						</tr>
						<tr>
							<td colspan="4" align="right">
								<?php if(isset($_GET['teacherId'])){ ?>
									<input type="submit" name="editTeacher" value="Edit Teacher" >
								<?php }elseif (isset($_GET['studentId'])) {
									?>
									<input type="submit" name="editStudent" value="Edit Student" >
								<?php } ?>
								
							</td>
						</tr>
					</table>
				</form>
			</td>
		</tr>
		<tr>
			<td height="65px" bgcolor="dimgray" colspan="3">
				<center>Copyright &copy; Rokan Chowdhury Onick</center>
			</td>
		</tr>
	</table>

</body>
</html>