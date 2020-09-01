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
				<div id="message"></div>
				<form action="../php/regCheck.php" method="post">
					<fieldset>
						<legend>SignUp</legend>
						<table>
							<tr>
								<td>Username</td>
								<td colspan="2"><input type="text" id="username" name="username"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" id="email" onkeyup="emailCheck(this.value)"></td>
								<td align="left"><span id="error"></span></td>
							</tr>
							<tr>
								<td>Password</td>
								<td colspan="2"><input type="password" id="password" name="password"></td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="button" name="submit" id="submit" value="Submit" onclick="regFormCheck()">  <div id="login"> <a href="login.php">Login</a></div>
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

	 		var username = document.getElementById('username').value;
	 		var email = document.getElementById('email').value;
	 		var password = document.getElementById('password').value;
	 		if ((username.length<=0) || (email.length<=0) || (password.length<=0)) {
	 			document.getElementById('message').innerHTML = "Required filed is empty";
	 		}else{
	 			document.getElementById('message').innerHTML = "";
	 			var xhttp = new XMLHttpRequest();
	 			xhttp.open('POST', '../php/regCheck.php', true);
	 			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	 			xhttp.send("fname=Henry&lname=Ford");
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
			        document.getElementById("txtHint").innerHTML = this.responseText;
			      }
			    };
	 		}

	 	}
	 </script>
</body>
</html>