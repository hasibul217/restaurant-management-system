 <?php 

      
$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'r&hm'; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo 'Connection error!!! ' . mysqli_connect_error();
} 


      $query =mysqli_query($conn,"select * from admin_login where admin_email ='{$_SESSION['email']}' and admin_type ='1'");

      if (mysqli_num_rows($query)>0) {
      
        ?>



    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
               
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customers.php">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="company.php">
                  <span data-feather="layers"></span>
                  Company
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="file-text"></span>
                  Category
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

<?php
}else{
?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
               
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a> -->
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>-->
              </li>
              <li class="nav-item">
             <!--   <a class="nav-link" href="customers.php">
                  <span data-feather="users"></span>
                  Customers
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="applyed_jobs.php">
                  <span data-feather="layers"></span>
                  Applyed Jobs
                </a> 
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a> -->
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a> -->
              </li>
            </ul>
          </div>
        </nav>


      

<?php

}
?>