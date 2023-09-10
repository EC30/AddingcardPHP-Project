<?php
    include 'databaseconnect.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    

    session_start();
    $receipent=$_SESSION["existemail"];
     session_start();
    $code_to_sent =$_SESSION["code"];
    $redirect_url = "changepassword.php";

    function send_mail ($receipent, $code_to_sent){
        require ('PHPMailer/PHPMailer.php');
        require ('PHPMailer/Exception.php');
        require ('PHPMailer/SMTP.php');
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0; 
            $mail->isSMTP(); 
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'marlinaa3015@gmail.com';
            $mail->Password = 'waklrxouczvkacnj'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587; 
            //Recipients
            $mail->setFrom('marlin223015@gmail.com', 'OTP');
            $mail->addAddress($receipent); // Recipient's email address
        
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Your OTP Code';
            $mail->Body = 'Your OTP code is: ' . $code_to_sent;
        }catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $otpenter=$_POST['otp'];
        $otpfound=mysqli_query($conn, "SELECT * from forgetpassword where otp = '$otpenter'");
        // echo $otpenter;
        // $sqlquery ="SELECT * from forgetpassword where otp ='$otpenter'";
        // $otpfound=mysqli_query($conn, $sqlquery);
        // echo $otpfound;
    
        if(mysqli_num_rows($otpfound)>0){
            $row = mysqli_fetch_assoc($otpfound); 
            $fetchotp = $row['otp']; 
            if($otpenter == $fetchotp){
                header("Location: $redirect_url");
                exit(); 
            } else{
                echo "<script>alert('Incorrect otp');</script>";   
            }
    
    
        } else{
            echo "<script>alert('Incorrect otp');</script>";   
        }

    }
?>