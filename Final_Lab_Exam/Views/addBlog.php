<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1) {
	header('location: ../Views/login.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<table width="100%" cellpadding="6">
	<tr>
		<td>
			<?php
			if ($_SESSION['userType']=="admin") {
			?>
			[<a href="addAuthor.php">Add Author</a>] [<a href="authorList.php">Author List</a>] [<a href="searchAuthor.php">Search Author</a>]

			<?php }else if ($_SESSION['userType']=="author") { ?>
				[<a href="blogList.php">Blog List</a>]
			<?php } ?>
			[<a href="../Controller/logout.php">Logout</a>]
		</td>
	</tr>
	<tr height="300px">
		<td>
			<?php
			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}
			?>
			<form action="../Controller/addBlog.php" method="post">
				<table>
					<tr>
						<td>Title</td>
						<td><input type="text" name="title"></td>
					</tr>
					<tr>
						<td>
							Details
						</td>
						<td>
							<textarea name="details"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							<input type="submit" name="addBlog" value="Add Blog">
						</td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
</body>
</html>