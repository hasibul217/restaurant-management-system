<?php 

  include('include/header.php');
  include('include/sidebar.php');

 ?>

<?php 

include('connection/db.php');
$query =mysqli_query($conn,"SELECT * from admin_login where admin_type = '2' ");
 ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                
                 <li class="breadcrumb-item"><a href="company.php">Company</a></li>
               

                <li class="breadcrumb-item"><a href="#">Add Company</a></li>
                
              </ol>
            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Add Company</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              
              </div>

             <!-- <a class="btn btn-primary" href="add_customar.php">Add</a> -->

            </div>
          </div>

         <div style="width:60% ; margin-left: 25%; background-color:#E5E7E9 ;" >
           
           <div id="msg"></div>

            <form action=" " method="post" style="margin: 3%; padding: 5%;" name="Company_form" id="Company_form">
              
              <div class="from-group">
                <label for="Company Name">Company Name</label>
                <input type="text" name="Company" id="Company" class="form-control" placeholder="Enter Company Name">
              </div>


              <div class="from-group">
                <label for="Customer Username">Description</label>
               <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
              </div>

              <div class="from-group">
                <label for="Customer Username">Select Company Admin</label>
              
              <select name="company_admin" id="company_admin" class="form-control">
                
                <?php 
                while($row=mysqli_fetch_array($query)) {?>

                   <option value="<?php echo $row['admin_email']; ?>"><?php echo $row['admin_email']; ?></option>

                <?php } ?>

              </select>
              </div>


         
      
               <div  class="from-group">
                
                <input  type="submit" class="btn btn-block btn-success" placeholder="Save" name="Submit" id="submit">
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

<script >
  
  $(document).ready(function(){

    $("#submit").click(function(){

        var Company=$("#Company").val();
        var Description=$("#Description").val();
        var company_admin=$("#company_admin").val();
       
        if (Company=='') {

          alert("Please enter Company Name !!!");
          return false;

        }

        if (Description=='') {

          alert("Please enter Description !!!");
          return false;

        }

        if (company_admin=='') {

          alert("Please enter Company Admin !!!");
          return false;

        }

        var data=$("#Company_form").serialize();
        

        $.ajax({

          type:"POST",
          url: "company_add.php",
          data: data,
          success:function(data){

            alert(data);

          }

        });
    });

  });

</script>
   
  </body>
</html>
