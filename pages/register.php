<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php 
  require ("../database/connection.php");
   require ("../Logics/user_register.php");

   ?>
    <div class="row">
      <div class="col-md-3"><!--Empty space--></div>
      <div class="col-md-6">
      <div class="container register-container">
    <form class="register-form" action="" method="post">
      <br>
      <h3 style="text-align: center;">Register</h3>
      <h6 style="text-align: center;">Create your account. It's free and only takes a minute.</h6>
    <div class="row"> 
      <div class="col-md-6">
      <div class="form-group">
     <input type="text" class="register-input" name="first_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" >
     </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
     <input type="text" class="register-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name"
     name="last_name">
     </div>
  </div>

  </div>

  <div class="row">
    <div class="col-md-12">
  <div class="form-group">
    <input type="number" class="register-input" id="exampleInputPassword1" placeholder="Phone Number"
    name="phone_number">
  </div>
  </div>
  </div>
   <div class="row">
    <div class="col-md-12">
  <div class="form-group">
    <input type="email" class="register-input" id="exampleInputPassword1" placeholder="Email"
    name="email">
  </div>
  </div>
  </div>

   <div class="row">
  <div class="col-md-6">
  <div class="form-group">
  <input type="date" class="register-input" id="exampleInputPassword1" placeholder="Birt of Date"
    name="DoB">
  </div>
  </div>
  <div class="col-md-6">
  <select class="register-input" aria-label="Default select example" name="gender">
     <option value="M" selected>Male</option>
     <option value="F">Female</option>
   </select>
  </div>
  </div>

   <div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <input type="password" class="register-input" id="exampleInputPassword1" placeholder=" Password"
    name="pass_word">
  </div>
  </div>
   <div class="col-md-6">
  <div class="form-group">
    <input type="password" class="register-input" id="exampleInputPassword1" placeholder="Retype Password"
    name="pass_word2">
  </div>
  </div>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I accept the Terms of Use & Privacy Policy </label>
  </div>
  <button type="Submit" name="submit" class="btn-for-register register-btn">Submit</button>
</form>
</div>

      </div>
      <div class="col-md-3"><!--Empty space--></div>
    </div>

  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  

</body>

</html>
