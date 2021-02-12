<?php

require ("../database/connection.php");

if (isset($_POST["submit"])) {
		$qn1 = $_POST["qn1"];
		$qn2 = $_POST["qn2"];
		$qn3 = $_POST["qn3"];
	echo $qn1;
		
		

		
	// $sql= " SELECT * FROM user_tbl WHERE first_name='".$first_name."' AND last_name='".$last_name."'";
	// $result = mysqli_query($connection,$sql);
	// $num = mysqli_num_rows($result);

	// if($num > 0){
	// 	echo"
	// 	user already exist

	// 	";
	// }else{

	// 	$sql = " INSERT INTO user_tbl (first_name,last_name,phone_number,gender,DoB,email,pass_word) VALUES ('".$first_name."','".$last_name."','".$phone_number."','".$gender."','".$DoB."','".$email."','".$pass_word."')";

	// 		$query = mysqli_query($connection,$sql);

	// 		if(!$query){

	// 			echo"
	// 			fail

	// 			";
	// 		}else{

	// 			echo"
	// 			success
	// 			";
	// 			$level = "USER";
	// 			$sql2 = "INSERT INTO account_tbl (phone_number,pass_word,level) VALUES ('".$phone_number."','".$pass_word."','".$level."')";
	// 			$query = mysqli_query($connection,$sql2);

	// 		}

	// }	

	






}



?>

			

			