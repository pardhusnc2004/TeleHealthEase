<?php
session_start();
if(!isset($_SESSION['signed'])){
    header("Location: signi.php");
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
    $username = $result->fetch_assoc()['username'];

    if(isset($_POST['form_submit'])){
        extract($_POST);
        $query = "SELECT * FROM doctors WHERE name='$form_dname';";
        $result = $conn->query($query);
        $doctor_id = $result->fetch_assoc()['doctor_id'];

        $app_id = rand(1000,9999);
        $appoint_query = "INSERT INTO apps VALUES ('$app_id','$form_pname','$form_pemail','$doctor_id','$form_dname','$form_dspec','$form_appdate','$form_apptime');";
        $result = $conn->query($appoint_query);
      }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="appoint-assets/css/appoint.css">
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
                <h1>Appointment</h1>
                <form method="post">
                    <div class="input-class">
                        <div class="entry">
                            <i class="fa-solid fa-user" style="color: navy;"></i>
                            <input type="text" placeholder="Patient's Name" class="input-field" name="form_pname" value="<?php echo $username;?>">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-envelope" style="color: navy;"></i>
                            <input type="email" placeholder="Patient's Email" class="input-field" name="form_pemail" value="<?php echo $email;?>">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-user-doctor" style="color: navy;"></i>
                            <input type="text" placeholder="Doctor's Name" class="input-field" name="form_dname">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-envelope" style="color: navy;"></i>
                            <input type="email" placeholder="Doctor's Email" class="input-field" name="form_demail">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-microscope" style="color: navy;"></i>
                            <input type="text" placeholder="Doctor's Specialization" class="input-field" name="form_dspec">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-calendar" style="color: navy;"></i>
                            <input type="date" class="input-field" name="form_appdate">
                        </div>
                        <div class="entry">
                            <i class="fa-solid fa-clock" style="color: navy;" ></i>
                            <input type="time" class="input-field" name="form_apptime">
                        </div>
                        <div class="btn-class">
                            <button onclick="alert('Appointment booked Succesfully.')" name="form_submit">Book</button>
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