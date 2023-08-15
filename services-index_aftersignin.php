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
    <title>Services</title>
    <link rel="stylesheet" href="services-assets/css/home.css">
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
    <div class="container">
        <div class="conten"></div>
        <div class="conten">
            <h2 class="title" style="margin-left: 0;">Our Services</h2>
            <div>
                <p style="color: #ffffff; font-size: x-large; font-weight: 400; color: navy; text-align: justify;">We offer a wide range of services, from maternal care to senior care, from pediatrics to dentistry. Our mission is to help you maintain a high quality of life through best health practices, and our entire staff is dedicated to this goal. We offer holistic solutions to meet all of your health needs. </p>
            </div>
        </div>
    </div>
    <section class="features" id="services">
        <h2 class="title">Services We Offer</h2>
        <div class="services-container" id="features1">
            <div class="service-card o1">
                <i class="fa-solid fa-person-chalkboard fa-2xl"></i>
                <h3>Virtual Consultations</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card o2">
                <i class="fa-solid fa-clipboard-question fa-2xl"></i>
                <h3>Medical Adivice</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card o3">
                <i class="fa-solid fa-capsules fa-2xl"></i>
                <h3>Prescription Refills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-regular fa-comment-dots fa-2xl"></i>
                <h3>Chat and Messaging</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-hand-holding-medical fa-2xl"></i>
                <h3>Mental Health Support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-circle-plus fa-2xl"></i>
                <h3>Specialized Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-file-medical fa-2xl"></i>
                <h3>Online Prescriptions</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-book-medical fa-2xl"></i>
                <h3>Medical Records  <br>& History</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-fingerprint fa-2xl"></i>
                <h3>Privacy & Security</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-clipboard fa-2xl"></i>
                <h3>Lab Tests & Reports</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-calendar-check fa-2xl"></i>
                <h3>Appointment Remainders</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-credit-card fa-2xl"></i>
                <h3>Billing & payment</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
      </section>
      <footer>
        <p>&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>
</html>

