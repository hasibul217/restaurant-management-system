<?php 

session_start();
  include('connection/db.php');

   $login = $_SESSION['email'];
   $job_title = $_POST['job_title'];
   $job_description = $_POST['job_description'];
   $country = $_POST['country'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $category=$_POST['category'];
   $keyword=$_POST['keyword'];
 
	$query = mysqli_query($conn," INSERT INTO all_jobs (customer_email,job_title,job_description,country,state,city,keyword,category) VALUES ('$login', '$job_title', '$job_description', '$country ', '$state', '$city','$keyword','$category')");

//var_dump($query);

if ($query) {

	echo "Data has been inserted";
}else{

		echo "try again";

}

   ?>