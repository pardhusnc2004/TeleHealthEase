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
    <title>FAQ's</title>
    <link rel="stylesheet" href="faq-assets/css/faq.css">
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
                    <h2 class="title" style="font-size: 63px; color: navy;">Frequenly Asked Questions (FAQ's)</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="q-contianer">
        <div class="que">
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q1: What is the purpose of this platform?</p>
                <p>A1: Our platform aims to provide accessible and convenient online medical care, allowing users to connect with licensed healthcare professionals for consultations, medical advice, and prescriptions.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q2: How does the online consultation process work?</p>
                <p>A2: Users can schedule appointments with healthcare providers through our platform. During the consultation, users can interact with the provider via secure video calls or messaging to discuss their medical concerns.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q3: What medical conditions can I seek advice for through this platform?</p>
                <p>A3: Our platform covers a wide range of medical conditions, including common illnesses, minor injuries, skin issues, mental health support, and chronic condition management.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q4: Is my personal information secure?</p>
                    <p>A4: Yes, we prioritize data security and privacy. Our platform utilizes encryption and follows industry best practices to safeguard your personal and medical information.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q5: How do I schedule an appointment with a healthcare provider?</p>
                    <p>A5: To schedule an appointment, log in to your account, browse through available healthcare providers, select your preferred one, and choose a suitable date and time for the consultation.</p>
            </div>
        </div>
        <div class="que">
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q6: What payment methods do you accept?</p>
                    <p>A6: We accept various payment methods, including credit/debit cards, online wallets, and other secure payment options. Our billing process is straightforward and transparent.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q7: Are the healthcare providers on this platform qualified?</p>
                    <p>A7: Absolutely. We carefully vet all healthcare providers on our platform to ensure they are licensed, experienced, and qualified to provide medical care.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q8: Can I get prescriptions for medications during an online consultation?</p>
                    <p>A8: Yes, if the healthcare provider deems it necessary based on your medical condition, they can issue prescriptions that you can conveniently access through our platform.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q9: What should I do in case of a medical emergency?</p>
                    <p>A9: In case of a medical emergency, please call your local emergency services immediately. Our platform is designed for non-emergency medical advice and consultation.</p>
            </div>
            <div class="que-inner">
                <p style="color: navy; font-weight:700">Q10: How can I provide feedback or report issues with the platform?</p>
                    <p>A10: We value your feedback. You can provide feedback or report any issues by contacting our customer support team through the provided channels on our website.</p>
            </div>
        </div>
    </div>
    <div class="signuP">
        <div>
            <a  href="review-index_aftersignin.php"><button id="sgn" class="btnlogin" >Review Us</button></a>
        </div>
    </div>
      <footer>
        <p>&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>
</html>

