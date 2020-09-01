<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		#login{
			display: none;
		}
	</style>
</head>
<body>
	<table width="100%" border="1" cellpadding="5">
		<tr>
			<td>
				[<a href="../index.php">Home</a>] | [<a href="login.php">Login</a>]
			</td>
		</tr>
		<tr height="300px">
			<td align="center">
				<form action="../php/regCheck.php" method="post">
					<fieldset>
						<legend>SignUp</legend>
						<table>
							<tr>
								<td>Username</td>
								<td colspan="2"><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" onkeyup="emailCheck(this.value)"></td>
								<td align="left"><span id="error"></span></td>
							</tr>
							<tr>
								<td>Password</td>
								<td colspan="2"><input type="password" name="password"></td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="button" name="submit" value="Submit" onclick="regFormCheck()">  <div id="login"> <a href="login.php">Login</a></div>
								</td>

							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
	 
	 <script type="text/javascript">
	 	function emailCheck(email) {
	 		// body...
	 	}

	 	function regFormCheck() {
	 		// body...
	 	}
	 </script>
</body>
</html>