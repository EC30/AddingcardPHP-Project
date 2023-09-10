<?php
      
      $servername= "Localhost";
      $username = "root";
      $password = "";
      $dbName="my_database";
      $conn=mysqli_connect($servername, $username, $password);
   

     if (!$conn) {
          die("Connection failed: " .mysqli_connect_error());
      } 
      $conn->select_db($dbName);
      // $sql = "ALTER TABLE reg
      //   ADD mobile_number INT";

      //mysqli_query($link,"ALTER TABLE reg.extracols ADD  ('".$newCol1."' VARCHAR(100),  '".$newCol2."' INT(100))");
    //   $sqlaltertable="ALTER TABLE reg ADD mobile_number";
    //   $sqlaltertable="ALTER TABLE reg ADD full_name";
      //$dbName = "my_database";
      //$sqlCreateDatabase = "CREATE DATABASE $dbName";
    //   $conn->select_db($dbName);
  //   $sqlCreateTable = "CREATE TABLE Category (
  //     id AUTOINCREMENT PRIMARY KEY,
  //     email VARCHAR(255),
  //     category_name VARCHAR(255),
  //     Description VARCHAR(255),
  //     image_data VARCHAR(100)
  // )";
  // $sqldrop="Drop TABLE Category";
  
  // if ($conn->query($sqldrop) === TRUE) {
  //     echo "Table dropped successfully";
  // } else {
  //     echo "Error: " . $conn->error;
  // }

  ?>
