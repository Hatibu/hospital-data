<?php

require ("../database/connection.php");

if (isset($_POST["submit"])) {
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$gender = $_POST["gender"];
		$DoB = $_POST["DoB"];
		$phone_number = $_POST["phone_number"];
		$pass_word = md5($_POST["pass_word"]);
		$email = $_POST["email"];

		
	$sql= " SELECT * FROM user_tbl WHERE first_name='".$first_name."' AND last_name='".$last_name."'";
	$result = mysqli_query($connection,$sql);
	$num = mysqli_num_rows($result);

	if($num > 0){
		echo"
		user already exist

		";
	}else{

		$sql = " INSERT INTO user_tbl (first_name,last_name,phone_number,gender,DoB,email,pass_word) VALUES ('".$first_name."','".$last_name."','".$phone_number."','".$gender."','".$DoB."','".$email."','".$pass_word."')";

			$query = mysqli_query($connection,$sql);

			if(!$query){

				echo"
				fail

				";
			}else{

				echo"
				success
				";
				$level = "USER";
				$sql2 = "INSERT INTO account_tbl (phone_number,pass_word,level) VALUES ('".$phone_number."','".$pass_word."','".$level."')";
				$query = mysqli_query($connection,$sql2);

			}

	}	

	






}



?>

			

			