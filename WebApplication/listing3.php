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
    $query = "SELECT * FROM items WHERE `category` = 3 AND `isSold` = 0";

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
?>