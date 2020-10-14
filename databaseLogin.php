<?php
    include 'init.php';
    $host="localhost";
    $user="root";
    $password="";
    $db="tennisjoint";
    $UserEmail=$_POST['UserEmail'];
    $UserPassword=$_POST['UserPassword'];

    $connection=new mysqli($host,$user,$password,$db);
  
    $sql="select * from users where email='".$UserEmail."' and password='".$UserPassword."'";
    
    $result=mysqli_query($connection,$sql);

    $row=mysqli_fetch_assoc($result);


    if(($row['email'] == $UserEmail) && ($row['password']==$UserPassword))
    {
       
       
       $_SESSION['email']=$row['email'];

        header("Location: http://localhost/Tennis_Joint/Home_Page.php");
        
    }
    else
    {
        echo "Please enter a valid Email and Password";
    }
    

?>
