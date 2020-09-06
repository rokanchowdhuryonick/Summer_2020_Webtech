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
			<input type="text" name="username" id="username" placeholder="Search...">
			<input type="button" id="searchBtn" onclick="searchAuthor()" value="Search">
			<div id="result">
				
			</div>
		</td>
	</tr>
</table>
<script type="text/javascript">
	function searchAuthor() {
		var username = document.getElementById('username').value;
		if (username.length<=0) {
			alert("Field value is empty");
		}else{
			var xhttp = new XMLHttpRequest();
 			xhttp.open('POST', '../Controller/searchAuthor.php', true);
 			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
 			xhttp.send("username="+username);
		    xhttp.onreadystatechange = function() {
		      if(this.readyState == 4 && this.status == 200){
					if(this.responseText != ""){
						//alert(1);
						document.getElementById('result').innerHTML = this.responseText;
					}else{
						document.getElementById('result').innerHTML = "Nothing found yet..";
					}
					
				}
		    }
		}
 		
	 	}
</script>
</body>
</html>