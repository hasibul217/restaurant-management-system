<?php

$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'r&hm'; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo 'Connection error!!! ' . mysqli_connect_error();
} 

?>

