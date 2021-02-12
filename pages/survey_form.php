<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Survey form</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/css/style.css" rel="stylesheet">
</head>
<style type="text/css">
  .btn-survey{
    display: inline-block;
  font-weight: 400;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid #0562DC !important;
  background-color: #0562DC;
  padding: 0.5rem 3rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

}
.btn-survey{
  text-decoration: none !important;
  color: #fff !important;
}
</style>

<body>
   <?php 
   require ("../Logics/survey_fun.php");

   ?>

 <div class="row">
  <div class="col-md-3"><!-- Empty space--></div>
  <div class="col-md-6">
     <div class="container survey-form">
    <div class="row">
      <div class="col-md-12">
        <form class=" justify-content-center" action="" method="post" >
          <br>
          <h4> Toa maoni yako sasa</h4>
          <?php 
            $qn = "1. Je, huduma za upatikanaji vifaa kwa mama mjamzito ikoje?";

          ?>
          <!-- Question 1 -->
          <h5><?php echo $qn; ?></h5>
          <div class="form-check">
          <input class=" survey-input" type="radio" name="qn1" id="flexRadioDefault1" value="Nzuri sana">
          <label class="form-check-label" for="flexRadioDefault1">
          Nzuri sana
         </label>
        </div>
        <div class="form-check">
         <input class="" type="radio" name="qn1" id="flexRadioDefault2" value="Nzuri"  checked>
         <label class="form-check-label" for="flexRadioDefault2">
          Nzuri
         </label>
          </div>
           <div class="form-check">
         <input class="" type="radio" name="qn1" id="flexRadioDefault2" value="Wastani" >
         <label class="form-check-label" for="flexRadioDefault2">
          Wastani
         </label>
          </div>
           <div class="form-check">
         <input class="" type="radio" name="qn1" id="flexRadioDefault2" value="Mbaya sana">
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya sana
         </label>
          </div>

           <div class="form-check">
         <input class="" type="radio" name="qn1" id="flexRadioDefault2" value="Mbaya" >
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya
         </label>
          </div>
          <!-- Question 2 -->
          <h5>2. Je, upatikanaji dawa kwa mama mjamzito ukoje?</h5>
          <div class="form-check">
          <input class="" type="radio" name="qn2" id="flexRadioDefault1" value="Nzuri sana">
          <label class="form-check-label" for="flexRadioDefault1">
          Nzuri sana
         </label>
        </div>
        <div class="form-check">
         <input class="" type="radio" name="qn2" id="flexRadioDefault2" value="Nzuri">
         <label class="form-check-label" for="flexRadioDefault2">
          Nzuri
         </label>
          </div>
           <div class="form-check">
         <input class="" type="radio" name="qn2" id="flexRadioDefault2" value="Wastani" checked>
         <label class="form-check-label" for="flexRadioDefault2">
          Wastani
         </label>
          </div>
           <div class="form-check">
         <input class="" type="radio" name="qn2" id="flexRadioDefault2" value="Mbaya sana" >
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya sana
         </label>
          </div>

           <div class="form-check">
         <input class="" type="radio" name="qn2" id="flexRadioDefault2" value="Mbaya">
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya
         </label>
          </div>

          <!-- Question 3 -->
          <h5>3. Je, miundombinu ya hospitali kwa mama mjamzito ikoje?</h5>
          <div class="form-check">
          <input class="" type="radio" name="qn3" id="flexRadioDefault1" value="Nzuri sana">
          <label class="form-check-label" for="flexRadioDefault1">
          Nzuri sana
         </label>
        </div>
        <div class="form-check">
         <input class="" type="radio" name="qn3" id="flexRadioDefault2" value="Nzuri">
         <label class="form-check-label" for="flexRadioDefault2">
          Nzuri
         </label>
          </div>
         <div class="form-check">
         <input class="" type="radio" name="qn3" id="flexRadioDefault2" value="Wastani" checked>
         <label class="form-check-label" for="flexRadioDefault2">
          Wastani
         </label>
          </div>
          <div class="form-check">
         <input class="" type="radio" name="qn3" id="flexRadioDefault2" value="Mbaya sana">
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya sana
         </label>
          </div>

          <div class="form-check">
         <input class="" type="radio" name="qn3" id="flexRadioDefault2" value="Mbaya" checked>
         <label class="form-check-label" for="flexRadioDefault2">
          Mbaya
         </label>
          </div>
          <h6>Je, una maoni ya ziada? eleza zaidi</h6>
          <div class="form-group">
          <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" name="submit" class=" btn-survey" >Wasilisha</button>
          <br>
          <br>


        </form>
      </div>
  </div>
</div>
    
  </div>
  <div class="col-md-3"><!-- Empty space--></div>

 </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  

</body>

</html>
