<?php 

	include('connection/db.php');

	$del=$_GET['del'];

	$query=mysqli_query($conn,"DELETE from job_category where id = '$del' ");
	if ($query) {

		echo "<script>alert('Record has been successfully delete !!!')</script>";
		header('location:category.php');

	}else{
		echo "<script>alert('Record has been successfully delete !!!')</script>";
	}

 ?> 