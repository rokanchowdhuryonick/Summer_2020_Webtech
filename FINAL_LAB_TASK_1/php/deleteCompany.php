<?php

require_once('../php/session_header.php');
require_once('../service/companyService.php');

if (isset($_GET['id'])) {
	$company = getCompanyByID($_GET['id']);	
	$del = deleteCompany($company);
	if ($del) {
		header('location:../views/companyList.php?success=delete_done');
	}else{
		header('location:../views/companyList.php?error=delete_failed');
	}
}else{
	header('location: ../views/companyList.php');
}

