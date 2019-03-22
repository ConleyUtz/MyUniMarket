<?php

    //? Checking for session
    session_start();
    $testerID = "";
    if(!$_SESSION['email']){

        header('Location: signin.php'); 
    }
    else{

        $testerID = $_SESSION['email'];
    }

    if(isset($_POST['userProfile'])){

        $_SESSION['profileName'] = $_POST['userName'];
        header("Location: profile.php");
    }

    if(isset($_POST['contactUser'])){

        $host = "localhost";
        $uname = "root";
        $pwd = "";
        $database = "my_uni_market";

        $link = mysqli_connect($host, $uname, $pwd, $database);

        if(mysqli_connect_error()){
            exit("There was an error connecting to the database");
        }else{
            //echo "Database connection successful!";
        }

        $query = "SELECT email FROM users WHERE `username` = '".$_POST['userName']."' AND `isConfirmed` = true";

        if($result = mysqli_query($link, $query)){

            $row = mysqli_fetch_array($result);
            $_SESSION['toEmail'] = $row['email'];
            $_SESSION['fromEmail'] = $_POST['senderEmail'];
        }
        
        header("Location: send_email.php");
    }

    
?>


<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="./js/logoutSuccess.js" type="text/javascript"></script>

    <title>MyUniMarket - Market</title>

    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />

    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />

    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />

    <!-- FlatIcon set -->
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css" media="all" />

    <!-- OWL Crousel CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700" rel="stylesheet" type="text/css" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62711679-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body class="inner-page">
    <!-- MAIN Container Start here. -->
    <div class="container">

        <!-- Top Bar Starts Here -->
        <div class="top-info-bar">
            <div class="row">
                <div class="logo float-left">
                    <img alt="" src="../ImageFiles/MyUniMarket.png" />
                </div><!-- Logo /-->
            </div><!-- Right Ends /-->
        </div>
        <!-- top Bar Ends here /-->

        <!-- Header Starts -->
        <div class="header">
            <div class="row">
                <div class="float-right">
                    <a href="account.php" class="button primary" title="Account">Account</a>
                    <a href="logout.php" id="logout" class="button primary" title="SIGN OUT">SIGN OUT</a>
                </div>
            </div>
        </div>

        <script tpye="text/javascript">
            logoutSuccess('logout');
        </script>

        <!-- Header Ends /-->
        <div class="content-container module">
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>List Shop</h1>
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
            <!-- Title Section End -->

            <div class="row">
                <div class = "medium-3 small-12 columns">
            <a href="create.php" class="button primary" title="Create Post">Create Post</a>
        </div>

            <div class="medium-9 small-12 columns search-wrap">
            	<div class="main-search-form">
                	<input type="text" placeholder="What you are shopping for ..." />
                    <select>
                    	<option value="0">All Categories</option>
                        <option value="1">Women's Clothing &amp; Accessories</option>
                        <option value="2">Men's Clothing &amp; Accessories</option>
                        <option value="0">Phones &amp; Telecommunications</option>
                        <option value="0">Computer &amp; Office</option>
                        <option value="0">Consumer Electronics</option>
                        <option value="0">Jewelry &amp; Accessories</option>
                        <option value="0">Home &amp; Garden</option>
                        <option value="0">Luggage &amp; Bags</option>
                        <option value="0">Shoes</option>
                        <option value="0">Mother &amp; Kids</option>
                        <option value="0">Sports &amp; Entertainment</option>
                        <option value="0">Health &amp; Beauty</option>
                        <option value="0">Watches</option>
                        <option value="0">Toys &amp; Hobbies</option>
                        <option value="0">Weddings &amp; Events</option>
                        <option value="0">Novelty &amp; Special Use</option>
                        <option value="0">Automobiles &amp; Motorcycles</option>
                        <option value="0">Lights &amp; Lighting</option>
                        <option value="0">Furniture</option>
                        <option value="0">Industry &amp; Business</option>
                        <option value="0">Electronic Components &amp; Supplies</option>
                        <option value="0">Office &amp; School Supplies</option>
                        <option value="0">Electrical Equipment &amp; Supplies</option>
                        <option value="0">Gifts &amp; Crafts</option>
                        <option value="0">Home Improvement</option>
                        <option value="0">Food</option>
                        <option value="0">Travel and Coupons</option>
                        <option value="0">Security &amp; Protection</option>
                        <option value="0">In All Categories</option>
                    </select>
                    <button type="submit" class="primary button"><i class="fa fa-search"></i></button>
                </div><!-- main search form /-->
            </div><!-- Second Column /-->
        </div>

            <br>

            <!-- customer content -->
            <div class="store-content">
                <div class="row">

                    <!-- store sidebar -->
                    <div class="sidebar store-sidebar medium-3 small-12 columns">

                        <div class="widget">
                            <h2>Categories</h2>
                            <div class="widget-content">
                                <ul class="menu vertical">
                                    <li><a href="market1.php">Category 1</a></li>
                                    <li><a href="market2.php">Category 2</a></li>
                                    <li><a href="market3.php">Category 3</a></li>
                                    <li><a href="market4.php">Category 4</a></li>
                                    <li><a href="market5.php">Other</a></li>
                                </ul>
                                <a href="market.php"><input type="button" class="button secondary" value="Reset"/></a>
                            </div><!-- widget content /-->
                        </div><!-- widget /-->

                        <div class="widget shop-filter">
                            <h2>Filters</h2>
                            <div class="widget-content">
                                <div>
                                    <span>Price</span> <input type="text" placeholder="min" />
                                    <span>- </span>
                                    <input type="text" placeholder="max" />
                                    <div class="clearfix"></div>
                                </div>
                                <input type="button" class="button secondary" value="Apply" />
                            </div><!-- widget content /-->
                        </div><!-- widget /-->

                        

                    </div>
                    <!-- store sidebar Ends /-->

                    <!-- Store Content -->
                    <div class="medium-9 small-12 columns store-content">
                        <br>
                        <div class="products-wrap">
                            <!-- Mihir Shit-->
                            <?php require 'listing3.php';?>
                            <!-- Mihir Shit -->
                        </div><!-- products wrap /-->
                    </div>
                    <!-- store content /-->

                </div><!-- Row /-->
            </div>
            <!-- customer content /-->

        </div><!-- content container /-->

        <!-- Footer -->
        <div class="footer">
            <div class="footerbottom">
                <div class="row inner-padding">
                    <div class="medium-6 small-12 columns">
                        <div class="clearfix"></div>
                        <div class="copyrightinfo">2019 © <a href="#">MyUniMarket</a> All Rights Reserved.</div>
                    </div>
                    <!--left side-->
                </div>
            </div>
        </div>
        <!--Footer Ends-->

    </div>
    <!-- MAIN Container Ends here. -->
    <!-- Page Preloader -->
    <div class="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
    </div>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <!-- Crousel JS -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- jQuery Timer plugin delete if not using -->
    <script src="js/jquery.simple.timer.js"></script>
    <!-- Webful JS -->
    <script src="js/webful.js"></script>
</body>

</html>
