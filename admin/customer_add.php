<?php 

  include('connection/db.php');

  $email = $_POST['email'];
  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $password = $_POST['password'];
  $admin_type = $_POST['admin_type'];

	$query = mysqli_query($conn,"INSERT INTO `admin_login` (admin_email,admin_password,admin_username,first_name,last_name,admin_type) VALUES ('$email', '$password', '$username', '$first_name', '$last_name', '$admin_type');
");

//var_dump($query);

if ($query) {

	echo "Data has been inserted";
}else{

		echo "try again";

}

   ?>