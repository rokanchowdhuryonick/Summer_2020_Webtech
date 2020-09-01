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
	 		var xhttp = new XMLHttpRequest();
	 			xhttp.open('POST', '../php/emailCheck.php', true);
	 			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	 			xhttp.send("email="+email);
			    xhttp.onreadystatechange = function() {
			      if(this.readyState == 4 && this.status == 200){
						if(this.responseText != ""){
							//alert(1);
							document.getElementById('error').innerHTML = this.responseText;
						}else{
							document.getElementById('error').innerHTML = " ";
						}
						
					}
			    }
	 	}

	 	function regFormCheck() {

	 		var username = document.getElementById('username').value;
	 		var email = document.getElementById('email').value;
	 		var password = document.getElementById('password').value;
	 		if ((username.length<=0) || (email.length<=0) || (password.length<=0)) {
	 			document.getElementById('message').innerHTML = "Required filed is empty";
	 		}else{
	 			document.getElementById('message').innerHTML = " ";
	 			var xhttp = new XMLHttpRequest();
	 			xhttp.open('POST', '../php/regCheck.php', true);
	 			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	 			xhttp.send("username="+username+"&password="+password+"&email="+email);
			    xhttp.onreadystatechange = function() {
			      if(this.readyState == 4 && this.status == 200){
						if(this.responseText != ""){
							//alert(this.responseText);
							var datas = JSON.parse(this.responseText);
							if (datas.success==true) {
								document.getElementById('message').innerHTML = datas.message;
								document.getElementById('login').style.display="inline";
							}else{
								document.getElementById('message').innerHTML = datas.message;
							}
							
						}else{
							//alert(2);
							document.getElementById('message').innerHTML = " ";
						}
						
					}
			    }
	 		}

	 	}
	 </script>
</body>
</html>