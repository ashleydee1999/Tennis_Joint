<?php

    include 'init.php';
    include 'connect.php';

    if($_GET)
    {
        $idorders=$_GET['idorders'];
        $customerEmail=$_GET['customerEmail'];
    }

    $update1 = "UPDATE trolley SET orderStatus='processed' WHERE customerEmail='$customerEmail' and orderStatus='ordered'";
    $stmt1 = $conn->prepare($update1);
    $stmt1->execute();
   
    $update = "UPDATE orders SET orderStatus='processed' WHERE customerEmail='$customerEmail' and idorders='$idorders'";
    $stmt2 = $conn->prepare($update);
    $stmt2->execute();

    
    echo ' <script lanuage="javascript">';
    echo 'alert("Product Added successfully to Cart")';
    echo '</script>';
    header("Location: http://localhost/Tennis_Joint/adminArea.php");
    $conn->close();
?>  
