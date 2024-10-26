<?php 

	include('connection/db.php');

	$del=$_GET['del'];

	$query=mysqli_query($conn,"DELETE from company where company_ID = '$del' ");
	if ($query) {

		echo "<script>alert('Record has been successfully delete !!!')</script>";
		header('location:company.php');

	}else{
		echo "<script>alert('Record has been successfully delete !!!')</script>";
	}

 ?> 