<?php

    include 'init.php';
    include 'connect.php';


    if($_GET)
    {
        $idProducts=$_GET['idProducts'];
        $idProducts=$_GET['idProducts'];
    }

    $remove="DELETE FROM trolley WHERE idProducts='$idProducts' and customerEmail='$getEmail' and orderStatus='trolley'";
    $stmt = $conn->prepare($remove);
    $stmt->execute();
   

 
   header("Location: http://localhost/Tennis_Joint/Trolley.php");

    $conn->close();
?>  
