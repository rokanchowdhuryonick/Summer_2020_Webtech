<!DOCTYPE html>
<html>
<head>
	<title>Gender Validation | Rokan</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		echo "Your Submitted Date of Birth is: <b>". $_POST['day']."/".$_POST['month']."/".$_POST['year']."</b>";
	}
	?>
	<form method="post" action="" onsubmit="return validateGender()">
		<table>
			<tr>
				<td>Date of Birth : </td>
				<td>
					<input type="text" name="day" placeholder="dd" id="day" size="2"> / 
					<input type="text" name="month" placeholder="mm" id="month" size="2"> / 
					<input type="text" name="year" placeholder="yyyy" id="year" size="4">
				</td>
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