<?php
    include 'init.php';
    $UserEmail=$_POST['email'];
    $UserPassword=$_POST['password1'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $number=$_POST['number'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $DOBday=$_POST['DOBday'];
    $DOBmonth=$_POST['DOBmonth'];
    $DOByear=$_POST['DOByear'];
    $dob=($DOBday.'-'.$DOBmonth.'-'.$DOByear);
    $profile = $_POST['profileImage'];


    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tennisjoint";
    
    // Create connection
    $conn = new mysqli($host, $user, $pass, $db) or die("Unable to connect to database " + $db);
    
    $insert = "insert into users (email,password,name,surname,dob,gender,phone,address,profPic,userLevel) values ('$UserEmail', '$UserPassword', '$firstName', '$lastName', '$dob', '$gender','$number', '$address', '$profile','customer')";
    $stmt = $conn->prepare($insert);
    $stmt->execute();

    header("Location: http://localhost/Tennis_Joint/confirmationRegistration.php");
    $conn->close();
 
?>  
