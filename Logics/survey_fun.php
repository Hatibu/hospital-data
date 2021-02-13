<?php

require ("../database/connection.php");

if (isset($_POST["submit"])) {
		$qn1 = $_POST["qn1"];
		$qn2 = $_POST["qn2"];
		$qn3 = $_POST["qn3"];
		$desci = $_POST["desc"];
		$phone = 716520061;
	$sql = " INSERT INTO dawa_feedtbl (phone_number,qn1,qn2,qn3,desci) VALUES ('".$phone."','".$qn1."','".$qn2."','".$qn3."','".$desci."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				fail

				";
			}else{

				echo"
				success
				";
			}

	

	






}



?>

			

			