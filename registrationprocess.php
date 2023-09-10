<?php
      include 'databaseconnect.php';
     session_start();
     
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $fullname=$_POST['fullname'];
          $contact=$_POST['contact'];
          if(empty($email) OR empty($pass)){
              echo "<script>alert('All fields are required');</script>";
             
             
          } else{
            
              $duplicate=mysqli_query($conn, "SELECT * from reg where email = '$email'");
              if(mysqli_num_rows($duplicate)>0){
                //echo "<script>alert('username already exist');</script>";
                $_SESSION['status']="Username already exist";
                header("location: landingpage.php");
            }else{
                  $sqlInsertTable = "INSERT INTO reg (email, password, fullname, mobile_number) VALUES ('$email', '$pass', '$fullname', '$contact')";
                  if ($conn->query($sqlInsertTable) === TRUE) {
                   // $_SESSION['status']="Registration successfully";
                    header("location: nlogin.php");
                     // echo "<script>alert('registration successful');</script>";   
                  } else {
                     echo "Error in registration process: " . $conn->error;
                    
                  }
              }
          }

       
         
      }

      
  ?>
