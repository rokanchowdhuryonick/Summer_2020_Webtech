<?php
//From Github.com/rokanchowdhuryonick
//Coded by Rokan Chowdhury Onick
session_start();
require_once 'config.php';
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==1) {
	header('location: dashboard.php');
	exit();
}
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) || empty($password)) {
		$error = "<font color='red'>Required field is empty..!!<br>R</font><br>";
	}else{
		$query=mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
		//var_dump($query);
		 if(mysqli_num_rows($query)>=1)
		   {
		   		$user= mysqli_fetch_assoc($query);

			    $_SESSION['userId'] = $user['id'];
				$_SESSION['name'] = $user['name'];
				$_SESSION['userType'] = $user['userType'];
				$_SESSION['logged_in'] = 1;
				if (isset($_POST['save'])) {
					setcookie('username', $username, time() + (86400 * 30), "/");
					setcookie('password', $password, time() + (86400 * 30), "/");
				}else{
					unset($_COOKIE['username']);
					unset($_COOKIE['password']);
				}
				header('location:dashboard.php');
		   }else{
		   		$error = '<font color="red">User with this id and password doesn\'t exists!</font><br>';
		   }
			
			
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>University Management System | Rokan Chowdhury Onick</title>
</head>
<body bgcolor="#00ffff">
	<center>
		<h1>University Management System</h1>
		<hr>
	</center>
	
	
	<form action="" method="post">
		<center>
		<table border="1" width="90%">
			<tr>
				<td bgcolor="dimgray">
					<h2 align="center">Login Panel</h2>
				</td>
			</tr>
			<tr height="380px">
				<td align="center">
					<center><b><?php if(!empty($error))echo $error."<br>"; ?></b></center>			
					<table width="50%" cellpadding="7">
						<tr>
							<th align="left">
								User Name
							</th>
							<td>
								<input type="text" size="50" name="username" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'];?>">
							</td>
						</tr>
						<tr>
							<th align="left">
								Password
							</th>
							<td>
								<input type="password" size="50" name="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<label><input type="checkbox" name="save" <?php if (isset($_COOKIE['save'])) echo "checked";?> > Remember Me</label> | <a href="registration.php">Register</a><br>
								<hr>
						    <center>
						    	<input type="submit" name="login" value="Login">
						    </center>
							</td>
						</tr>
					</table>							  
				</td>
			</tr>
			<tr>
				<td height="65px" bgcolor="dimgray">
					<center>Copyright &copy; Rokan Chowdhury Onick</center>
				</td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>