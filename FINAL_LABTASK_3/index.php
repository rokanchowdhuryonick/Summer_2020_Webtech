<!DOCTYPE html>
<html>
<head>
	<title>Registration | Rokan Chowdhury Onick</title>
</head>
<body>
	<center><h2>Registration Zone</h2></center>
	<hr>
	<form action="" method="post" onsubmit="return validateRegistration()" enctype="multipart/form-data">
		<table align="center" border="1" cellpadding="5px" width="50%">
			<tr height="80px">
				<th colspan="3">PERSON PROFILE</th>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" id="name"></td>
				<td></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>
				<td></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" id="gender"> Male
					<input type="radio" name="gender" id="gender"> Female
					<input type="radio" name="gender" id="gender"> Other
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					Date of Birth
				</td>
				<td>
					<input type="" name="dd" size="1" id="date">/ <input type="" name="mm"  size="1" id="month">/ <input type="" name="yy"  size="2" id="year"> <i>(dd/mm/yyyy)</i>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td>
					<select name="blood" id="blood">
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
				<td><input type="file" name="photo" id="photo"></td>
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