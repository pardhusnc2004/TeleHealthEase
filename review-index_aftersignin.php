<?php
session_start();
if(!isset($_SESSION['signed'])){
    header("Location: signin_index.html");
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
    $username = $result->fetch_assoc()['username'];
    $reviewid = rand(1000,9999);
    $register = "INSERT INTO reviews VALUES('$reviewid','$username','$email');";
    $result1 = $conn->query($register);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Us</title>
    <link rel="stylesheet" href="review-assets/css/review.css">
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
                <a class="nav-a" href="services-index.html">Services</a>
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
                <h1>Review Us</h1>
                <form  method="post">
                    <div class="input-class">
                        <div class="entry">
                            <p>Name</p>
                            <i class="fa-solid fa-user fa-xl" style="color: navy;"></i>
                            <input type="text" placeholder="Name" class="input-field" name="username" value="<?php echo $username;?>">
                        </div>
                        <div class="entry">
                            <p>Email</p>
                            <i class="fa-solid fa-envelope fa-xl" style="color: navy;"></i>
                            <input type="email" placeholder="Email" class="input-field" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="entry">
                            <p>Overall, how satisfied were you with our medical care website?</p>
                            <i class="fa-solid fa-laptop-medical fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">very Satisfied</option>
                                <option value="">Satisfied</option>
                                <option value="" selected>Neutral</option>
                                <option value="">Dissatisfied</option>
                                <option value="">very Dissatisfied</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>What was the primary reason for visiting our website?</p>
                            <i class="fa-solid fa-universal-access fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">Sheduling an Appointment</option>
                                <option value="">Seeking Medical Advice</option>
                                <option value="" selected>Accessing Health Information</option>
                                <option value="">Checking Test Results</option>
                                <option value="">Reviewing Us</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>Were you able to find the information or service you were looking for?</p>
                            <i class="fa-solid fa-bell-concierge fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">Yes</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>How easy was it to navigate our website?</p>
                            <i class="fa-solid fa-location-arrow fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">very Easy</option>
                                <option value="">Easy</option>
                                <option value="" selected>Neutral</option>
                                <option value="">Difficult</option>
                                <option value="">very Difficult</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>Did you experience any technical issues while using the website?</p>
                            <i class="fa-solid fa-triangle-exclamation fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">Yes</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>How Satisfied were you with the Online Appointment Booking Process?</p>
                            <i class="fa-solid fa-calendar-check fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">very Satisfied</option>
                                <option value="">Satisfied</option>
                                <option value="" selected>Neutral</option>
                                <option value="">Dissatisfied</option>
                                <option value="">very Dissatisfied</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>How Satisfied were you with the Tele Medecine Experience?</p>
                            <i class="fa-solid fa-capsules fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">very Satisfied</option>
                                <option value="">Satisfied</option>
                                <option value="" selected>Neutral</option>
                                <option value="">Dissatisfied</option>
                                <option value="">very Dissatisfied</option>
                                <option value="">No. I haven't gone through any Tele Medicine Consultation yet.</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>Would you recommend our medical care website to others?</p>
                            <i class="fa-solid fa-laptop-medical fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">Yes</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>May we contact you for further feedback or clarification?</p>
                            <i class="fa-solid fa-phone fa-xl" style="color: navy;"></i>
                            <select name="" id="" class="input-field">
                                <option value="">Yes</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="entry">
                            <p>Please share any additional comments to help us improve our website and services:</p>
                            <i class="fa-solid fa-message fa-xl" style="color: navy;"></i>
                            <textarea name="" placeholder="Comment your Views.
            if any" id="once" cols="2" rows="" class="input-field"></textarea>
                        </div>
                        <div class="btn-class">
                        <a><button class="btnlogin" onclick="alert('Review Successful');">POST</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p class="always">&copy; 2023 TeleHealthEase 21BCE9049. All rights reserved.</p>
      </footer>
</body>