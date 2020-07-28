<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['status'])) {
	header("location:login.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rokan Chowdhury Onick</title>
</head>
<body>
	<br><br>
	<table border="1" align="center" width="60%">
		<tr>
			<td align="center">
				<h3>X Company</h3>

			</td>
			<td align="right">
				Logged in as <a href="profile.php"><?=$_COOKIE['name']?></a> | <a href="logout.php">Logout</a>
			</td>
		</tr>
		<tr height="150px">
			<td>
				<h3>Account</h3><hr>
			 <ul>
			 	<li><a href="dashboard.php">Dashboard</a></li>
			 	<li><a href="profile.php">View Profile</a></li>
			 	<li><a href="edit_profile.php">Edit Profile</a></li>
			 	<li><a href="change_picture.php">Change Profile Picture</a></li>
			 	<li><a href="change_password.php">Change Password</a></li>
			 	<li><a href="logout.php">Logout</a></li>
			 </ul>
			</td>
			<td>
				<fieldset>
				    <legend><b>PROFILE</b></legend>
					<form>
						<br/>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>Name</td>
								<td>:</td>
								<td><?=$_COOKIE['name']?></td>
								<td rowspan="7" align="center">
									<img width="128" src="<?=$_COOKIE['image']?>"/>
				                    <br/>
				                    <a href="picture.php">Change</a>
								</td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?=$_COOKIE['email']?></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><?=$_COOKIE['gender']?></td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td><?=$_COOKIE['day'].'/'.$_COOKIE['month'].'/'.$_COOKIE['year']?></td>
							</tr>
						</table>	
				        <hr/>
				        <a href="edit_profile.php">Edit Profile</a>	
					</form>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<center>Copyright &copy; Rokan Chowdhury Onick</center>
			</td>
		</tr>
	</table>

</body>
</html>


