<?php
if(isset($_POST['submit'])){
	if(strlen($_POST['name'])<1){
		echo "<font color='red'>Name field is required!</font><br>";
	}elseif (str_word_count($_POST['name'])<2) {
		echo "<font color='red'>Name contains at least two words!</font><br>";
	}else{
		if (is_numeric($_POST['name'][0])!==false) {
			echo "<font color='red'>Must start with a letter!</font><br>". $_POST['name'][0];
		}
	}

	if (strlen($_POST['email'])<1) {
		echo "<font color='red'>Email field is required!</font><br>";
	}else{
		if (strpos($_POST['email'], '@') == false) {
			echo "<font color='red'>Must be a valid email address (i.e anything@example.com)!</font><br>";
		}
	}

	if (!isset($_POST['gender'])) {
		echo "<font color='red'>At least one of them has to be selected!</font><br>";
	}

	if (empty($_POST['dd']) || empty($_POST['mm']) || empty($_POST['yy'])) {
		echo "<font color='red'>Birth date cannot be empty!</font><br>";
	}else{
		if (!is_numeric($_POST['dd']) || !is_numeric($_POST['mm']) || !is_numeric($_POST['yy'])) {
			echo "<font color='red'>Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)!</font><br>";
		}
	}


	if (!isset($_POST['blood'])) {
		echo "<font color='red'>Blood group is required!</font><br>";
	}
	if (!isset($_POST['degree'])) {
		echo "<font color='red'>Degree is required!</font><br>";
	}

	if (empty($_POST['photo'])) {
		echo "<font color='red'>Photo can not be empty!</font><br>";
	}


}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration | Rokan Chowdhury Onick</title>
</head>
<body>
	<center><h2>Registration Zone</h2></center>
	<hr>
	<form action="" method="post">
		<table align="center" border="1" cellpadding="5px" width="50%">
			<tr height="80px">
				<th colspan="3">PERSON PROFILE</th>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
				<td></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
				<td></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender"> Male
					<input type="radio" name="gender"> Female
					<input type="radio" name="gender"> Other
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					Date of Birth
				</td>
				<td>
					<input type="" name="dd" size="1">/ <input type="" name="mm"  size="1">/ <input type="" name="yy"  size="2"> <i>(dd/mm/yyyy)</i>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td>
					<select name="blood">
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Degree</td>
				<td>
					<input type="checkbox" value="SSC" name="degree">SSC <input type="checkbox" name="degree" value="HSC">HSC <input type="checkbox" name="degree" value="BSc">BSc. <input type="checkbox" name="degree" value="MSc">MSc.
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="photo"></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><br></td>
			</tr>
			<tr>
				<td colspan="3" align="right">
					<input type="submit" name="submit" value="Submit">
					<input type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>