<?php

    include 'init.php';
    include 'connect.php';

    $quantity=$_POST['qnty'];
    $prodSize=$_POST['prodSize'];

    if($_GET)
    {
        $idProducts=$_GET['productID'];
        $tableName=$_GET['tableName'];
        $Path=$_GET['Path'];
    }
    
    
    $sql="select * from trolley where email= '".$getEmail."' and idProducts='".$idProducts."'";
    
    $result = mysqli_query($conn,$sql);
    
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck <= 0) 
    {
        $insert = "insert into trolley (idProducts,customerEmail,quantity,size,theTable,orderStatus) values ('$idProducts','$getEmail', '$quantity', '$prodSize', '$tableName','trolley')";
        $stmt = $conn->prepare($insert);
        $stmt->execute();
    }
   
    
    $message = "Prodduct added";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    header("Location: http://localhost/Tennis_Joint/info.php?productID=$idProducts&tableName=$tableName&Path=$tableName");
    $conn->close();
?>  
