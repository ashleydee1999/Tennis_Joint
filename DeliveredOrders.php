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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font_awsome/css/font_awesome.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider/lightslider.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="scripts/bootstrap-337.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            Orders
        </li>
    </ul><!-- breadcrumb of the Page Ends-->

    <div id="content"><!--content  -->
        <div class="container"><!--container  -->
            <div id="trolley" class="col-md-9"><!--Trolley  -->

                <div class="box"><!--box  -->
                    <form action="Trolley.php" method="post" enctype="multipart/form-data"><!--Form  -->
                
                        <h1 class="text-muted" ><?php echo $getEmail; ?>'s Delivered</h1>
                        <div class="table-responsive"><!--table-responsive  -->
                            
                            <table class="table"><!--table  -->
                                <thead><!--thead ends  -->
                                    <tr><!--tr  -->
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                    </tr><!--tr Ends  -->
                                </thead><!-- thead Ends -->
                                <?php

                                    $conn = new mysqli($host, $user, $pass, $db);

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $result = mysqli_query($conn, "select distinct theTable from trolley where customerEmail = '$getEmail'") or die(mysqli_error($conn));
                                    $resultCheck = mysqli_num_rows($result);

                                    $myTable=array();

                                    if ($resultCheck > 0)
                                    {
                                        while ($CartProducts=mysqli_fetch_array($result))
                                        {
                                            $myTable[]=$CartProducts['theTable'];
                                        }
                                        foreach($myTable as $value)
                                        {
                                            $sql2 = "SELECT trolley.idProducts, trolley.customerEmail, trolley.quantity, trolley.size,  $value.idProducts,  $value.picture,  $value.name,  $value.price from trolley INNER JOIN $value on  $value.idProducts=trolley.idProducts inner join users on users.email= trolley.customerEmail where trolley.customerEmail='$getEmail' and trolley.orderStatus='processed'";

                                            $result2 = mysqli_query($conn, $sql2 ) or die(mysqli_error($conn));
        
                                            $resultCheck2 = mysqli_num_rows($result2);
        
                                            if ($resultCheck2 > 0)
                                            {
                                                while ($myProducts=mysqli_fetch_array($result2))
                                                {
                                                    echo '
                                                    <tbody><!-- tbody details of product in trolley -->
                                                        <tr>
                                                            <td>
                                                                <img src="images/'.$value.'/'.$myProducts['picture'].'" alt="">
                                                            </td>
                                                            <td>
                                                            <a href="#">'.$myProducts['name'].'</a>
                                                            </td>
                                                            <td>
                                                                <input id="trolleyPriceInputBox" class="inputQuantity" value= "'.$myProducts['quantity'].'" readonly/>
                                                            </td>
                                                            <td>
                                                                <input id="trolleyPriceInputBox" class="inputtotal" value= "'.$myProducts['price'].'" readonly/>
                                                            </td>
                                                            <td>
                                                            '.$myProducts['size'].'
                                                            </td>
                                                        </tr>
                                                    </tbody><!-- tbody details of product in trolley Ends -->';
                                                }
                                            }
                                        }
                                    }
                                
                                ?>
                               
                                 <tfoot><!--tfoot with total cost  -->
                                    <tr>
                                        <th colspan="3">Total</th>
                                        <th><input class="trolleyPriceInputBox" id="total" readonly></th>
                                    </tr>
                                </tfoot><!--tfoot with total cost  --> 
                            </table><!-- table end -->   

                        </div><!--table-responsive  -->
                    </form><!-- Form -->
                </div><!-- box -->

            </div><!--Trolley End -->

            <div class="col-md-3"><!--col-md-3  -->
                <div id="order-summary" class="box"><!--box  -->

                    <div class="box-header"><!--box header-->
                        <h3>Order Summary</h3>
                    </div><!--box  header-->
                    <p class="text-muted">
                        Shipping costs subject to your order and distance
                    </p>

                    <div class="table-responsive"><!--table-responsive  -->
                        <table class="table"><!-- table -->
                            <tbody><!-- tbody -->
                                <tr><!--tr -->
                                    <td>Order Sub-Total</td>
                                    <th><input class="trolleyPriceInputBox" id="total2" readonly/></th>
                                </tr><!-- tr ends -->
                                <tr>
                                    <td>Shipping</td>
                                    <td><input class="trolleyPriceInputBox" id="shipping" readonly/></td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td><input class="trolleyPriceInputBox" id="theTax" readonly/></td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th><input class="trolleyPriceInputBox" id="finalTotal" readonly/></th>
                                </tr>
                            </tbody><!-- tbody ends -->
                        </table><!--table ends  -->

                        <script>
                            var theTotal = 0;
                            $(".inputtotal").each(function ()
                            {
                                var subTotal=0;
                                var thePrice=parseInt($(this).val());;
                                $(".inputQuantity").each(function ()
                                {
                                    subTotal= thePrice * parseInt($(this).val());
                                });
                                theTotal += subTotal;
                            });
                            $("#total").val("R"+theTotal);
                            $("#total").prop("readonly");
                            $("#total2").val(theTotal);

                            var shipping=theTotal*0.05;
                            $("#shipping").val(parseFloat(shipping).toFixed(2));

                            var tax=theTotal*0.1;
                            $("#theTax").val(parseFloat(tax).toFixed(2));

                            var finalTotal=theTotal+tax+shipping;
                            $("#finalTotal").val("R"+parseFloat(finalTotal).toFixed(2)); 
                        </script>

                    </div><!--table-responsive ends  -->

                </div><!--box end  -->
            </div><!--col-md-3  end-->

        </div><!--container Ends  -->
    </div><!--content End  -->

    </div><!--Trolley End -->
        </div><!--container Ends  -->
    </div><!--content End  -->
    
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

</body>
</html>