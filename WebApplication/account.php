<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="./js/logoutSuccess.js" type="text/javascript"></script>

    <title>MyUniMarket - Account</title>

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

<body>
    <!-- MAIN Container Start here. -->
    <div class="container">

        <div class="top-info-bar">
            <div class="row">
                <div class="logo float-left">
                    <img alt="" src="../ImageFiles/MyUniMarket.png" />
                </div><!-- Logo /-->
                <div class="medium-6 small-12 columns hide-for-small-only">

                </div><!-- Right Ends /-->

            </div><!-- row /-->
        </div>

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
                        <h1>Account Page - Your Listings</h1>
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
        </div>
        <!-- customer content -->
        <div class="customer-content module">
            <div class="row">
                <div class="medium-3 small-12 columns">
                    <div class="widget">
                        <h2>Quick links</h2>
                        <div class="widget-content">
                            <ul class="vertical menu">
                                <li><a href="#">My Listings</a></li>
                                <li><a href="404.php">Bookmarked Items</a></li>
                                <li><a href="account2.php">Account Settings</a></li>
                            </ul>
                        </div><!-- widget content /-->
                    </div><!-- widget /-->
                </div><!-- left column /-->
                <div class="medium-9 small-12 columns">
                    <div class="general-info dashboard-module">
                        <div class="float-left user-thumb">
                            <img alt="" src="images/help/user_thumb.jpg" />
                        </div><!-- user thumb /-->
                        <div class="user-detail float-left">
                            <h4>Conley Utz</h4>
                            <div class="pro-rating float-left">
                            </div>
                            <a href="#">User Since: 2/5/2019</a></a>
                        </div><!-- user detail /-->
                        <div class="clearfix"></div>
                        <br>
                    </div><!-- general info ends /-->

                    <!-- Information Boxes -->
                    <div class="general-info dashboard-module">

                        <!-- Store Content -->
                        <div class="products-wrap">
                            <div class="product list-product small-12 columns">
                                <div class="medium-4 small-12 columns product-image">
                                    <a href="single-product.html">
                                        <img src="../ImageFiles/ProductImages/Image1.jpg" alt="" />
                                        <img src="../ImageFiles/ProductImages/Image1.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">CS 354 - Textbook</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$50</span>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Conley Utz</a>
                                            </div>
                                        </div>

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Contact Owner</a></li>
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>

                                            </ul>
                                        </div><!-- product buttons /-->

                                    </div><!-- product meta /-->
                                </div>
                            </div><!-- Product /-->

                            <div class="product list-product small-12 columns">
                                <div class="medium-4 small-12 columns product-image">
                                    <a href="single-product.html">
                                        <img src="../ImageFiles/ProductImages/Image2.jpg" alt="" />
                                        <img src="../ImageFiles/ProductImages/Image2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Amazon Echo Dot</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$30</span>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Conley Utz</a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->
                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Contact Owner</a></li>
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
                                            </ul>
                                        </div> <!-- product buttons /-->
                                    </div> <!-- product meta /-->
                                </div>
                            </div><!-- Product /-->
                            <div class="clearfix"></div>
                        </div><!-- products wrap /-->
                    </div> <!-- store content /-->
                </div> <!-- right ends /-->
            </div> <!-- Row /-->
        </div> <!-- customer content /-->

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
