
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
    <title>Home</title>
    <link rel="stylesheet" href="assets-main/css/home.css">
    <script src="https://kit.fontawesome.com/9ab7a857e2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans:wght@800&family=Orbitron&family=Poppins&display=swap" rel="stylesheet">
    <style>  
    </style>
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
        <div class="container">
            <div class="conten">
                
            </div>
            <div class="conten">
                <div><img  src="assets-main/images/telehealthease-high-resolution-logo-color-on-transparent-background.png" alt="" style="height: 80px; margin-bottom: 25px;"></div>
                <div>
                    <p style="color: #ffffff; font-size: x-large; font-weight: 400; color: navy;">Welcome to TeleHealth Ease! 
                        We are a pioneering telemedicine platform devoted to revolutionize healthcare accessibility. <br><br>Our mission is to connect patients with top-tier medical professionals, providing convenient and personalized care from the comfort of their own homes. With cutting-edge technology and a dedicated team, we are here to make your healthcare journey easier, efficient, and empowering</p>
                    <div class="anchor"><a href="appointment-index_aftersignin.php"><button class="btnlogin">Book Appointment</button></a><a href="about-index_aftersignin.php" ><button class="btnlogin" style="margin-left: 1%;">Learn More</button></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <h2 class="title">Our Expertise</h2>
        <div class="services-container" id="services1">
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-user-doctor fa-2xl"></i>
                    <h3>Plastic Surgeons</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-brain fa-2xl"></i>
                    <h3>Neurologists</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-hand-dots fa-2xl"></i>
                    <h3>Dermatologists</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-children fa-2xl"></i>
                    <h3>Pediatricians</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-eye fa-2xl"></i>
                    <h3>Ophthalmologist</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-heart-pulse fa-2xl"></i>
                    <h3>Cardiologists</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <i class="fa-solid fa-bone fa-2xl"></i>
                    <h3>Osteologists</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="">
                <div class="service-card">
                    <div class="small">
                        <i class="fa-solid fa-tooth fa-2xl"></i>                        
                        <h3>Dentists</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </a>
        </div>
      </section>
      <div id="features2"></div>
      <section class="about3" id="about1">
        <div class="container" style="height: max-content;">
            <div class="conten">
                
            </div>
            <div class="conten">
                <div class="anchor">
                    <h2 class="title">The Clinic</h2>
                    <p style="color: #ffffff; font-size: x-large; font-weight: 400; color: navy;"> 
                        TeleHealthEase Clinic was founded by a group of doctors who felt the need for a holistic clinic in the community, one that would serve a wide variety of medical needs. The clinic opened in a large Victorian style home and has grown, over time, to include more than 70 doctors and specialists.</p>                  
                        <div style="margin-left: 33%;"><a href="about-index_aftersignin.php"><button class="btnlogin">Learn More</button></a></div>
                    </div>
            </div>
        </div>
    </section>
      <footer>
        <div class="footer-container"">
            <div class="foot">
                <i class="fa-solid fa-comments fa-2xl fa-beat"></i>
                <p>Contact</p>
                <div><a href="appointment-index_aftersignin.php"><button class="foot-btnlogin">Book Appointment</button></a></div>
                <p style="margin-top: 1px;"><i class="fa-solid fa-phone fa-shake fa-sm"></i> : +91 79953 97226</p>
                <p style="margin-top: 0px;"><i class="fa-solid fa-envelope fa-shake fa-sm"></i> : pardhasaradhi.polisetty@outlook.com</p>
            </div>
            <div class="foot">
                <i class="fa-solid fa-location-dot fa-bounce fa-2xl"></i>
                <p>Address</p>
                <p style="margin-top: 20px;">TeleHealthEase | Medical Clinic</p>
                <p style="font-weight: 300; margin-top: 1px; margin-bottom: 10px;">Visakhapatnam, Andhra Pradesh <br> India, 530001</p>
                <i class="fa-brands fa-youtube fa-shake fa-lg"></i>
                <i class="fa-brands fa-facebook fa-shake fa-lg"></i>
                <i class="fa-brands fa-twitter fa-lg fa-shake" ></i>
                <i class="fa-brands fa-instagram fa-lg  fa-shake"></i>
                <i class="fa-brands fa-linkedin fa-lg fa-shake"></i>
                <i class="fa-brands fa-discord fa-lg fa-shake"></i>
                <i class="fa-brands fa-telegram fa-lg fa-shake"></i>
            </div>
            <div class="foot">
                <i class="fa-solid fa-clock fa-flip fa-2xl"></i>
                <p>Clinic Hours</p>
                <p>
                    <div style="margin-top: 18px; display: grid; grid-template-columns: 233px 233px; justify-content: center;">
                        <div><p style="margin-bottom: 15px; margin-top: 10px;">Monday - Friday </p><p style="margin-bottom: 15px;">Saturday </p><p> Sunday</p></div>
                        <div><p style="margin-bottom: 20px; margin-top: 10px;">8:00 A.M - 9:00 P.M </p><p style="margin-bottom: 15px;">8:00 A.M to 6:00 P.M  </p><p> Closed</p></div>
                    </div>                                  
                </p>
            </div>
        </div><hr>
        <p style="margin-top: 1%;">&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>
</html>