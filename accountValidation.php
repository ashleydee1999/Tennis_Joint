<?php

    include 'init.php';
    include 'connect.php';
   
    $name=$_POST['Username'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $UserPassword=$_POST['password'];
    $profile = $_POST['profileImage'];
    
    $update1 = "UPDATE users SET name='$name',surname='$lastName',phone='$phone',address='$address',password='$UserPassword',profPic='$profile' WHERE email='$email'";
    $stmt1 = $conn->prepare($update1);
    $stmt1->execute();
    
    header("Location: http://localhost/Tennis_Joint/confirmationAccUpdate.php");
    $conn->close();
?>  
