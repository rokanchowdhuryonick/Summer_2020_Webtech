<?php

session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['status'])) {
	header("location:login.php");
	exit();
}
$error = $success="";
if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['dd']) || empty($_POST['mm']) || empty($_POST['yyyy']) ) {
	   $error="Required filed is empty!";
	}else{

		$_SESSION['email'] = $_POST['email'];
		$_SESSION['user']['email'] = $_POST['email'];
		setcookie('name', $_POST['name'], time() + (86400 * 30), "/");
		setcookie('email', $_POST['email'], time() + (86400 * 30), "/");
		setcookie('gender', $_POST['gender'], time() + (86400 * 30), "/");
		setcookie('day', $_POST['dd'], time() + (86400 * 30), "/");
		setcookie('month', $_POST['mm'], time() + (86400 * 30), "/");
		setcookie('year', $_POST['yyyy'], time() + (86400 * 30), "/");
		$success = "Succssfully Changed!";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Rokan Chowdhury Onick</title>
</head>
<body>
	<br><br>
	<center><?php if(!empty($error))echo $error; if(!empty($success)) echo $success; ?></center>
	<br>
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
				    <legend><b>EDIT PROFILE</b></legend>
					<form action="" method="post">
						<br/>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>Name</td>
								<td>:</td>
								<td><input type="text" name="name" value="<?=$_COOKIE['name']?>"></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="text" name="email" value="<?=$_COOKIE['email']?>"></td>
							</tr>		
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>
									<input name="gender" <?php 
									if($_COOKIE['gender']=='Male')echo 'checked'; 
									?> type="radio" value="Male" >Male
									<input name="gender" type="radio" value="Female" <?php 
									if($_COOKIE['gender']=='Female')echo 'checked'; 
									?>
									>Female
									<input name="gender" type="radio" value="Other" <?php 
									if($_COOKIE['gender']=='Other')echo 'checked'; 
									?> >Other
									
										
									</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>
									<input type="text" size="2" name="dd" value="<?=$_COOKIE['day']?>" />/
									<input type="text" size="2"  name="mm" value="<?=$_COOKIE['month']?>" />/
									<input type="text" size="4" value="<?=$_COOKIE['year']?>" name="yyyy"/>
									<font size="2"><i>(dd/mm/yyyy)</i></font>
								</td>
							</tr>
						</table>
						<hr/>
						<input type="submit" name="submit" value="Submit">
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


