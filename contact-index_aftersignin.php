<?php
session_start();
if(!isset($_SESSION['signed'])){
    header("Location: signin_index.html");
    $username = $_SESSION['username'];
    exit();
}
else {
    $server = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'TELE_HEALTH_EASE';
    $conn = new mysqli($server,$dbuser,$dbpass,$dbname);
    $email = $_SESSION['email'];
    $signin_query = "SELECT * FROM patients WHERE email='$email';";
    $result = $conn->query($signin_query);
    if($result->num_rows==0){
      $ival='email is not registered';
    }
    else {
        $username = $result->fetch_assoc()['username'];

        $signin_query = "SELECT mobile FROM patients WHERE email='$email';";
        $result11 = $conn->query($signin_query);
        $mobile = $result11->fetch_assoc()['mobile'];
        $contactid = rand(1000,9999);
        $register = "INSERT INTO contact VALUES('$contactid','$username','$email','$mobile')";
        $result1 = $conn->query($register);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact-assets/css/contact.css">
    <script src="https://kit.fontawesome.com/9ab7a857e2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans:wght@800&family=Orbitron&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<section  class="mainmain" style="margin-bottom: 30px;">
        <header>
            <img src="assets-main/images/telehealthease-high-resolution-logo-color-on-transparent-background.png" alt="" width="250px">
            <nav class="nav">
                <a class="nav-a" href="home-index_aftersignin.php">Home</a>
                <a class="nav-a" href="services-index_aftersignin.php">Services</a>
                <a class="nav-a" href="about-index_aftersignin.php">About</a>
                <a class="nav-a" href="contact-index_aftersignin.php">Contact</a>
                <a class="nav-a" href="faq-index_aftersignin.php">FAQ's</a>
                <a class="nav-a" href="review-index_aftersignin.php">Review Us</a>
                <a  href="logout.php"><button id="sgn" class="btnlogin" >Sign Out</button></a>
                <p style="display:inline; color:navy; ;font-size:19px; margin-left:20px;"><?php echo $_SESSION['email']; ?></p>
            </nav>
        </header>
    </section>
    <section>
        <div class="container">
            <div class="form-class">
                <h1>Contact Us</h1>
                <form method="post">
                    <div class="input-class">
                        <div class="entry">
                            <i class="fa-solid fa-user" style="color: navy;"></i>
                            <input type="text" placeholder="Name" name="username" class="input-field" value="<?php echo $username ?>">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-mobile" style="color: navy;"></i>
                            <input type="number" placeholder="Mobile Number" name="mobile" class="input-field" value="<?php echo $mobile ?>">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-envelope" style="color: navy;"></i>
                            <input type="email" placeholder="Email" name="email" class="input-field" value="<?php echo $email ?>">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-message" style="color: navy;"></i>
                            <textarea name="" placeholder="Have a question? Send us a message and we’ll be in touch." id="once" cols="2" rows="" class="input-field"></textarea>
                        </div>
                        <div class="btn-class">
                            <a href=""><button type="submit" onclick="alert('Contact Successful!')">Send</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer style="margin-top: 81vh;">
        <p class="always">&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>