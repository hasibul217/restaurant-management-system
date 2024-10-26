<?php 

  include('connection/db.php');

   $Company = $_POST['Company'];
   $Description = $_POST['Description'];
   $company_admin =$_POST['company_admin'];
 
	$query = mysqli_query($conn," INSERT INTO company (company_name,company_description,company_admin) VALUES ('$Company', '$Description','$company_admin')");

//var_dump($query);

if ($query) {

	echo "Data has been inserted";
}else{

		echo "try again";

}

   ?>