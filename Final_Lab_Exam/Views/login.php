<?php
session_start();
require_once '../DB/config.php';
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==1) {
	header('location: ../Views/dashboard.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Portal</title>
</head>
<body>
	<center>
		<h1>Login</h1>
		<hr>
		<?php
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
		?>
	</center>
	<br>
<form action="../Controller/login.php" method="post">
	<table width="50%" align="center">
		<tr>
			<td>
				User Name:
			</td>
			<td>
				<input type="text" name="username" value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'];?>">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" name="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="checkbox" name="save"> Remember me
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Login">
			</td>
		</tr>
	</table>
</form>
</body>
</html>