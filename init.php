<?php

    error_reporting(0);

    session_start();
    require 'Users.php';

    $theEmail=$_SESSION['email'];

    
    $sendEmail=new User($theEmail);

    $getEmail=$sendEmail->getEmail();
    
?>