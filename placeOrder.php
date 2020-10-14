<?php

    include 'init.php';
    include 'connect.php';


    $insert = "insert into orders (customerEmail,orderStatus,dateTime) values ('$getEmail','ordered',curdate())";
    $stmt = $conn->prepare($insert);
    $stmt->execute();

    $update = "UPDATE trolley SET orderStatus='ordered' WHERE customerEmail='$getEmail' and orderStatus='trolley'";
    $stmt2 = $conn->prepare($update);
    $stmt2->execute();

    
    //header("Location: http://localhost/Tennis_Joint/Home_Page.php");
    echo ' <script lanuage="javascript">';
    echo 'alert("Product Added successfully to Cart")';
    echo '</script>';
    header("Location: http://localhost/Tennis_Joint/confirmation.php");
    $conn->close();
?>  
