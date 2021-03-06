<?php
	require_once('../db/db.php');

	function getCompanyByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllCompany(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company";
		$result = mysqli_query($conn, $sql);
		$company = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($company, $row);
		}

		return $company;
	}


	function insertCompany($company){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		$logoUrl = uploadLogo($company);
    $sql = "insert into company values('','{$company['companyName']}','{$company['description']}', '{$company['industry']}', '{$company['website']}', '{$logoUrl}', '{$_SESSION['userId']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			//exit(mysqli_error($conn));
			return false;
		}
	}

	function uploadLogo($company){
		$filedir = '../views/images/company/'.$company['companyName'].'.jpg';
		if(move_uploaded_file($company['logo']['tmp_name'], $filedir)){
			$filedir = 'images/company/'.$company['companyName'].'.jpg';
			return $filedir;
		}else{
			return "";
		}
	}


	function updateCompany($company){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		if (!empty($company['logo']['name'])) {
			$logoUrl = uploadLogo($company);
			$sql = "update company set company_name='{$company['companyName']}', profile_description='{$company['description']}', industry='{$company['industry']}', company_website='{$company['website']}', company_logo='{$logoUrl}' where id={$company['id']}";
		}else{
			$sql = "update company set company_name='{$company['companyName']}', profile_description='{$company['description']}', industry='{$company['industry']}', company_website='{$company['website']}' where id={$company['id']}";

		}
		//exit($sql);
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteCompany($company){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM company WHERE id={$company['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>