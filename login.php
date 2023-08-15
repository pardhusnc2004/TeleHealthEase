<?php
//function to validate login


function validateLogin($email,$pass_hash){
    //sql server connection
    $server = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'TELE_HEALTH_EASE';
    $conn = new mysqli($server,$dbuser,$dbpass,$dbname);
    $signin_query = "SELECT * FROM patients WHERE email='$email';";
    $result = $conn->query($signin_query);
    if($result->num_rows==0){
      $ival='email is not registered';
    }
    else {
        $valid_pass = $result->fetch_assoc()['password'];
        if($valid_pass === $pass_hash){
            return true;
        }
        return false;
    }
}

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass_hash = hash('sha512',$password);
    if(validateLogin($email,$pass_hash)){
        $_SESSION['signed'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header("Location: home-index_aftersignin.php");
    }
    else {
        echo "Invalid Creds";
    }
}
?>