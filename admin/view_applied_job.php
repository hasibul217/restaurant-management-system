<?php 

  include('include/header.php');
  include('include/sidebar.php');
  ?>






        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="applyed_jobs.php">View Applyed Jobs</a></li>
                
              </ol>
            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">View Applyed Jobs</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              
              </div>


            </div>
          </div>


<form action="" style="border: 1px solid gray; width: 80%; margin-left:10%; padding: 10px;" >
  <?php 
//error_reporting(0);
    include('connection/db.php');

   // echo $id=$_GET['id'];

    $query = mysqli_query($conn,"SELECT * from job_apply LEFT JOIN all_jobs on job_apply.job_id = all_jobs.job_id WHERE customer_email = '{$_SESSION['email']}'");

 //$query = mysqli_query($conn,"SELECT * from job_apply LEFT JOIN all_jobs on job_apply.job_id = all_jobs.job_id WHERE ID = '$id'");

while ($row=mysqli_fetch_array($query)){
   ?>

<tr>
                
                <div class="from-group">
                    <label for=""><b>Job Title:</b> </label>
                     <td><?php echo $row['job_title']; ?></td>
                </div>
                



               <div class="from-group">
                    <label for=""><b>Job Description:</b></label>
                     <td><?php echo $row['job_description']; ?></td>

                </div>

                 <div class="from-group">
                    <label for=""><b>Jobseeker Name:</b></label>
                    <td><?php echo $row['first_name']; ?><?php echo $row['last_name']; ?></td>

                </div>

                <div class="from-group">
                    <label for=""><b>Jobseeker Email:</b></label>
                     <td><?php echo $row['jobseeker']; ?></td>

                </div>

                <div class="from-group">
                    <label for=""><b>Jobseeker Mobile Number:</b></label>
                     <td><?php echo $row['mobile_number']; ?></td>

                </div>

                <div class="from-group">
                    <label for=""><b>Jobseeker CV:</b></label>
                     <td><a href="http://localhost/Restaurants_and_hotel_job_management_system/files/<?php echo $row['file']; ?>">Download File</a></td>

                </div>

               
 <?php } ?>

 <a href="send_email.php" class="btn btn-success" >Accept</a>
 <!--<a href="send_email.php?id=<//?php echo $id ; ?>" class="btn btn-success" >Accept</a>-->
 <a href="reject_job.php/id=<?php echo $id ; ?>" class="btn btn-danger" >Reject</a>
       
</form>


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
