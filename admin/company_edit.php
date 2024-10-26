<?php 

  include('connection/db.php');
  include('include/header.php');
  include('include/sidebar.php');

$company_ID=$_GET['edt'];

$query=mysqli_query($conn,"SELECT * from company where company_ID = '$company_ID'");

while($row=mysqli_fetch_array($query)){

  $company_name = $_POST['company_name'];
  $company_description = $_POST['company_description'];
  $company_admin=$_POST['company_admin'];
  


}

 ?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                
                 <li class="breadcrumb-item"><a href="company.php">Company</a></li>
               

                <li class="breadcrumb-item"><a href="#">Update Company</a></li>
                
              </ol>
            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Update Company</h1>

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
                <label for="Company Name">Enter Company Name</label>
                <input type="Company" name="company_name" id="company_name" value="<?php echo $company_name; ?>" class="form-control" placeholder="Enter Company Name">
              </div>


              <div class="from-group">
                <label for="Customer Username">Enter Description</label>
                <textarea name="company_description" id="company_description" class="form-control" cols="30" rows="10">
                  <?php echo $company_description; ?>
                </textarea>

              </div>

              <div class="from-group">
                <label for="Customer Username">Select Company Admin</label>
              
              <select name="company_admin" id="company_admin" class="form-control" >
                
                <?php 

                include('connection/db.php');
                $query3 =mysqli_query($conn,"SELECT * from admin_login where admin_type = '2' ");
                
                while($row=mysqli_fetch_array($query3)) {?>

                   <option value="<?php echo $row['admin_email']; ?>"><?php echo $row['admin_email']; ?></option>

                <?php } ?>

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
  	$company_name = $_POST['company_name'];
  	$company_description = $_POST['company_description'];
    $company_admin=$_POST['company_admin'];
  	



$query1 = mysqli_query($conn,"UPDATE company set company_name ='$company_name', company_description ='$company_description',company_admin = '$company_admin'  where company_ID ='$company_ID'");

if ($query1) {
echo "<script>alert('Record has been successfully update !!!')</script>";
}else{
	echo "<script>alert('Error please try again !!!')</script>";
}

  }

  
 ?>