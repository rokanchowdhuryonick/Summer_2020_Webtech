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
	<title>Author List</title>
</head>
<body>
	<center>
		<h1>Author List</h1>
	</center>
<table width="100%" cellpadding="6">
	<tr>
		<td>
			<?php
			if ($_SESSION['userType']=="admin") {
			?>
			[<a href="addAuthor.php">Add Author</a>] [<a href="authorList.php">Author List</a>]

			<?php}else if ($_SESSION['userType']=="author") { ?>
				[<a href="blogList.php">Blog List</a>]
			<?php } ?>
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
					<td>Name</td>
					<td>Phone</td>
					<td>Username</td>
					<td>Password</td>
					<td>Action</td>
				</tr>
				<?php
				$q1 = mysqli_query($conn,"SELECT * FROM users WHERE userType!='admin'");
				$i=0;
				while ($row=mysqli_fetch_assoc($q1)) {
				?>
				<tr>
					<td><?=++$i?></td>
					<td><?=$row['name']?></td>
					<td><?=$row['phone']?></td>
					<td><?=$row['username']?></td>
					<td><?=$row['password']?></td>
					<td>[<a href="editAuthor.php?id=<?=$row['id']?>">Edit</a>] | [<a href="../Controller/deleteAuthor.php?id=<?=$row['id']?>">Delete</a>]</td>
				</tr>
			<?php } ?>
			</table>
		</td>
	</tr>
</table>
</body>
</html>