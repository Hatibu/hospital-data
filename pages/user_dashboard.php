<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link href="../assets/css/style.css" rel="stylesheet">
 <link href="../assets/css/user_dashboard.css" rel="stylesheet">
 <style>


 </style>
</head>

<body>
  <?php session_start(); ?>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-nav navbar-fixed">
  <a class="navbar-brand " href="#" style="color: white;">MedicalHub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color: white;" href="#">
         
          
        </a>
      </li>
    </ul>
       <a style="color: white; margin-right: 40px; text-decoration: none;" href="#">
          <?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?>
       </a>
     <a class="logout-link" href="../Logics/logout.php">Logout
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>
     </a>
    
  </div>
</nav> <!-- End of navigation -->

<!-- Banner -->
<div class="container-sm">
  <!-- Segment one -->
  <div class="row segment-1"> 
    <div class="col-md-6">
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Kuhusu upatikanaji wa dawa
    </h5>
    <p class="card-text">Toa maoni yako juu ya upatikaji wa dawa katika hospitali yetu.</p>
    <a href="survey_form.php" class=" btn-dashboard">Toa sasa</a>
  </div>
</div>

    </div>
    <div class="col-md-6 ">
      <div class="card">
      <div class="card-body">
     <h5 class="card-title">Kuhusu huduma za mama</h5>
    <p class="card-text">Toa maoni yako juu ya huduma za mama katika hospitali yetu.</p>
    <a href="#" class=" btn-dashboard">Toa sasa</a>
  </div>
</div>
    </div>
  </div> <!-- End of segment one -->
  <!-- Segment two -->
  <div class="row segment-1"> 
    <div class="col-md-6">
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Kuhusu huduma za mtoto</h5>
    <p class="card-text">Toa maoni yako juu ya huduma za watoto katika hospitali yetu.</p>
    <a href="#" class=" btn-dashboard">Toa sasa</a>
  </div>
</div>

    </div>
    <div class="col-md-6 ">
      <div class="card">
      <div class="card-body">
     <h5 class="card-title">Kuhusu huduma za wazee</h5>
    <p class="card-text">Toa maoni yako juu ya huduma za wazee katika hospitali yetu.</p>
    <a href="#" class=" btn-dashboard">Toa sasa</a>
  </div>
</div>
    </div>
  </div> <!-- End of segment two -->
  <!-- Segment three -->
  <div class="row segment-1"> 
    <div class="col-md-6">
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Kuhusu miundombimu ya hospitali</h5>
    <p class="card-text">Toa maoni yako juu ya miundombinu ya hospitali yetu.</p>
    <a href="#" class=" btn-dashboard">Toa sasa</a>
  </div>
</div>

    </div>
 
  </div> <!-- End of segment three -->
  <br>
</div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  

</body>

</html>
