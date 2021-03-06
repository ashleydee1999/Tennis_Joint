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
            <a href="Home_Page.php">Account Info</a>
        </li>
        <li>
            Shop
        </li>
    </ul><!-- breadcrumb of the Page Ends-->

    <div class="content"><!-- content -->
        <div class="container"><!--container  -->
            <div class="col-md-3"><!-- col-md-3 -->
                <div class="panel panel-default sidebar-menu"><!--panel panel-default sidebar-menu  -->
                    <div class="panel-heading"><!--panel-heading  -->
                        <h3 class="panel-title" id="sideBarTitle"> My Account</h3>
                    </div>
                    <div class="panel-body"><!--panel-body  -->
                        <div class="profile-links">
                            <a href="Account.php"><i class="fa fa-users"> My Profile</i></a>  
                            <a href="ViewOrders.php"><i class="fa fa-shopping-bag"> My Orders</i></a>  
                            <a href="DeliveredOrders.php"><i class="fa fa-shopping-bag"> Order History</i></a>  
                            <a href="logout.php"><i class="fa fa-sign-out"> Sign Out</i></a>  
                        </div>
                    </div><!--panel-body  -->
                </div><!--panel panel-default sidebar-menu  -->
            </div><!-- col-md-3 End-->

            <div class="col-md-9"><!-- col-md-9 -->
                <div class="box">
                    <h3 class="accAdd">MANAGE ACCOUNT</h3>
                </div>
                <div class="row"><!-- box-->
                    <div class="col-md-4 col-md-6 center-responsive"><!-- col-md-4 col-md-6 center-responsive-->

                        <div id="error_messageAcc"></div>
                        <div class="profile-details">
                        <?php

                            $result = mysqli_query($conn, "select * from users where email = '$getEmail'") or die("Unable to read data");
                            
                            $resultCheck = mysqli_num_rows($result);

                            if ($resultCheck > 0)
                            {
                                $row=mysqli_fetch_assoc($result);
                        ?>
                            <img id="userDP" src="images/users/<?php echo $row['profPic'] ?>">
                            <form class="myForm" action="accountValidation.php" onsubmit="return accountValidation()" method="POST">
                                <label id="theLabel" for="Username">Name</label>
                                <input type="text" placeholder="User Name" id="Username" name="Username" value="<?php echo $row['name'] ?>">

                                <label id="theLabel" for="Surname">Surname</label>
                                <input type="text" placeholder="Surname" id="lastname" name="lastname" value="<?php echo $row['surname'] ?>">

                                <label id="theLabel" for="email">Email</label>
                                <input type="email" placeholder="User@email.com" id="email" name="email" value="<?php echo $row['email'] ?>" readonly>
                                
                                <label id="theLabel" for="Phone">Phone</label>
                                <input type="phone" placeholder="xxx xxx xxxx" id="phone" name="phone" value="<?php echo $row['phone'] ?>">
                                
                                <label id="theLabel" for="Phone">Address</label>
                                <textarea placeholder="Address" type="text" name="address" id="address"><?php echo $row['address'] ?></textarea>

                                <label id="theLabel" for="Password">Password</label>
                                <input type="password" placeholder="P@ssword1" id="password" name="password" value="<?php echo $row['password'] ?>">

                                <label id="theLabel" for="Password">Confirm Password</label>
                                <input type="password" placeholder="P@ssword2" id="password2" name="password2">

                                <br>
                                <input type="file"  name="profileImage"id="profileImage" >

                                <button type="submit" name="update" value="Update Profile" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update Profile
                                </button>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                        
                    </div><!-- col-md-4 col-md-6 center-responsive-->
                </div><!-- box End-->
            </div><!-- col-md-9 End-->

        </div><!--container  End-->
    </div><!-- content End-->

    <div id="introductionBoxes"><!--Boxes that contain some store details-->
    
        <div class="introductionBoxesContainer"><!--Container for the boxes-->
        
            <div class="same-height-row"><!--Standard height of rows-->
            
                <div class="col-sm-3">
                
                    <div class="box same-height"><!--Standard height of Boxes-->
                    
                        <div class="icon"><!--Icons-->

                            <i class="fa fa-thumbs-up"></i>
                        
                        </div><!--Icons end-->

                        <h3> <a href="#">Guarenteed Customer Satisfaction</a></h3>
                        <p>Customer is always right in our store and we aim to impress</p>

                    </div><!--Standard height of Boxes end-->   

                </div>

                <div class="col-sm-3">
                
                    <div class="box same-height"><!--Standard height of Boxes-->
                    
                        <div class="icon"><!--Icons-->

                            <i class="fa fa-truck"></i>
                        
                        </div><!--Icons end-->

                        <h3> <a href="#">Nation wide Delivery</a></h3>
                        <p>We delievr all over SA</p>

                    </div><!--Standard height of Boxes end-->   

                </div>

                <div class="col-sm-3">
                
                    <div class="box same-height"><!--Standard height of Boxes-->
                    
                        <div class="icon"><!--Icons-->

                            <i class="fa fa-money"></i>
                        
                        </div><!--Icons end-->

                        <h3> <a href="#">100% Money back Guarenteed</a></h3>
                        <p>Full refund if you not happy within first 30 days of purchase</p>

                    </div><!--Standard height of Boxes end-->   

                </div>

                <div class="col-sm-3">
                
                    <div class="box same-height"><!--Standard height of Boxes-->
                    
                        <div class="icon"><!--Icons-->

                            <i class="fa fa-refresh"></i>
                        
                        </div><!--Icons end-->

                        <h3> <a href="#">free delivery for new account holders and on orders over R250</a></h3>
                        <p>New customers receive free delivery and returning customers get free delivery on orders over R250</p>

                    </div><!--Standard height of Boxes end-->   

                </div>

            </div><!--Standard height of rows end-->

        </div><!--Container for the boxes end-->

    </div><!--Boxes that contain some store details End-->
    
    <div id="bottom-footer"><!--Footer -->

        <div class="footerContainer"><!--footerContainer -->

            <div class="row"><!--Row -->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 -->

                    <h4>Shop</h4>

                    <ul>
                        <li> <a href="Trolley.php">Trolley</a></li>
                        <li> <a href="#mainNavBar">Shop</a></li>
                        <li> <a href="Account.php">Account</a></li>
                        <li> <a href="About.php">About</a></li>
                    </ul>

                </div><!--col-sm-6 col-md-3 End-->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 -->
                
                    <h4>Customer</h4>

                    <ul>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="Login.php">Login</a></li>
                    </ul>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div><!--col-sm-6 col-md-3 End-->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 -->
                
                    <h4>About</h4>

                    <p>

                        <strong>Tennis Joint</strong>
                        <br/>Durbanville
                        <br/>Cape Town
                        <br/>Western Cape
                        <br/>021-858-3658
                        <br/>tennisJoint@tjj.co.za

                    </p>

                    <a href="About.php">Contact Us</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div><!--col-sm-6 col-md-3 End-->

                <div class="col-sm-6 col-md-3"><!--col-sm-6 col-md-3 -->
                    <h4>Social</h4>

                    <p class="social">
                        <a href="" class="fa fa-instagram"></a>
                        <a href="" class="fa fa-facebook"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-envelope"></a>
                    </p>

                </div><!--col-sm-6 col-md-3 End-->

            </div><!--Row End -->

        </div><!--footerContainer End-->

    </div><!--Footer End-->

    <!-- <script src="scripts/validationScript.js"></script> -->
    <script src="scripts/accountValidation.js"></script>
   
</body>
</html>