<?php
    session_start();
        include 'databaseconnect.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email=$_POST['email'];
            $pass=$_POST['pass']; 
            $_SESSION["user"]=$email;
            if(empty($email) OR empty($pass)){
                echo "<script>alert('All fields are required');</script>";
            } else{
                $result1= "SELECT * from reg where email ='$email'";
                $result2= "SELECT password from reg where password ='$pass'";
                $result3= "SELECT email from reg where email ='$email' and password ='$pass'";
                $emailfound=mysqli_query($conn, $result1);
                $passfound=mysqli_query($conn, $result2);
                $bothfound=mysqli_query($conn, $result3);

                // if(mysqli_num_rows($emailfound)==0){
                //     echo "<script>alert('Email not found');</script>"; 
                //     //header("location: login.php"); 
                // } else{
                //     $row = $emailfound -> fetch_assoc();
                //     if($pass != $row['password']){
                //         echo "<script>alert('Incorrect password');</script>"; 
                //         //header("location: login.php"); 
                //     }else{
                //         echo "<script>alert('Login successful');</script>";
                //         header("location: landingpage.html"); 
                //     }
                // }

                if(mysqli_num_rows($bothfound)>0){
                    
                    header("location: OnlineForumPHP/index.php");
                    
                } else if (mysqli_num_rows($emailfound)>0 and mysqli_num_rows($passfound)==0){
                    echo "<script>alert('Incorrect password');</script>";
                    echo "<script>setTimeout(function() { window.location.href = '$_SERVER[PHP_SELF]'; }, 2000);</script>";
                    exit();
                } else{
                    echo "<script>alert('Login failed');</script>";
                    echo "<script>setTimeout(function() { window.location.href = '$_SERVER[PHP_SELF]'; }, 2000);</script>";
                    exit();
                }

                if(mysqli_num_rows($emailfound)>0 and mysqli_num_rows($passfound)>0){
                    echo "<script>alert('Login successful');</script>";
                } else if (mysqli_num_rows($emailfound)>0 and mysqli_num_rows($passfound)==0){
                    echo "<script>alert('Incorrect password');</script>";
                } else{
                    echo "<script>alert('Login failed');</script>"; 
                }

                echo "<script>alert('".$result1."');</script>";
                echo "<script>alert(".gettype($emailfound).");</script>";
                if ($emailfound){
                     echo "<script>alert('".$result1."');</script>";
                }

              
                //echo "<script>alert('".$result2."');</script>";

                // if($email == $result1 and $pass == $result2){
                //     echo "<script>alert('Login successful');</script>";
                // } else if ($email == $result1 and $pass != $result2){
                //     echo "<script>alert('Incorrect password');</script>";
                // } else{
                //     echo "<script>alert('Login failed');</script>";
                // }
            }

           
        }

        
    ?>