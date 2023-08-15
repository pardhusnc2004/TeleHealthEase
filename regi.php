<?php

$unameerr=$passerr=$emailerr=$mbnoerr=$valid=$cityerr=$cnfrmerr="";
function checkUserExist($email,$conn){
    $check = "SELECT * FROM PATIENTS WHERE email='$email';";
    $result = $conn->query($check);
    if($result->num_rows === 0){
        return false;
    }
    return true;
}
if(isset($_POST['submit'])){
    extract($_POST);
    
    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $pattern_name = '/^[a-zA-Z0-9_-]{3,16}$/';
    $pattern_pass = '/^(?=.*[!@#$%^&*()_\-+=<>?\/\[\]{}|.,:;\'"])^(?=.*[a-zA-Z0-9]).{8,12}$/';
    $pattern_mobile = '/^[0-9]{10}$/';
    
    if(!preg_match($pattern_email, $email)) {
        $emailerr= "Enter a valid Email";
    }
    if(!preg_match($pattern_name, $username)) {
        $unameerr= "Enter a valid UserName";
    }
    if(!preg_match($pattern_pass, $password)) {
        $passerr= "Choose a Password that have atleast one special character and length between 8 and 12";
    }
    else {
        if($password != $confpass) {
            $cnfrmerr = "Password and Confirm Password must be same";
        }
    }
    if(!preg_match($pattern_mobile, $mobile)) {
        $mbnoerr= "Enter a valid Mobile Number";
    }
    if(empty($city)) {
        $cityerr = "Enter a city";
    }
    if(empty($emailerr)&&empty($passerr)&&empty($unameerr)&&empty($mbnoerr)&&empty($cityerr)&&empty($cnfrmerr)){
        $server = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'TELE_HEALTH_EASE';


        if($gender == 'male') {
            $gender = 'm';
        }
        else {
            $gender = 'f';
        }
        $conn = new mysqli($server,$dbuser,$dbpass,$dbname);
        $password_hash = hash('sha512',$password);
        $register = "INSERT INTO patients VALUES('$username','$email','$password_hash','$gender','$city','$mobile');";
        if(checkUserExist($email,$conn) == false){
                    $result = $conn->query($register);
                    if($result === false){
                        $valid= "Registration failed";
                    }
                    else{
                        $valid= "Registration Successful";
                    }
                
        }
        else {
            $valid= "Email in use";
        }
            }
            else{
                $valid="failed";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets-signin/css/check2.css">
    <script src="https://kit.fontawesome.com/9ab7a857e2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans:wght@800&family=Orbitron&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="btn-class">
            <a href="index.html"><button style="margin-top: 3.8%;margin-left: 5%;transform: translate(-50%, -50%);">Home</button></a>
        </div><br>
        <div class="form-class">
            <h1>Sign Up</h1>
            <p color=red style="margin-bottom:0px; color: #d10000;"><?php echo $valid;?></p>
            <form method="post">
                <div class="input-class">
                    <div class="entry">
                        <i class="fa-solid fa-user" style="color: #3f00a0;"></i>
                        <input type="text" name="username" placeholder="User Name">
                    </div><span style="color: #d10000; margin-top:0px;"><?php echo $unameerr ?></span>

                    <div class="entry">
                        <i class="fa-solid fa-envelope" style="color: #3f00a0;"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div><span style="color: #d10000;"><?php echo $emailerr ?></span>
                    <div class="entry">
                        <i class="fa-solid fa-lock" style="color: #3f00a0;"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div><span style="color: #d10000;"><?php echo $passerr ?></span>
                    <div class="entry">
                        <i class="fa-solid fa-lock" style="color: #3f00a0;"></i>
                        <input type="password" name="confpass" placeholder="Confirm Password">
                    </div><span style="color: #d10000;"><?php echo $cnfrmerr ?></span>
                    <div class="entry">
                        <i class="fa-solid fa-map" style="color: #3f00a0;"></i>
                        <input type="text" name="city" placeholder="City">
                    </div><span style="color: #d10000;"><?php echo $cityerr ?></span>
                    <div class="entry">
                        <i class="fa-solid fa-venus-mars" style="color: #3f00a0;"></i>
                        <select name="gender" id="" class="select-optn" style="width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 18px 15px;">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="entry">
                        <i class="fa-solid fa-user" style="color: #3f00a0;"></i>
                        <input type="number" name="mobile" placeholder="Mobile Number">
                    </div><span style="color: #d10000;"><?php echo $mbnoerr ?></span>
                    <div class="btn-class">
                        <button name="submit">Sign Up</button>
                    </div><br>
                    <p>Already have account ? <a href="signi.php">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>