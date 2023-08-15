<?php
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
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$contactid = rand(1000,9999);
$conn = new mysqli($server,$dbuser,$dbpass,$dbname);
$register = "INSERT INTO contact VALUES('$contactid','$username','$email','$mobile');";

if(checkUserExist($email,$conn) == false){
        echo "Email does't exist in our database. Sign In.";
}
else {
    $result = $conn->query($register);
    if($result === false){
        echo "Connection failed";
    }
    else{
        echo "Connection Successful";
    }
}
?>