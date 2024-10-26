
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
     <img class="mb-4" src="img/logo.png" alt="" width="130" height="130">

      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

      <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name" required autofocus>

      <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" required autofocus>

      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required autofocus>

      <label for="inputEmail" class="sr-only">Date of Birth</label>
      <input type="Date" id="dob" name="dob" class="form-control" placeholder="Enter Date of Birth" required autofocus>

<br>

      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="sign_up">
<br>
      <a href="job-post.php">Already Have An Account</a>

      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </body>
</html>


<?php 
 include('connection/db.php');

if (isset($_POST['submit'])) {


    $email=$_POST['email'];
    $password=$_POST['password'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $mobile_number=$_POST['mobile_number'];
    $dob=$_POST['dob'];


      $query=mysqli_query($conn,"INSERT INTO jobseeker (jobseeker_email,jobseeker_password,jobseeker_first_name,jobseeker_last_name,jobseeker_dob,jobseeker_mobile_number) VALUES ('$email', '$password', '$first_name', '$last_name', '$dob', '$mobile_number')");

var_dump($query);

      if ($query) {
        echo "<script>alert('Now You Can Login !')</script>";

        header('location:job-post.php');
      }else{

        echo "<script>alert('Error!!!!')</script>";
      }

    }


 ?>