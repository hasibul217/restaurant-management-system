<?php 

  include('connection/db.php');
  include('include/header.php');
  include('include/sidebar.php');

$id=$_GET['edt'];

$query=mysqli_query($conn,"SELECT * from admin_login where ID = '$id'");
while($row=mysqli_fetch_array($query)){

  $email = $_POST['admin_email'];
  $username = $_POST['admin_username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $password = $_POST['admin_password'];
  $admin_type = $_POST['admin_type'];


}

 ?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                
                 <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
               

                <li class="breadcrumb-item"><a href="#">Update Customers</a></li>
                
              </ol>
            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Update Customers</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              
              </div>

             <!-- <a class="btn btn-primary" href="add_customar.php">Add</a> -->

            </div>
          </div>

         <div style="width:60% ; margin-left: 25%; background-color:#E5E7E9 ;" >
           
           <div id="msg"></div>

            <form action=" " method="post" style="margin: 3%; padding: 5%;" name="customer_form" id="customer_form">
              
              <div class="from-group">
                <label for="Customer Email">Enter Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Customer Email">
              </div>


              <div class="from-group">
                <label for="Customer Username">Enter Username</label>
                <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="form-control" placeholder="Enter Customer Email">
              </div>


         <div class="from-group">
                <label for="First Name">Enter First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control" placeholder="Enter First Name">
              </div>
           

          <div class="from-group">
                <label for="Last Name">Enter Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" class="form-control" placeholder="Enter Last Nmae">
              </div>

        


             <div class="from-group">
                <label for="Last Nmae">Enter Password</label>
                <input type="pass" name="password" id="password" value="<?php echo $password; ?>" class="form-control" placeholder="Enter Password">
              </div>



               <div class="from-group">
                <label for="Admin Type">Admin Type</label>
                <select name="admin_type" name="admin_type" class="form-control" id="admin_type" value="<?php echo $admin_type; ?>">
                  
                  <option value="1">Super Admin</option>
                  <option value="2">Customar Admin</option>

                </select>
              

                </div>

         <input type="hidden" name="id" id="id" value="<?php echo $_GET['edt']; ?>">
      
               <div  class="from-group">
                
                <input  type="submit" class="btn btn-block btn-success" placeholder="Update" name="Submit" id="submit">
              </div>

            </form>
           </div>
 

         <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

           
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<!--datatables plugin-->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script >
  
    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>


 
  </body>
</html>


<?php 

  include('connection/db.php');

  if (isset($_POST['Submit'])) {

  	$id = $_POST['id'];
  	$email = $_POST['email'];
  	$username = $_POST['username'];
  	$first_name = $_POST['first_name'];
  	$last_name = $_POST['last_name'];
  	$password = $_POST['password'];
  	$admin_type = $_POST['admin_type'];



$query1 = mysqli_query($conn,"UPDATE admin_login set admin_email ='$email', admin_username ='$username' , first_name = '$first_name',last_name = '$last_name' , admin_password = '$password' , admin_type = '$admin_type' where ID ='$id'");

if ($query1) {
echo "<script>alert('Record has been successfully update !!!')</script>";
}else{
	echo "<script>alert('Error please try again !!!')</script>";
}

  }

  
 ?>