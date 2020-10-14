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
            <a href="Home_Page.php">Home</a>
        </li>
        <li>
            Shop
        </li>
    </ul><!-- breadcrumb of the Page Ends-->

    <div class="content"><!-- Content  -->
        <div class="container" style="margin-left:500px;"><!-- Container  -->
            <div class="col-md-9"><!-- col-md-9 -->
                <div id="displayedProduct" class="row" ><!-- Main Product -->
                <?php
    
                   
                    if($_GET)
                    {
                        $prodID= $_GET['productID'];       
                        $tableName= $_GET['tableName'];
                        $Path= $_GET['Path'];        
                    }

                    $result = mysqli_query($conn, "select * from $tableName where idProducts = '$prodID'") or die("Unable to read data");
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        $row=mysqli_fetch_assoc($result);
                    }
                        
                ?>
                
                    <div class="col-sm-6" style="width:80%;"><!-- col-md-6 -->
                        <div id="prodImage"><!-- Primary Image -->
                            <div id="imageCarousel" class="carousel slide" data-ride="carousel"><!-- Image slide Carousel -->
                                <ol class="carousel-indicators">
                                    <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#imageCarousel" data-slide-to="1"></li>
                                    <li data-target="#imageCarousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner"><!-- Carousel Start -->
                                    <div class="item active">
                                        <center><img class="img-responsive" src="images/<?php echo $Path ?>/<?php echo $row['picture'] ?>" alt="pic1"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="images/<?php echo $Path ?>/<?php echo $row['picture2'] ?>" alt="pic2"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="images/<?php echo $Path ?>/<?php echo $row['picture3'] ?>" alt="pic3"></center>
                                    </div>
                                </div><!-- Carousel End -->

                                <a href="#imageCarousel" class="left carousel-control" data-slide="prev"><!--Previous image Carousel Start -->
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a><!--Previous image Carousel End -->

                                <a href="#imageCarousel" class="right carousel-control" data-slide="next"><!--Next image Carousel Start -->
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a><!--Next image Carousel End -->

                            </div><!-- Image Carousel Slide End-->
                        </div><!-- Primary Image End-->
                    </div><!-- col-md-6 End-->

                    <div id="carouselDisplayArea" class="col-sm-6" ><!-- col-md-6 heading-->
                        <div class="box"><!-- box -->
                            <h1 class="text-center" style="margin-left:100px; width:100%;"><?php echo $row['name'] ?> </h1>

                                <form action="addTrolley.php?productID=<?php echo $prodID ?>&tableName=<?php echo $tableName ?>&Path=<?php echo $Path ?>" class="form-horizontal" method="POST" id="infoForm"> <!-- Form-->
                                    <div class="form-group"><!-- form-group -->
                                        <label for="" class="col-md-5 control-label">Quantity</label>

                                        <div class="col-md-7"><!-- col-md-7 -->
                                            <select name="qnty" id="qnty" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><!-- col-md-7 End-->
                                    </div><!-- form-group End-->

                                    <div class="form-group"><!-- form-group For Product Size-->
                                        <label class="col-md-5 control-label">Size:</label>
                                        <div class="col-md-7">
                                            
                                            <select name="prodSize" id="prodSize" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCutomValidity('Please pick a size')">
                                                <option value="">Choose your size</option>
                                                <?php
                                                    $getOptions = mysqli_query($conn, "select size from $tableName where idProducts = '$prodID'") or die("Unable to read data");
                                                    $resultConfirm = mysqli_num_rows($getOptions);
                                
                                                    if ($resultConfirm > 0) 
                                                    {
                                                        while ($mySizes=mysqli_fetch_array($getOptions))
                                                        {
                                                            echo '<option value="'.$mySizes['size'].'">'.$mySizes['size'].'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div><!-- form-group For Product Size End-->

                                    <p class="prodPrice">R<?php echo $row['price'] ?></p>
                                    <p class="text-center buttons" style="margin-left:120px;"><button class="btn btn-primary i fa fa-shopping-cart">Add to Trolley</button></p>

                                </form><!-- Form End-->
                            
                        </div><!-- box End-->

                        <div class="row" id="thumbs"><!--Row-->
                        
                            <div class="col-xs-4"><!--col-xs-4-->
                            
                                <a data-target="#imageCarousel" data-slide-to="0" href="" class="thumb"><!--Thumb-->
                                    <img src="images/<?php echo $Path ?>/<?php echo $row['picture'] ?>" alt="Product 1" class="img-responsive">
                                </a><!--Thumb End-->
                            
                            </div><!--col-xs-4 End-->
                            <div class="col-xs-4"><!--col-xs-4-->
                            
                                <a data-target="#imageCarousel" data-slide-to="1" href="" class="thumb"><!--Thumb-->
                                    <img src="images/<?php echo $Path ?>/<?php echo $row['picture2'] ?>" alt="Product 2" class="img-responsive">
                                </a><!--Thumb End-->
                            
                            </div><!--col-xs-4 End-->
                            <div class="col-xs-4"><!--col-xs-4-->
                            
                                <a data-target="#imageCarousel" data-slide-to="2" href="" class="thumb"><!--Thumb-->
                                    <img src="images/<?php echo $Path ?>/<?php echo $row['picture3'] ?>" alt="Product 3" class="img-responsive">
                                </a><!--Thumb End-->
                            
                            </div><!--col-xs-4 End-->
                        
                        </div><!--Row End-->
                    </div><!-- col-md-6 heading End-->
                </div><!-- Main Product Ends-->
               
            </div><!-- col-md-9 End-->
        </div><!-- Container Ends -->
    </div><!-- Content  Ends -->


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

    <script src="scripts/validationScript.js"></script>
    <script src="scripts/slideshowScript.js"></script>
</body>
</html>