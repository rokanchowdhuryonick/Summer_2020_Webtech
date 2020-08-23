<!DOCTYPE html>
<html>
<head>
	<title>Email Validation | R</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted Email is: <b>". $_POST['email']."</b><br>";
	}
	?>
	<form method="post" action="" onsubmit="return validateEmail()">
		<table>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" placeholder="Ex: email@gamil.com" id="email"></td>
				<td><span id="message"></span></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>