<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Author</title>
</head>
<body>
	<center>
		<h1>
			Add Author
		</h1>
	</center>
<table width="100%" cellpadding="6">
	<tr>
		<td>
			<?php
			if ($_SESSION['userType']=="admin") {
			?>
			[<a href="addAuthor.php">Add Author</a>] [<a href="authorList.php">Author List</a>] [<a href="searchAuthor.php">Search Author</a>]

			<?php }else if ($_SESSION['userType']=="author") { ?>
				[<a href="addBlog.php">Add Blog</a>]
				[<a href="blogList.php">Blog List</a>]
			<?php } ?>
			[<a href="../Controller/logout.php">Logout</a>]
		</td>
	</tr>
	<tr height="300px">
		<td align="center">
			<?php
			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}
			?>
			<form action="../Controller/addAuthor.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>UserName:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="addAuthor" value="Add New Author">
					</td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>
</body>
</html>