<?php
session_start();
require_once '../DB/config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!=1 || $_SESSION['userType']!="admin") {
	header('location: ../Views/login.php');
	exit();
}

if (!isset($_GET['id']) || empty($_GET['id']) || $_GET['id']==$_SESSION['userId']) {
	header("location: Views/authorList.php");
}else{
	$authorId= $_GET['id'];
	$q1=mysqli_query($conn, "SELECT * FROM users WHERE id='{$authorId}'");
	$row=mysqli_fetch_assoc($q1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Author</title>
</head>
<body>
	<center>
		<h1>
			Edit Author
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
			<form action="../Controller/editAuthor.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?=$row['name']?>"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone" value="<?=$row['phone']?>"></td>
				</tr>
				<tr>
					<td>UserName:</td>
					<td><input type="text" name="username" value="<?=$row['username']?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="text" name="password" value="<?=$row['password']?>"></td>
				</tr>
				<tr>
					<td><input type="text" name="id" hidden="" value="<?=$authorId?>"></td>
					<td>
						<input type="submit" name="editAuthor" value="Update Author">
					</td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>
</body>
</html>