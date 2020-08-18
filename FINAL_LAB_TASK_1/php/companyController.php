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

		if(empty($companyName) || empty($description) || empty($industry) || empty($website) || empty($logo)){
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

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}

	

?>