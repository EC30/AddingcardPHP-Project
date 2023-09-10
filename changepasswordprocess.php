<?php
session_start();
include 'databaseconnect.php';
$redirect_url = "nlogin.php";

$emailtochange= $_SESSION["existemail"];
echo $emailtochange;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $passw=$_POST['passw'];
    $cpass=$_POST['cpass'];

        if($passw == $cpass){
            $sqlupdate = "UPDATE reg SET password = '$cpass' WHERE email = '$emailtochange'";
            if ($conn->query($sqlupdate) === TRUE) {
                echo "Record updated successfully";
                header("Location: $redirect_url");
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            } 
        } else{
            echo "<script>alert('password and confirm password does not match');</script>";   
        }


    } 
?>