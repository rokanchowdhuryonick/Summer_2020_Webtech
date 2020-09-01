<?php 
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');


	//add company
	if(isset($_POST['createCompany'])){
		$companyName 	= $_POST['companyName'];
		$description 	= $_POST['description'];
		$industry = $_POST['industry'];
		$website = $_POST['website'];
		$logo = $_FILES['logo'];

		if(empty($companyName) || empty($description) || empty($industry) || empty($website) || empty($logo['name'])){
			header('location: ../views/addCompany.php?error=null_value');
		}else{

			$company = [
				'companyName'=> $companyName,
				'description'=> $description,
				'industry'=> $industry,
				'website'=> $website,
				'logo'=> $logo,
			];

			$status = insertCompany($company);

			if($status){
				header('location: ../views/companyList.php?success=done');
			}else{
				header('location: ../views/addCompany.php?error=db_error');
			}
		}
	}

	//update company
	if(isset($_POST['editCompany'])){

		$companyName 	= $_POST['companyName'];
		$description 	= $_POST['description'];
		$industry = $_POST['industry'];
		$website = $_POST['website'];
		$logo = $_FILES['logo'];
		$id = $_POST['id'];

		if(empty($companyName) || empty($description) || empty($industry) || empty($website)){
			header('location: ../views/editCompany.php?error=null_value&id={$id}');
		}else{

			$company = [
				'companyName'=> $companyName,
				'description'=> $description,
				'industry'=> $industry,
				'website'=> $website,
				'logo'=> $logo,
				'id'=>$id
			];
			$status = updateCompany($company);

			if($status){
				header('location: ../views/companyList.php?success=update_done');
			}else{
				header('location: ../views/editCompany.php?error=db_error&id={$id}');
			}
		}
	}

	

?>