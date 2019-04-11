<?php

    //? DB Connection
    include 'DatabaseConnection.php';

    //? Session start && variable
    session_start();
    $testerID = "";
    $ratingNum = 0;
    $ratingSum = 0;
    $listings = "";
    $totalRating = 0;

    //? Check session
    if(!$_SESSION['email']){

        header('Location: signin.php'); 
    }
      else{

        $testerID = $_SESSION['email'];
    }

      //? Database Connect
    $dbConnection = DatabaseConnection::getInstance()->getConnection();

    $user = $_SESSION['profileName'];

    $query = "SELECT * FROM users WHERE `username` = '".$user."'";

    if($rslt = mysqli_query($dbConnection, $query)){

        $row1 = mysqli_fetch_array($rslt);
        $userID = $row1['userId'];
    }

    //TODO HAS TO CHANGE FOR PROFILE PAGES
    $query = "SELECT * FROM users WHERE `userId` = '".$userID."'";

    if($result = mysqli_query($dbConnection, $query)){
    
        $row = mysqli_fetch_array($result);
    
        //? Setting rating calculation variables
        if($row['ratingAmount'] != 0){
    
            $ratingSum = $row['ratingTotal'];
            $ratingNum = $row['ratingAmount'];
        }
    }

    //? Getting the whole table from MySQL database
    $query = "SELECT * FROM items WHERE `userId` = ".$userID;

    if($result = mysqli_query($dbConnection, $query)){

        //? General loop
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                $query = "SELECT username FROM users WHERE `userId` = '".$row['userId']."'";

                if($rslt = mysqli_query($dbConnection, $query)){

                    $row1 = mysqli_fetch_array($rslt);
                    $usr = $row1['username'];
                }
            
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
                    <div class="medium-2 small-12 columns">
                    <ul class="menu">
                    <li><a href="?bookmark='.$row['itemId'].'" title="Add to bookmarks"><i class="fa fa-bookmark-o fa-2x"></i></a></li>
                    </ul>
                </div>
                    <div class="product-meta">
                        <div class="prices">
                            <span class="price">'.$row['price'].'</span>
                            <div class="store float-right">
                            <form method="post">
                            By: <input type="submit" name="userProfile" value="'.$usr.'" class="button primary" id="userProf" />
                            <input  style="display:none;" type="text" name="userName" value="'.$usr.'">
                            <input  style="display:none;" type="text" name="itemID" value="'.$row['itemId'].'">
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

    if(isset($_POST['ratingSubmit'])){

        //! Input field rating
        $newRating = $_POST['userRating'];

        //? Appendding the new rating
        $ratingNum++;
        $ratingSum += $newRating;

        //? Update the total rankings
        $query = "UPDATE users SET ratingTotal= ".$ratingSum.",ratingAmount= ".$ratingNum." WHERE `userId` = '".$userID."'";

        mysqli_query($dbConnection, $query);
        mysqli_close($dbConnection);
    }
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="./js/logoutSuccess.js" type="text/javascript"></script>
    <script type="text/javascript" src="./js/ratings.js"></script>
    <title>MyUniMarket - User</title>

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
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-62711679-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- MAIN Container Start here. -->
    <div class="container">

        <!-- Top Bar Starts Here -->
        <div class="top-info-bar">
            <div class="row">
                <div class="logo float-left">
                    <?php
                    echo  '<a href="market.php"><img src="../ImageFiles/MyUniMarket.png"  /></a>';
                    ?>
                </div>
                <!-- Logo /-->
            </div>
            <!-- Right Ends /-->
        </div>
        <!-- top Bar Ends here /-->

        <!-- Header Starts -->
        <div class="header">
            <div class="row">
                <div class="float-right">
                    <a href="account.php" class="button primary" title="Account">Account</a>
                    <input type="submit" value="Sign Out" id="logout" class="button primary" />
                </div>
            </div>
        </div>

        <script type="text/javascript">
            logoutSuccess('logout');
        </script>

        <!-- Header Ends /-->
        <div class="content-container module">

            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>User Page</h1>
                    </div>
                    <!-- title /-->
                </div>
                <!-- row /-->
            </div>
        </div>
        <!-- customer content -->
        <div class="customer-content module">
            <div class="row">
                <div class="medium-3 small-12 columns sidebar">
                    <div class="widget">
                        <h2>Insert Text Here</h2>
                        <div class="widget-content">
                            <strong>Bold Text Here</strong>
                            <p>Regular Text Here</p>
                        </div>
                        <!-- widget content /-->
                    </div>
                    <!-- widget ends -->
                </div>
                <!-- left column /-->
                <div class="medium-9 small-12 columns">
                    <div class="general-info dashboard-module">
                        <div class="float-left user-thumb">
                            <img alt="" src="images/help/user_thumb.jpg" />
                        </div>
                        <!-- user thumb /-->
                        <div class="user-detail float-left">
                            <h4><?php echo strtoupper($user); ?>'s Page</h4>
                            <div class="pro-rating float-left">
                                Rating Number: <?php echo $ratingNum.'<br>' ?>
                                Total Rating: <?php if($ratingNum != 0)
                                                        echo round($ratingSum/$ratingNum,2);
                                                    else
                                                        echo 0; ?>
                            </div>
                            <a href="#" class="button primary" title="Account" id="rate">Rate <?php echo strtoupper($user); ?></a>
                            <div id = "rateBlock" style="display:none;">
                            <form method="post">
                                <label>
                                    Select Rating
                                    <select name="userRating">
                                <option disabled value="0"> -- Select an rating -- </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option selected value="5">5</option>
                                    </select>
                                </label>
                                <input type="submit" name='ratingSubmit' class="button primary">
                            </form>
                            </div>
                            <script type="text/javascript">

                            ratings("rate","rateBlock");

                            </script>


                        </div>
                        <!-- user detail /-->
                        <div class="clearfix"></div>
                        <br>
                    </div>
                    <!-- general info ends /-->

                    <!-- Information Boxes -->
                    <div class="general-info dashboard-module">

                        <!-- Store Content -->
                        <div class="products-wrap">
                                <?php echo $listings; ?>
                                <!-- Loop Here -->
                                <div class="clearfix"></div>
                        </div>
                        <!-- products wrap /-->
                    </div>
                    <!-- store content /-->
                </div>
                <!-- right ends /-->
            </div>
            <!-- Row /-->
        </div>
        <!-- customer content /-->

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
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
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