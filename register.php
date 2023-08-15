<?php
function validateData($username, $password, $email, $mobile){
    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $pattern_name = '/^[a-zA-Z0-9_-]{3,16}$/';
    $pattern_pass = '/^(?=.*[!@#$%^&*()_\-+=<>?\/\[\]{}|.,:;\'"])^(?=.*[a-zA-Z0-9]).{8,12}$/';
    $pattern_mobile = '/^[0-9]{10}$/';
    $flag = TRUE;
    if(!preg_match($pattern_email, $email)) {
        echo "Enter a valid Email";
        $flag = false;
    }
    if(!preg_match($pattern_name, $username)) {
        echo "Enter a valid UserName";
        $flag = false;
    }
    if(!preg_match($pattern_pass, $password)) {
        echo "Choose a Password that have atleast one special character and length between 8 and 12";
        $flag = false;
    }
    if(!preg_match($pattern_mobile, $mobile)) {
        echo "Enter a valid Mobile Number";
        $flag = false;
    }
    return $flag;
}
function checkUserExist($email,$conn){
    $check = "SELECT * FROM PATIENTS WHERE email='$email';";
    $result = $conn->query($check);
    if($result->num_rows === 0){
        return false;
    }
    return true;
}


$server = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'TELE_HEALTH_EASE';

$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = hash('sha512',$password);
$email = $_POST['email'];
$gender = $_POST['gender'];
if($gender == 'male') {
    $gender = 'm';
}
else {
    $gender = 'f';
}
$city = $_POST['city'];
$mobile = $_POST['mobile'];


$conn = new mysqli($server,$dbuser,$dbpass,$dbname);
$register = "INSERT INTO patients VALUES('$username','$email','$password_hash','$gender','$city','$mobile');";
if(checkUserExist($email,$conn) == false){
        if (validateData($username, $password, $email, $mobile)) {
            $result = $conn->query($register);
            if($result === false){
                echo "Registration failed";
            }
            else{
                echo "Registration Successful";
                header("Location: signin_index.html");
            }
        }
}
else {
    echo "Email in use";
    header("Location: signin_index.html");
}
?>