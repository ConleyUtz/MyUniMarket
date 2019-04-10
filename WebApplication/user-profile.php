<?php
    include 'DatabaseConnection.php';
    $dbConnection = DatabaseConnection::getInstance()->getConnection();
    session_start();
    $userID = "";
    $user = $_SESSION['profileName'];
    $query = "SELECT * FROM users WHERE `username` = '".$user."'";
    if($rslt = mysqli_query($dbConnection, $query)){
        $row1 = mysqli_fetch_array($rslt);
        $userID = $row1['userId'];
    }
    echo '<h1>This is the profile page of <span style="color:red">'.$user.'</span></h1><h3>These are their listings:</h3>';
    $query = "SELECT * FROM items WHERE `userId` = ".$userID;
    if($result = mysqli_query($dbConnection, $query)){
        $num = mysqli_num_rows($result);
        if($num > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $query = "SELECT username FROM users WHERE `userId` = '".$row['userId']."'";
                    if($rslt = mysqli_query($dbConnection, $query)){
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
                                By: <a href="#">'.$usr.'</a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <p>'.$row['description'].'</p>
                        </div><!-- product detail /-->
    
                        <div class="product-detail">
                                <p>Location: '.$row['location'].'</p>
                            </div><!-- product location /-->
    
                        <div class="cart-menu">
                        </div><!-- product buttons /-->
                    </div><!-- product meta /-->
                </div>
            </div><!-- Product /-->';
            }
        }
    }
    if(isset($_POST['contactUser'])){
        $query = "SELECT email FROM users WHERE `username` = '".$_POST['userName']."' AND `isConfirmed` = true";
        if($result = mysqli_query($dbConnection, $query)){
            $row = mysqli_fetch_array($result);
            $_SESSION['toEmail'] = $row['email'];
            header("Location: send_email.php");
        }
    }