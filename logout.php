<?php 

session_start();
session_unset();
header('location:index.php');

include('connection/db.php');

$query=mysqli_query($conn,"SELECT * from jobseeker where jobseeker_email = '{$_SESSION['email']}' and admin_type = '2' ");
if ($query) {

header('location:index.php');


    // code...
}else{

header('location:index.php');


}

 ?>
