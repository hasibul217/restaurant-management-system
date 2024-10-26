<?php 

  include('connection/db.php');

   $category = $_POST['category'];
   $description = $_POST['description'];
 
	$query = mysqli_query($conn," INSERT INTO job_category (category,description) VALUES ('$category', '$description')");

//var_dump($query);

if ($query) {

	echo "Data has been inserted";
}else{

		echo "try again";

}

   ?>


