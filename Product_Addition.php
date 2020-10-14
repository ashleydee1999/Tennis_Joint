<?php
    include 'init.php';
    include 'connect.php';
    $prodName=$_POST['prodName'];
    $colour=$_POST['colour'];
    $size=$_POST['size'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $selectCategory=$_POST['selectCategory'];
    $selectTargetMarket=$_POST['selectTargetMarket'];
    $selectType=$_POST['selectType'];
    $selectBrand=$_POST['selectBrand'];
    $prodImage=$_POST['prodImage'];
    $prodImage2=$_POST['prodImage2'];
    $prodImage3=$_POST['prodImage3'];
    
    if($selectCategory==1 || $selectCategory==6 || $selectCategory==7)
    {
        $tableName="clothing";
    }
    elseif($selectCategory==2 || $selectCategory==8 || $selectCategory==9)
    {
        $tableName="footware";
    }
    else
    {
        $tableName="equipment";
    }
    
    if($selectTargetMarket==5)
    {
        $insert = "insert into $tableName (name,color,size,price,quantity,category,Type,Brand,picture,picture2,picture3,dateAdded) values ('$prodName', '$colour', '$size', '$price','$quantity', '$selectCategory', '$selectType', '$selectBrand', '$prodImage', '$prodImage2', '$prodImage3', curdate())";
    }
    else
    {
        $insert = "insert into $tableName (name,color,size,price,quantity,category,targetMarket,Type,Brand,picture,picture2,picture3,dateAdded) values ('$prodName', '$colour', '$size', '$price','$quantity', '$selectCategory', '$selectTargetMarket','$selectType', '$selectBrand', '$prodImage', '$prodImage2', '$prodImage3', curdate())";
    }
    
    $stmt = $conn->prepare($insert);
    $stmt->execute();

    header("Location: http://localhost/Tennis_Joint/confirmationAddProduct.php");
    $conn->close();
 
?>  
