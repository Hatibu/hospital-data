<?php require ("database/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link href="assets/css/styl.css" rel="stylesheet">
   <link href="assets/css/home.css" rel="stylesheet">
   <style>
 
   </style>
</head>

<body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MedicalHub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <a class="btn-login" href="pages/login.php" role="button">Login</a>
    <a class="btn-home btn-started" href="pages/register.php" role="button">Sign Up</a>
    
  </div>
</nav> <!-- End of navigation -->
<!-- Banner -->
<div class="container">
  <div class="row">
    <div class="col-md-6 section-1">
      <h1 class="banner-text">
               The platform for health <br>
                <span>services statistics</span> and <br>
                analysis<span></span>
      </h1>
      <br>
      <h4>
        <q>
          Health is a state of complete physical, 
          mental, and social well-being and not
          merely the absence of disease or infirmity
        </q>
      </h4>
      <div class="form-group">
      <input type="email" class="subscribe-input" id="usr" placeholder="Your Email">
      <a class="subscribe-btn" href="#" role="button">Subscribe</a>
      </div>

    </div>
    <div class="col-md-6 section-2">
      <img src="assets/images/banner-img.jpg" class="img-banner" >
    </div>
  </div>
</div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  

</body>

</html>
