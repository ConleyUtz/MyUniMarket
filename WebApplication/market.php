<?php
    session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
                    <a href="logout.php" class="button primary" title="SIGN OUT">SIGN OUT</a>
                </div>
            </div>
        </div>
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

            <div class="row">
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="disabled">Gene Splicing</li>
                        <li>
                            <span class="show-for-sr">Current: </span> Cloning
                        </li>
                    </ul>
                </div><!-- breadcrumbs /-->
            </div><!-- Row ends /-->

            <!-- customer content -->
            <div class="store-content">
                <div class="row">

                    <!-- store sidebar -->
                    <div class="sidebar store-sidebar medium-3 small-12 columns">

                        <div class="widget">
                            <h2>Related Categors</h2>
                            <div class="widget-content">
                                <ul class="menu vertical">
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Party Wear</a></li>
                                    <li><a href="#">Sports Wear</a></li>
                                </ul>
                            </div><!-- widget content /-->
                        </div><!-- widget /-->

                        <div class="widget shop-filter">
                            <h2>Filters</h2>
                            <div class="widget-content">
                                <label>
                                    Top Rated <input type="checkbox" />
                                </label>
                                <label>
                                    Sale Items <input type="checkbox" />
                                </label>
                                <div>
                                    <span>Price</span> <input type="text" placeholder="min" />
                                    <span>- </span>
                                    <input type="text" placeholder="max" />
                                    <div class="clearfix"></div>
                                </div>
                                <input type="button" class="button secondary" value="Apply" />
                            </div><!-- widget content /-->
                        </div><!-- widget /-->

                        <div class="widget">
                            <h2>Trending</h2>
                            <div class="widget-content">

                                <div class="popular-product">
                                    <img alt="" src="images/help/product1-1.jpg" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- popular product /-->

                                <div class="popular-product">
                                    <img alt="" src="images/help/product4-1.jpg" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- popular product /-->

                                <div class="popular-product">
                                    <img alt="" src="images/help/product3-1.jpg" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- popular product /-->

                                <div class="popular-product">
                                    <img alt="" src="images/help/product2-1.jpg" class="float-left thumbnail" />
                                    <div class="float-right product-description">
                                        <a href="#">Red hot skirt with laces</a>
                                        <div class="price">$22</div>
                                        <div class="pro-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star off"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- popular product /-->

                            </div><!-- widget content /-->
                        </div><!-- widget /-->

                        <div class="widget store-widget">
                            <h2>Featured Store</h2>

                            <div class="widget-content">
                                <a href="#">
                                    <img alt="" src="images/help/store1.jpg" />
                                </a>
                                <h4><a href="#">Fajar Accessories & Fashion Store</a></h4>
                                <div class="store-reputation">
                                    <div class="pro-rating float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star off"></i>
                                    </div>
                                    <span>230 reviews</span>
                                </div><!-- Store reputation /-->
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 25 Birmingham, USA</p>
                            </div><!-- widget content /-->

                        </div><!-- widget ends /-->

                    </div>
                    <!-- store sidebar Ends /-->

                    <!-- Store Content -->
                    <div class="medium-9 small-12 columns store-content">
                        <div class="product-filter">
                            <div class="grid-filter medium-4 small-5 columns">
                                <a class="active" href="shop.html"><i class="fa fa-th-large"></i></a>
                                <a href="list-shop.html"><i class="fa fa-list"></i></a>
                            </div>

                            <div class="medium-4 small-7 columns byview">
                                <div class="float-center">
                                    <em>View:</em>
                                    <form>
                                        <select name="ppp">
                                            <option value="6">06</option>
                                            <option selected="" value="9">09</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div class="medium-4 small-12 columns sortby">
                                <div class="pull-right">
                                    <form method="get">
                                        <em>Sort by:</em>
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- product filter /-->

                        <div class="products-wrap">
                            <div class="product list-product small-12 columns">
                                <div class="medium-4 small-12 columns product-image">
                                    <div class="sale-tag">Sale</div>
                                    <a href="single-product.html">
                                        <img src="images/help/product1-1.jpg" alt="" />
                                        <img src="images/help/product1-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
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
                                        <img src="images/help/productm1-1.jpg" alt="" />
                                        <img src="images/help/productm1-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
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
                                        <img src="images/help/product5-1.jpg" alt="" />
                                        <img src="images/help/product5-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
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
                                        <img src="images/help/product4-1.jpg" alt="" />
                                        <img src="images/help/product4-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
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
                                        <img src="images/help/product3-1.jpg" alt="" />
                                        <img src="images/help/product3-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
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
                                    <div class="sale-tag">Sale</div>
                                    <a href="single-product.html">
                                        <img src="images/help/product2-1.jpg" alt="" />
                                        <img src="images/help/product2-2.jpg" alt="" />
                                    </a>
                                </div><!-- Product Image /-->
                                <div class="medium-8 small-12 columns">
                                    <div class="product-title">
                                        <a href="single-product.html">Small shirt dress with small laces</a>
                                    </div><!-- product title /-->
                                    <div class="product-meta">
                                        <div class="prices">
                                            <span class="price">$234</span> / Piece
                                            <span class="sale-price">$333</span>
                                        </div>
                                        <div class="last-row">
                                            <div class="pro-rating float-left">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star off"></i>
                                            </div>
                                            <div class="store float-right">
                                                By: <a href="store-front.html">Fajar Accessories</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div><!-- last row /-->

                                        <div class="product-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div><!-- product detail /-->

                                        <div class="cart-menu">
                                            <ul class="menu">
                                                <li><a href="#" class="button primary" title="Add to cart">Add to Cart</a></li>
                                                <li><a href="#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>

                                            </ul>
                                        </div><!-- product buttons /-->

                                    </div><!-- product meta /-->
                                </div>
                            </div><!-- Product /-->

                            <div class="clearfix"></div>
                        </div><!-- products wrap /-->

                        <!-- pagination starts -->
                        <div class="pagination-container">
                            <ul class="pagination" role="menubar" aria-label="Pagination">
                                <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
                                <li class="current"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
                                <li><a href="">12</a></li>
                                <li><a href="">13</a></li>
                                <li class="arrow"><a href="">Next &raquo;</a></li>
                            </ul>
                        </div>
                        <!-- Pagination Ends -->

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