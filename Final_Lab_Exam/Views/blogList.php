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
		<td align="center">
			<?php
			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}
			?>

			<table width="50%" cellpadding="4" border="1">
				<tr>
					<td>ID</td>
					<td>Title</td>
					<td>Details</td>
					<td>Action</td>
				</tr>
				<?php
				$userId = $_SESSION['userId'];
				$q1 = mysqli_query($conn,"SELECT * FROM post WHERE userId='$userId'");
				$i=0;
				while ($row=mysqli_fetch_assoc($q1)) {
				?>
				<tr>
					<td><?=++$i?></td>
					<td><?=$row['title']?></td>
					<td><?=$row['details']?></td>
					<td>[<a href="editAuthor.php?id=<?=$row['id']?>">Edit</a>] | [<a href="../Controller/deleteAuthor.php?id=<?=$row['id']?>">Delete</a>]</td>
				</tr>
			<?php } ?>
			</table>
		</td>
	</tr>
</table>
</body>
</html>