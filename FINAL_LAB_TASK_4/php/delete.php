<?php

require_once('../php/session_header.php');
require_once('../service/userService.php');

if (isset($_GET['id'])) {
	$user = getByID($_GET['id']);	
	$del = delete($user);
	if ($del) {
		header('location:../views/all_users.php?success=delete_done');
	}else{
		header('location:../views/all_users.php?error=delete_failed');
	}
}else{
	header('location: ../views/all_users.php');
}

