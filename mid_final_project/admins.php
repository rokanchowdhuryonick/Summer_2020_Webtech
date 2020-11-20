<?php
//Coded by Rokan Chowdhury Onick
////From Github.com/rokanchowdhuryonick
session_start();
require_once 'config.php';

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['userType']) || ($_SESSION['logged_in']!=1) || ($_SESSION['userType']!='admin')) {
	header('location:index.php');
	exit();
}

$message = "";

//For Profile data change
if (isset($_POST['addAdmin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$userType = 'admin';
	if (empty($name) || empty($email) || empty($username) || empty($password)) {
		$message = "<font color='brown'>Field can not be empty!<br>--by Rokan</font><br>";
	}else{
		$q1 = "INSERT INTO users (username, password, email, name, userType) VALUES ('$username','$password','$email','$name','$userType')";
		if (mysqli_query($conn, $q1)) {
			$message = "<font color='darkgreen'>New admin successfully Added!<br>--by Rokan</font><br>";
		}else{
			$message = "<font color='brown'>Opps! Error occured with database during insertion!</font><br>";
		}
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>New Admin</title>
</head>
<body bgcolor="aqua">
	<table border="1" width="100%" cellpadding="10">
		<tr>
			<td align="center" colspan="2" bgcolor="dimgray">
				<h1>
					Add New Admin
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
				<table width="100%" cellpadding="6">

				<form action="" method="post">
					<tr>
						<td width="10%">
							User Name
						</td>
						<td>
							<input type="text" name="username" size="50">
						</td>
						<td>
							Password
						</td>
						<td>
							<input type="text" name="password" size="50">
						</td>
					</tr>
					<tr>
						<td>
							Name
						</td>
						<td>
							<input type="text" name="name" size="50">
						</td>
						<td>
							E-mail
						</td>
						<td>
							<input type="text" name="email" size="50">
						</td>
					</tr>
					<tr>
						<td colspan="4" align="right"><hr>
							<input type="submit" name="addAdmin" value="Add Admin">
						</td>
					</tr>
				</form>
				</table><br>
				<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])) echo $_SESSION['message']; unset($_SESSION['message']); ?>
				<br>
				<table width="100%" border="1">
					<tr>
						<th>Sl.</th>
						<th>Name</th>
						<th>Email</th>
						<th>User Name</th>
						<th>Action</th>
					</tr>
			<?php 
			$userId = $_SESSION['userId'];
				$query = mysqli_query($conn, "SELECT * FROM users WHERE userType='admin' AND id!='$userId'");
				$i=0;
				while ($userData = mysqli_fetch_assoc($query)) {
			?>
					<tr>
						<td><?=++$i?></td>
						<td><?=$userData['name']?></td>
						<td><?=$userData['email']?></td>
						<td><?=$userData['username']?></td>
						<td><a href="delete_account.php?adminId=<?=$userData['id']?>">Delete</a></td>
					</tr>
				<?php } ?>
				</table>
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