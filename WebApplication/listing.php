 <?php

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

    //? Getting the whole table from MySQL database
    $query = "SELECT * FROM items";

    if($result = mysqli_query($link, $query)){
    
        //? General loop
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                
                echo '<div class="product list-product small-12 columns">
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
                                By: <a href="store-front.html">Conley Utz -!!!THERE IS NO FIELD FOR THIS IN DB. ADDITIONAL QUERY REQUIRED!!!-</a>
                            </div>
                        </div>

                        <div class="product-detail">
                            <p>'.$row['description'].'</p>
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
            </div><!-- Product /-->'; 
            }
        }
    }
?>