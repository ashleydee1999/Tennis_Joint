<?php

    include 'init.php';
    include 'connect.php';


    if($_GET)
    {
        $idorders=$_GET['idorders'];
        $email=$_GET['email'];
    }

    $remove="DELETE FROM orders WHERE idorders='$idorders' and customerEmail='$email'";
    $stmt = $conn->prepare($remove);
    $stmt->execute();
   
   header("Location: http://localhost/Tennis_Joint/adminArea.php");

    $conn->close();
?>  
