<?php 

  include('connection/db.php');
  include('include/header.php');
  include('include/sidebar.php');

$id=$_GET['edit'];

$query=mysqli_query($conn,"SELECT * from job_category where id = '$id'");

while($row=mysqli_fetch_array($query)){

  $category = $_POST['category'];
  $description = $_POST['description'];
  


}

 ?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                
                 <li class="breadcrumb-item"><a href="category.php">Category</a></li>
               

                <li class="breadcrumb-item"><a href="#">Update category</a></li>
                
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
                <label for="Company Name">Enter Category Name</label>
                <input type="Company" name="category" id="category" value="<?php echo $category; ?>" class="form-control" placeholder="Enter Category Name">
              </div>


              <div class="from-group">
                <label for="Customer Username">Enter Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                  <?php echo $description; ?>
                </textarea>

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
  	$category = $_POST['category'];
  	$description = $_POST['description'];
  	



$query1 = mysqli_query($conn,"UPDATE job_category set category ='$category', description ='$description'  where id ='$id'");

if ($query1) {
echo "<script>alert('Record has been successfully update !!!')</script>";
}else{
	echo "<script>alert('Error please try again !!!')</script>";
}

  }

  
 ?>