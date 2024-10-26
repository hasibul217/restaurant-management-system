<?php 

session_start();


include('connection/db.php');

$header = mysqli_query($conn,"SELECT * FROM profile where user_email = '{$_SESSION['email']}'");
  while($row=mysqli_fetch_array($header)){

          $file = $row['file'];
          $name = $row['name'];

  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurants And Hotel Job Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">


  



  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">RHJMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="profile.php" class="nav-link">My Profile</a></li>
            


  <?php 
            if (isset($_SESSION['email'])==true) { ?> 

              <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link"><?php if (empty($name)) {echo $_SESSION['email'];}else{echo $name;}  ?></a></li>

              

              <li class="nav-item ">
                <div class="dropdown" >

                  <img src="imgs/<?php if(empty($file)){ echo 'up.jpg' ;}else{ echo $file ;} ?>" class="rounded-circle dropdown-toggle" type="button" data-toggle = "dropdown" alt="Cinque Terre" width="50" height="50" >
                  
                  <ul class="dropdown-menu">
                    <li><a href="profile.php">Profile</a></li>
                    <li ><a href="logout.php">Log Out</a></li>


                  </ul>
                  
                </div>
                

              </li>
              
             <?php } else { ?>
              
           <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link">LogIn</a></li>

           <li class="nav-item cta cta-colored"><a href="admin/admin_login.php" class="nav-link">Restaurant LogIn</a></li>

            <?php } ?>


          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/back2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Profile</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Profile</h1>
          </div>
        </div>
      </div>
    </div>
<?php 
      
    include('connection/db.php');  
    $query =mysqli_query($conn,"SELECT * FROM profile where user_email = '{$_SESSION['email']}'");

    while($row=mysqli_fetch_array($query)){

      $file = $row['file'];
      $name = $row['name'];
      $dob = $row['dob'];
      $mobile_number = $row['mobile_number'];
      $email = $row['email'];


    }

 ?>
    <br>
    <div style="margin-left:25% ; width:50% ; border: 1px solid gray; padding: 10px; ">
  
      

                   <form action="profile_add.php" method="post" enctype="multipart/form-data">

              <div style="padding: 2%;">
              
                
                <div class="row">
                  

                <div class="col-sm-6">
            
                    <img src="imgs/<?php if(empty($file)){ echo 'up.jpg' ;}else{ echo $file ;} ?>" class="img-thumbnail" alt="Cinque Terre">


                </div>

                    <div class="col-sm-6">
                        <label for="">Photo</label>
                       <input type="file" id="file" name="file" class="form-control"  >

                     </div>

                </div>

                <div class="row">
                     <div class="col-sm-6">
                      
                       <label for="">Enter Your Name</label>
                       <input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" class="form-control"  placeholder="Name...">

                     </div>
                     
                    <div class="col-sm-6">
                      
                       <label for="">Enter Your Date of Birth</label>
                       <input type="date" name="dob" id="dob" value="<?php if(!empty($dob)) echo $dob; ?>" class="form-control"  placeholder="Enter Date of Birth">

                     </div>
                       
                 </div>

          <div class="row">
            
            <div class="col-sm-6">
                      
                       <label for="">Enter Your Contact Number</label>
                       <input type="Number" name="mobile_number" id="mobile_number" value="<?php if(!empty($mobile_number)) echo $mobile_number; ?>" class="form-control"  placeholder="Enter Contact Number">

                     </div>
                     
                     <div class="col-sm-6">
                        <label for="">Enter Your Email</label>
                       <input type="text"  class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php if(!empty($email)) echo $email; ?>"  >

                     </div>

          </div>






          <br>
          <div class="from-group">
            <input type="submit" id="submit" name="submit" value="Update" placeholder="Upadate" class="btn btn-primary btn-block">
          </div>
        </div>
           
            </form>


    </div>
		<br>
	<!--	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

   <?php   include('include/footer.php');  ?>

<!--<script>
  
  $(document).ready(function(){

  $("#submit").click(function(){

              var data=$("#profile_form").serialize();
        

        $.ajax({

          type:"POST",
          url: "profile_add.php",
          data: data,
          success:function(data){

            alert(data);

          }

        });

  });
  });
</script>-->