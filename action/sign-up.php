<?php

require_once('../config/loader.php');

if(isset($_POST['signup'])) {
   try {
     // Parameters
     $username = $_POST['username'];
     $password = $_POST['password'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
   
     // sql
     $query = "INSERT INTO users SET username=?, password=?, mobile=?, email=?";
     
     // stmt
     $stmt = $conn->prepare($query);
 
     // bind
     $stmt->bindValue(1, $username);
     $stmt->bindValue(2, $password);
     $stmt->bindValue(3, $mobile);
     $stmt->bindValue(4, $email);
 
 
     // exe
     $stmt->execute();
 
     header("Location: ../index.php");

   } catch (PDOException $e) {
    echo "Error message:" . $e->getMessage();
   }
}