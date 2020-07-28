<?php
session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username) || empty($password)) {
		$error = "Required field is empty";
	}else if (isset($_SESSION['user'])) {
		if ($username == $_SESSION['user']['userName'] && $password == $_SESSION['user']['password']) {
			$_SESSION['status'] = 1;
			header('location:dashboard.php');
		}
	}else{
		$error="There is no user exists!";
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
	<center><?php if(!empty($error))echo $error;?></center>
	<br>
	<table border="1" align="center" width="60%">
		<tr>
			<td align="center">
				<h3>X Company</h3>

			</td>
			<td align="right">
				<a href="home.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a>
			</td>
		</tr>
		<tr height="150px">
			<td colspan="2">
				<fieldset>
				    <legend><b>Login</b></legend>
				    Username: <input type="text" name="username"><br>
				    Password: <input type="password" name="password"><br>
				    <input type="checkbox" name="status"> Remember Me <a href="forgot_password.php">Forgot password?</a> <br>
				    <hr>
				    <input type="submit" name="login" value="Submit">
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