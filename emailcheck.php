<?php
    include 'databaseconnect.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
  
      session_start();
        function generateOTP($length = 6) {
        
            $otp = '';
            for ($i = 0; $i < $length; $i++) {
                $otp .= mt_rand(0, 9); 
            }
            return $otp;
        }
        $otp = generateOTP();
 

       
        $_SESSION["code"] = $otp;

        function send_mail ($recipient, $code_to_sent){
            require ('PHPMailer/PHPMailer.php');
            require ('PHPMailer/Exception.php');
            require ('PHPMailer/SMTP.php');
            $mail = new PHPMailer(true);
            try{
                $mail->SMTPDebug = 2; 
                $mail->isSMTP(); 
                $mail->Host = 'smtp.gmail.com'; 
                $mail->SMTPAuth = true; 
                $mail->Username = 'marlinaa3015@gmail.com';
                $mail->Password = 'lkaphtmpxvrmjvdx'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port = 587; 
                //Recipients
                $mail->setFrom('marlin223015@gmail.com', 'OTP');
                $mail->addAddress($recipient); // Recipient's email address
            
                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Your OTP Code';
                $mail->Body = 'Your OTP code is: ' . $code_to_sent;
                $mail->send();
            }catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
     
      $redirect_url = "otpscreen.php";
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $emailcheck=$_POST['email'];
          $_SESSION["existemail"]=$emailcheck;

          if(empty($emailcheck)){
              echo "<script>alert('Email is required');</script>";
          } else{
              $duplicate=mysqli_query($conn, "SELECT * from reg where email = '$emailcheck'");
              $duplicate1=mysqli_query($conn, "SELECT * from forgetpassword where email = '$emailcheck'");
            
             
                if(mysqli_num_rows($duplicate)>0){
                    if(mysqli_num_rows($duplicate1)>0){
                        $row = mysqli_fetch_assoc($duplicate1); 
                        $existingEmail = $row["email"];
                        send_mail($existingEmail,$otp);
                        $sqlupdate = "UPDATE forgetpassword SET otp = '$otp' WHERE email = '$existingEmail'";
                        if ($conn->query($sqlupdate) === TRUE) {
                            echo "Record updated successfully";
                            header("Location: $redirect_url");
                            exit();
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }

                    }else{
                        send_mail($emailcheck,$otp);
                        $sqlInsertTable = "INSERT INTO forgetpassword (email, otp) VALUES ('$emailcheck', '$otp')";
                        if ($conn->query($sqlInsertTable) === TRUE) {
                            header("Location: $redirect_url");
                            exit();
                        } else {
                            echo "Error in process: " . $conn->error;
                        }
                    }
                   

                }else{
                     echo "<script>alert('Email not found');</script>";   
                }
          }

       
         
      }

      
  ?>
