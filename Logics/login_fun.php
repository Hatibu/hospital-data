 <?php
session_start();
require ("../database/connection.php");

if(isset($_POST["submit"])){

    $phoneNumber = $_POST["phone_num"]; 
    $password = $_POST["pass_word"];
    $passhash = MD5($password);
    
    $sql = "SELECT * FROM account_tbl WHERE phone_number ='".$phoneNumber."' AND pass_word ='".$passhash."'";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);

    if ($num > 0){
        while($row = mysqli_fetch_array($result)){
            $userid = $row["acc_id"];
            $phone = $row["phone_number"];
            $level = $row["level"];
            //echo $level;
           // echo $usernamedb;
            if ($level == "USER"){
                $_SESSION["phone_number"]= $phone;
                $_SESSION["level"] = $level;
                echo $_SESSION["phone_number"];
              // header('location:../pages/user_dashboard.php');

            }else{
                echo "
           wrong password
        ";
            }
            
        }
        
    }else{

        echo "
            wrong username or password
        ";
    }
}

































?>