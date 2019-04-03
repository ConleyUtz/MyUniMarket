<?php

    //? Checking for session
    session_start();

    $testerID = "";
    $listings = "";
    //? Default Query
    $query = "SELECT * FROM items WHERE `isSold` = 0";

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

        $query = "SELECT email FROM users WHERE `username` = '".$_POST['userName']."'";

        if($result = mysqli_query($link, $query)){

            $row = mysqli_fetch_array($result);
            $_SESSION['toEmail'] = $row['email'];
            header("Location: send_email.php");
        }
    }

    //? Sorting By Category
    if(isset($_GET["name"])){


        if($_GET["name"] == "cat1"){

            $query = "SELECT * FROM items WHERE `category` = 1 AND `isSold` = 0";
        }
        else if($_GET["name"] == "cat2"){

            $query = "SELECT * FROM items WHERE `category` = 2 AND `isSold` = 0";
        }
        else if($_GET["name"] == "cat3"){
            
            $query = "SELECT * FROM items WHERE `category` = 3 AND `isSold` = 0";
        }
        else if($_GET["name"] == "cat4"){

            $query = "SELECT * FROM items WHERE `category` = 4 AND `isSold` = 0";
        }
        else if($_GET["name"] == "cat5"){

            $query = "SELECT * FROM items WHERE `category` = 5 AND `isSold` = 0";
        }
    }
    
    //? Final Dynamic Sorting
    if($query != ""){

        //? Connecting to the database
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

        if($result = mysqli_query($link, $query)){
        
            //? General loop
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    $query = "SELECT username FROM users WHERE `userId` = '".$row['userId']."'";

                    if($rslt = mysqli_query($link, $query)){

                    $row1 = mysqli_fetch_array($rslt);
                    $usr = $row1['username'];
                    }

                    //! PRICE FILTER MAYBE GOES HERE

                    $listings .= '<div class="product list-product small-12 columns">
                    <div class="medium-4 small-12 columns product-image">
                        <a href="single-product.html">
                            <img src="../ImageFiles/ProductImages/Image1.jpg" alt="" />
                            <img src="../ImageFiles/ProductImages/Image1.jpg" alt="" />
                        </a>
                    </div><!-- Product Image /-->
                    <div class="medium-8 small-12 columns">
                        <div class="product-title">
                            <a href="single-product.html">'.$row['name'].'</a>
                        </div><!-- product title /-->
                        <div class="product-meta">
                            <div class="prices">
                                <span class="price">'.$row['price'].'</span>
                                <div class="store float-right">
                                <form method="post">
                                By: <input type="submit" name="userProfile" value="'.$usr.'" class="button primary" id="userProf" />
                                <input  style="display:none;" type="text" name="userName" value="'.$usr.'">
                            </form>
                                </div>
                            </div>

                            <div class="product-detail">
                                <p>'.$row['description'].'</p>
                            </div><!-- product detail /-->

                            <div class="product-detail">
                                <p>Location: '.$row['location'].'</p>
                            </div><!-- product location /-->

                            <div class="cart-menu">
                            <form method="post">
                            Enter your email here: <input type="text" name="senderEmail">
                            <input type="submit" name="contactUser" value="Send Contact Request" class="button primary" id="userProf" />
                            <input  style="display:none;" type="text" name="userName" value="'.$usr.'">
                        </form>
                            </div><!-- product buttons /-->

                        </div><!-- product meta /-->
                    </div>
                </div><!-- Product /-->'; 
                }
            }
        }
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

            <div class="medium-6 small-12 columns search-wrap">
            	<div class="main-search-form">
                	<input type="text" placeholder="What you are shopping for ..." />
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

                    <form method="get">
                        <div class="widget">
                            <h2>Categories</h2>
                            <div class="widget-content">
                                <ul class="menu vertical">
                                    <li><a href="?name=cat1">Category 1</a></li>
                                    <li><a href="?name=cat2">Category 2</a></li>
                                    <li><a href="?name=cat3">Category 3</a></li>
                                    <li><a href="?name=cat4">Category 4</a></li>
                                    <li><a href="?name=cat5">Other</a></li>
                                </ul>
                                <a href="market.php"><input type="button" class="button secondary" value="Reset"/></a>
                            </div><!-- widget content /-->
                        </div><!-- widget /-->
                    </form>

                        <form method = "get" action="price_filter_session.php">
                            <div class="widget shop-filter">
                                <h2>Filters</h2>
                                <div class="widget-content">
                                    <div>
                                        <span>Price</span> <input type="text" placeholder="min" name="min"/>
                                        <span>- </span>
                                        <input type="text" placeholder="max" name="max"/>
                                        <div class="clearfix"></div>
                                    </div>
                                    <input type="submit" class="button secondary" value="Apply" />
                                </div><!-- widget content /-->
                            </div><!-- widget /-->
                        </form>

                        

                    </div>
                    <!-- store sidebar Ends /-->

                    <!-- Store Content -->
                    <div class="medium-9 small-12 columns store-content">
                        <br>
                        <div class="products-wrap">
                            <!-- Mihir Shit-->
                            <?php echo $listings; ?>
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
