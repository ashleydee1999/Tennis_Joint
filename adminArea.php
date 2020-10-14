<?php
 include 'init.php';
 include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scales=1">
    <title>Tennis Joint</title>

    <!-- <link rel="stylesheet" href="css/bootstrap-337.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font_awsome/css/font_awesome.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider/lightslider.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="scripts/jquery-331.min.js"></script>
    <script src="scripts/bootstrap-337.min.js"></script>
    <script src="scripts/JQuery3.3.1.js"></script>
    <script src="scripts/lightslider.js"></script>
    
</head>
<body>
    <nav class="mainNavBar" id="mainNavBar">    
        <div class="logo">
            <img src="icons/web-Logo.png" alt="Tennis Joint">
        </div>

        <ul class="nav-links">
            <li>
                <a class="active" href="Home_Page.php" class="active">Home</a>
            </li>
            <li>
                <a href="#" id="access_nav">Shop</a>
            </li>
            <li>
                <a href="Contact.php">Contact</a>
            </li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Account</button>
                    <div id="myDropdown" class="dropdown-content">

                        <?php
                            if($getEmail==null)
                            {
                                echo 
                                '
                                    <a href="Login.php">Login</a>
                                    <a href="Register.php">Registration</a>
                                ';
                            }
                            else
                            {
                                echo 
                                '
                                <a href="Account.php">Manage Account</a>
                                <a href="logout.php">Logout</a>

                                ';
                            }
                        ?> 
                    </div>
                </div>
            </li>
            <li>
                <a href="Account.php">
                <?php 
                        
                   if($getEmail==null)
                   {
                        echo "Welcome Guest";   
                   }     
                   else
                   {
                        $sql="select name,surname from users where email='".$getEmail."'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);    

                        echo $row['name'].' '.$row['surname'];
                   }
                ?>
                </a> 
            </li> 
            
            <?php

                $sql="select userLevel from users where email='".$getEmail."'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                
                if($row['userLevel'] == 'admin') 
                {
                    
                    echo '<li><a href="adminArea.php">Admin</a></li>';
                }
            ?>
            
            <li>
                <a href="Trolley.php"><i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
        <div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
    </nav>
    <script src="scripts/responsiveNav.js"></script>
    <!-- Second Nav Bar-->
    <div class="NavWrapper">

        <nav id="shopNav">
            <ul>

                <li class="MenuDropdown">
                    <a href="#">Men</a>
                    <ul class="megaMenu">
                        <ul>
                            <h4>Shop Men</h4>
                            <img class="catImg" src="icons/Men.png" alt="">
                        </ul>
                        <ul>
                            <h4>Clothing</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=1&Path=clothing">T-Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=2&Path=clothing">Golf Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=3&Path=clothing">Vests</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=4&Path=clothing">Pants</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=5&Path=clothing">Tights</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=6&Path=clothing">Shorts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=7&Path=clothing">Tracksuits</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=1&Type=9&Path=clothing">Base Layer</a></li>
                        </ul>
                        <hr>
                        <ul>
                            <h4>Shoes</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=1&Type=9&Path=footware">Running</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=1&Type=10&Path=footware">Training</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=1&Type=11&Path=footware">Sandals</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=1&Type=12&Path=footware">Squash</a></li>
                        </ul>

                    </ul>
                </li>

                <li class="MenuDropdown">
                    <a href="#">Ladies</a>
                    <ul class="megaMenu">

                        <ul>
                            <h4>Shop Ladies</h4>
                            <img  class="catImg" src="icons/Women.png" alt="">
                        </ul>
                        <ul>
                            <h4>Clothing</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=1&Path=clothing">T-Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=2&Path=clothing">Golf Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2Type=3&Path=clothing">Vests</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=4&Path=clothing">Pants</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=5&Path=clothing">Tights</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=6&Path=clothing">Shorts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=1&targetMarket=2&Type=7&Path=clothing">Tracksuits</a></li>
                        </ul>
                        <ul>
                            <h4>Shoes</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=2&Type=9&Path=footware">Running</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=2&Type=10&Path=footware">Training</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=2&Type=11&Path=footware">Sandals</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=2&targetMarket=2&Type=12&Path=footware">Squash</a></li>
                        </ul>

                    </ul>
                </li>

                <li class="MenuDropdown">
                    <a href="#">Kids</a>
                    <ul class="megaMenu">

                        <ul>
                            <h4>Shop Kids</h4>
                            <img  class="catImg" src="icons/kids.png" alt="">
                        </ul>
                        <ul>
                            <h4>Girls Clothing</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=1&Path=clothing">T-Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=2&Path=clothing">Golf Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=13&Path=clothing">Sports Bra's</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=4&Path=clothing">Pants</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=5&Path=clothing">Tights</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=14&Path=clothing">Skorts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=6&Path=clothing">Shorts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=7&targetMarket=4&Type=7&Path=clothing">Tracksuits</a></li>
                        </ul>
                        <ul>
                            <h4>Girls Shoes</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=9&targetMarket=4&Type=9&Path=footware">Running</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=9&targetMarket=4&Type=10&Path=footware">Training</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=9&targetMarket=4&Type=11&Path=footware">Sandals</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=9&targetMarket=4&Type=12&Path=footware">Squash</a></li>
                        </ul>
                        <ul>
                            <h4>Boys Clothing</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=1&Path=clothing">T-Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=2&Path=clothing">Golf Shirts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=3&Path=clothing">Vests</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=4&Path=clothing">Pants</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=5&Path=clothing">Tights</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=6&Path=clothing">Shorts</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=clothing&category=6&targetMarket=3&Type=7&Path=clothing">Tracksuits</a></li>
                        </ul>
                        <ul>
                            <h4>Boys Shoes</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=8&targetMarket=3&Type=9&Path=footware">Running</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=8&targetMarket=3&Type=10&Path=footware">Training</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=8&targetMarket=3&Type=11&Path=footware">Sandals</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_Details.php?tableName=footware&category=8&targetMarket=3&Type=12&Path=footware">Squash</a></li>
                        </ul>
                    </ul>
                </li>

                <li class="MenuDropdown">
                    <a href="#">Products</a>
                    <ul class="megaMenu">

                        <ul>
                            <h4>Shop Equipment</h4>
                            <img  class="catImg" src="icons/Equipment.png" alt="">
                        </ul>
                        <ul>
                            <h4>Accesories</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=3&Type=15&Path=equipment">Towels</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=3&Type=16&Path=equipment">Hats</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=3&Type=28&Path=equipment">Bags</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=3&Type=17&Path=equipment">Bottles</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=3&Type=18&Path=equipment">Headband & Wristband</a></li>
                        </ul>

                        <ul>
                            <h4>Technology</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=4&Type=19&Path=equipment">Fitness Tracker</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=4&Type=20&Path=equipment">Sports Watches</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=4&Type=21&Path=equipment">Heart Rate Monitors</a></li>
                        </ul>

                        <ul>
                            <h4>Equipment</h4>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=22&Path=equipment">Balls</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=29&Path=equipment">Rackets</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=23&Path=equipment">Strings</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=24&Path=equipment">Grips</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=25&Path=equipment">Vibration Dampner</a></li>
                            <li><a href="http://localhost/Tennis_Joint/Product_DetailsEquipment.php?tableName=equipment&category=5&Type=26&Path=equipment">Nets</a></li>
                        </ul>
                    </ul>
                </li>  
            </ul>
        </nav>
    </div>  
    <!-- Second Nav Bar Ends -->

    <ul class="breadcrumb"><!-- breadcrumb of the Page -->
        <li>
            <a href="Home_Page.php">Admin Area</a>
        </li>
        <li>
            Shop
        </li>
    </ul><!-- breadcrumb of the Page Ends-->

    <div class="content">
        <div class="container">
            <?php 
                $sql2 = "select * from orders where orderStatus='ordered' order by dateTime desc";

                $result2 = mysqli_query($conn, $sql2 ) or die(mysqli_error($conn));
            ?>
            <div class="col-md-3"><!-- col-md-3 -->
                <div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu  -->
                    <div class="panel-heading"><!--panel-heading  -->
                        <h3 class="panel-title" id="sideBarTitle"> My Account</h3>
                    </div>
                    <div class="panel-body"><!--panel-body  -->
                        <div class="profile-links">
                            <a href="adminArea.php"><i class="fa fa-users">View New Customer Orders</i></a>  
                            <a href="cusDeliveredOrders.php"><i class="fa fa-users">View Order History</i></a>  
                            <a href="addNewProduct.php"><i class="fa fa-shopping-bag">Add New Products</i></a>   
                        </div>
                    </div><!--panel-body  -->
                </div><!--panel panel-default sidebar-menu  -->
            </div><!-- col-md-3 End-->
            <div class="col-md-9">
                <div class="box">
                </div>
                <div class="row">
                        <h1>Customer Orders</h1>
                        <p class="text-muted">New Orders</p>
                        <div class="table-responsive"><!--table-responsive  -->
                            
                            <table class="table"><!--table  -->
                                <thead><!--thead ends  -->
                                    <tr><!--tr  -->
                                        <th>Customer Email</th>
                                        <th>OrderID</th>
                                        <th>Date</th>
                                    </tr><!--tr Ends  -->
                                </thead><!-- thead Ends -->
                                <?php


                                    $resultCheck2 = mysqli_num_rows($result2);

                                    if ($resultCheck2 > 0)
                                    {
                                        while ($myProducts=mysqli_fetch_array($result2))
                                        {
                                            echo '
                                            <tbody><!-- tbody details of product in trolley -->
                                                <tr>
                                                    <td>
                                                        <a href="viewCustomerOrders.php?email='.$myProducts['customerEmail'].'">'.$myProducts['customerEmail'].'</a>
                                                    </td>
                                                    <td>
                                                        '.$myProducts['idorders'].'
                                                    </td>
                                                    <td>
                                                        '.$myProducts['dateTime'].'
                                                    </td>
                                                    <td>
                                                        <a href="removeFromOrders.php?idorders='.$myProducts['idorders'].'&email='.$myProducts['customerEmail'].'"> Delete <i class="fa fa-trash"></i></a>
                                                    </td> 
                                                    <td>
                                                        <a href="processOrder.php?idorders='.$myProducts['idorders'].'&customerEmail='.$myProducts['customerEmail'].'"> Process <i class="fa fa-refresh"></i></a>
                                                    </td> 
                                                </tr>
                                            </tbody><!-- tbody details of product in trolley Ends -->';
                                        }
                                    }
                                ?>
                            </table><!-- table end -->   
                        </div><!--table-responsive  -->
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/validationScript.js"></script>
</body>
</html>