<?php

$ival=$val=$cpass='';
  if(isset($_POST['submit'])){
    extract($_POST);
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
    else{
      session_start();
      $checkpas = $result->fetch_assoc()['password'];
      $hashpas = hash('sha512', $password);
      if($hashpas === $checkpas){
        header("Location: home-index_aftersignin.php");
      }
      else{
        $ival="password or email is incorrect";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="assets-signin/css/check.css">
    <script src="https://kit.fontawesome.com/9ab7a857e2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans:wght@800&family=Orbitron&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="btn-class">
            <a href="index.html"><button style="margin-top: 12%;margin-left: 7%;transform: translate(-50%, -50%);">Home</button></a>
        </div><br>
        <div class="form-class">
            <h1>Sign In</h1>
            <span style="color: #d10000;"><?php echo $ival ?></span>
            <form  method="post">
                <div class="input-class">
                    <div class="entry">
                        <i class="fa-solid fa-envelope" style="color: #3f00a0;"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="entry">
                        <i class="fa-solid fa-lock" style="color: #3f00a0;"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="btn-class">
                    <a><button class="btnlogin" name="submit">Sign In</button></a>
                    </div><br>
                    <p>Forgot Password ? <a href="">Click here</a></p><br>
                    <p>Didn't have account ? <a href="regi.php">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>