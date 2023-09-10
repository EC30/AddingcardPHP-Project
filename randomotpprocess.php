<?php
include 'databaseconnect.php';
$redirect_url = "changepassword.php";
session_start();
// if (isset($_SESSION["existemail"])) {
//     $emailcheck = $_SESSION["existemail"];
// echo $emailcheck;
// } 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $otpenter = $_POST['otp'];
    if (isset($_SESSION["existemail"])) {
        $emailcheck = $_SESSION["existemail"];
        $otpfound = mysqli_query($conn, "SELECT * from forgetpassword where email ='$emailcheck' and otp = '$otpenter'");

        if (mysqli_num_rows($otpfound) > 0) {
            $row = mysqli_fetch_assoc($otpfound); 
            $fetchotp = $row['otp']; 
            if ($otpenter == $fetchotp) {
                header("Location: $redirect_url");
                exit(); 
            } else {
                echo "<script>alert('Incorrect otp');</script>";   
            }
        } else {
            echo "<script>alert('Incorrect otp');</script>";   
        }
    } 
}
?>