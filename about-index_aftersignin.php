<?php
session_start();
if(!isset($_SESSION['signed'])){
    header("Location: signin_index.html");
    $username = $_SESSION['username'];
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about-assets/css/home.css">
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
    <section class="about" id="about1">
        <div class="container1">
            <div class="conten1">
                <div>
                    <h2 class="title" style="font-size: 63px; color: navy;">About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container-holder">
        <div class="container">
            <div class="conten" style="margin-left: 25%;">
                <h2 class="title" style="margin-left: 0;">Our Clinic</h2>
                <div>
                    <p style="color: #ffffff; font-size: x-large; font-weight: 400; color: navy; text-align: justify;">We Care Medical Clinic is dedicated to optimizing the quality of healthcare through an integrative approach to health and wellness. We include both conventional and complementary treatments for general health, healing and well being. 
                    <br><br>Our goal is to model and advance a standard of integrative health care. We achieve this goal through our four core values: integration, compassion, expertise and time. Each and every professional that provides services at our clinic - from nurses and doctors to technicians and administrative staff, are dedicated to your good health and wellness. We do our best at the clinic so you live a full and healthy life, and spend as little time as possible at the clinic.
                    </p>
                </div><br>
                <h2 class="title" style="margin-left: 0;">Here for You</h2>
                <div>
                    <p style="color: #ffffff; font-size: x-large; font-weight: 400; color: navy; text-align: justify;">
                        We are here to give you the best possible services, so you leave healthier than you arrived, and with more options for good health. We work collaboratively and cooperatively to ensure you get the very best services, whatever your needs.</p>
                </div>
            </div>
            <div class="conten im1">
                <img src="about-assets/css/medical-team-sitting-discussing-table-top-view_358354-17754.jpg" alt="" width="568px" style="margin-left: 8%;">
            </div>
        </div>
    </div>
    <section class="about" id="about1">
        <div class="container2">
            <div class="conten2">
                <i class="fa-solid fa-truck-medical fa-2xl" style="color: #fff;"></i>
                <p>Fast Emergency Response Time </p>
            </div>
            <div class="conten2">
                <i class="fa-solid fa-user-tie fa-2xl" style="color: #fff;"></i>
                <p>Professional Staff & Specialists </p>
            </div>
            <div class="conten2">
                <i class="fa-solid fa-hospital fa-2xl" style="color: #fff;"></i>
                <p>Cutting-Edge Facilities</p>
            </div>
            <div class="conten2">
                <i class="fa-solid fa-heart-pulse fa-2xl" style="color: #fff;"></i>
                <p>Individualized Personal Treatment</p>
            </div>
        </div>
    </section>
    
      <footer>
        <p>&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>
</html>

