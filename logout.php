<?php
session_start();
$_SESSION['email'] = null;
$_SESSION['signed'] = false;
session_destroy();
header("Location: signi.php");
exit();
?>