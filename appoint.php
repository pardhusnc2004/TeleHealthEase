<?php
    $server = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'TELE_HEALTH_EASE';

    //Get stuff from page
    $patient_name = $_POST['pname'];
    $patient_email = $_POST['pemail'];
    $doctor_name = $_POST['dname'];
    $spec = $_POST['dspec'];
    $app_date = $_POST['appdate'];
    $app_time = $_POST['apptime'];
    //SQL Connection
    $conn = new mysqli($server,$dbuser,$dbpass,$dbname);
    if($conn->connect_error){
        die("Connection Error:".$conn->connect_error);
    }
    //Get Doctor ID
    $query = "SELECT * FROM doctors WHERE name='$doctor_name';";
    $result = $conn->query($query);
    $doctor_id = $result->fetch_assoc()['doctor_id'];

    //Create appointment id unique value
    $app_id = rand(1000,9999);
    $appoint_query = "INSERT INTO apps VALUES ('$app_id','$patient_name','$patient_email','$doctor_id','$doctor_name','$spec','$app_date','$app_time');";
    $result = $conn->query($appoint_query);
    if($result === false){
        echo "Appointment Failed";
    }
    else{
        echo "Successfully Appointed";
    }
?>