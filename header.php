<!DOCTYPE html>
<?php
include "dbconnect.php";
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> 9988776655</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> dyne@email.com</a></li>
                    <!-- <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li> -->
                </ul>
                <ul class="header-links pull-right">
                    <!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> -->
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <!-- <img src="./img/logo.png" alt=""> -->
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="index.php?prd_id=0&del_id=0" method="get">
                                <!-- <select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
                                    </select> -->

                                <input class="input" type="text" placeholder="Search here" name='query'>

                                <input type="submit" class='search-btn' name="search" value="search" />

                                <!-- <a href='index.php?search=none' type="button"  class="search-btn">Search</a> -->





                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <!-- <div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a> -->
                            <!-- </div> -->
                            <!-- /Wishlist -->



                            <!-- Cart -->
                            <?php

                       

                            $ip_add = getUserIpAddr();
                            if (empty($_GET['prd_id'])) {
                                $prd_id = 0;
                            }
                            else{
                                $prd_id = $_GET['prd_id'];

                            }
                            if (empty($_GET['del_id'])) {

                                $del_id = 0;
                            }
                            else{
                                $del_id = $_GET['del_id'];
                            }
                           

                         

                            if ($del_id <> 0) {



                                $delete_query = "DELETE FROM cart WHERE p_id=$del_id";
                                $delete = mysqli_query($con, $delete_query);
                            }

                            if ($prd_id <> 0) {

                                $ip_add = getUserIpAddr();

                                $add_to_card_query =
                                    "INSERT INTO cart VALUES('$prd_id','$ip_add','1')";
                                $add_to_cart = mysqli_query($con, $add_to_card_query);
                            }





                            $cart_count_query = "SELECT count(*) FROM `cart` where ip_add='$ip_add'";
                            $count_result = mysqli_query($con, $cart_count_query);
                            $count = mysqli_fetch_array($count_result);

                            $number = $count[0];



                            ?>







                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty"><?php echo "$number" ?></div>
                                </a>


                                <div class="cart-dropdown">
                                    <div class="cart-list">


                                        <?php
                                        // include "index.php";
                                        $total = 0;
                                        $ip_add = getUserIpAddr();
                                        function getUserIpAddr()
                                        {
                                            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                                                //ip from share internet
                                                $ip = $_SERVER['HTTP_CLIENT_IP'];
                                            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                                //ip pass from proxy
                                                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                                            } else {
                                                $ip = $_SERVER['REMOTE_ADDR'];
                                            }
                                            return $ip;
                                        }






                                        if ($number > 0) {

                                            $fetch_cart_data = "SELECT * FROM `products` INNER JOIN cart on products.prd_id=cart.p_id AND cart.ip_add='$ip_add' LEFT JOIN categories on products.prd_cat=categories.cat_id";
                                            $fetch_cart_result = mysqli_query($con, $fetch_cart_data);
                                            while ($cart = mysqli_fetch_assoc($fetch_cart_result)) {
                                                $prd_img = $cart['prd_img'];
                                                $prd_title = $cart['prd_title'];
                                                $prd_price = $cart['prd_price'];
                                                $prd_id = $cart['prd_id'];
                                                $total = $total + $prd_price;


                                        ?>





                                                <div class="product-widget">
                                                    <div class="product-img">
                                                        <img src="./img/<?php echo "$prd_img" ?>" alt="">
                                                    </div>
                                                    <div class="product-body">
                                                        <h3 class="product-name"><a href="#"><?php echo "$prd_title" ?></a></h3>
                                                        <h4 class="product-price"><span class="qty">1x</span><?php echo "₹. ";
                                                                                                                echo "$prd_price"; ?></h4>
                                                    </div>

                                                    <form action="" method="POST">

                                                        <button class="delete" name="delete" formaction="?del_id=<?php echo $prd_id ?>& action='delete' & cat_id=1 & prd_id=0"><i class="fa fa-close"></i></button>
                                                    </form>






                                                </div>





                                            <?php
                                            }
                                            ?>





                                        <?php
                                        }
                                        ?>



                                        <!-- 
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div> -->





                                    </div>
                                    <div class="cart-summary">
                                        <small><?php echo $number ?> Item(s) selected</small>
                                        <h5>SUBTOTAL: <?php echo "₹. ";
                                                        echo $total; ?></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="">View Cart</a>
                                        <a href='checkout.php'>Checkout <i class="fa fa-arrow-circle-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <!-- for select category -->
                <?php


                $cat = "SELECT * FROM categories";

                $result = mysqli_query($con, $cat);
                while ($row = mysqli_fetch_assoc($result)) {

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                ?>

                    <ul class="main-nav nav navbar-nav">
                        <li><a href='index.php?cat_id=<?php echo $cat_id; ?>& prd_id=0 & del_id=0'><?php echo $cat_title; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
                    </ul>
                <?php
                }
                ?>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
</body>

</html>