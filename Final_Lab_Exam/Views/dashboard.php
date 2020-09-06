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
				[<a href="blogList.php">Blog List</a>] [<a href="addBlog.php">Add Blog</a>]
			<?php } ?>
			[<a href="../Controller/logout.php">Logout</a>]
		</td>
	</tr>
	<tr height="300px">
		<td>
			
		</td>
	</tr>
</table>
</body>
</html>