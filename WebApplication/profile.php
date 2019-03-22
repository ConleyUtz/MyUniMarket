<?php

    session_start();
    $userID = "";
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

   $user = $_SESSION['profileName'];

   $query = "SELECT * FROM users WHERE `username` = '".$user."'";

   if($rslt = mysqli_query($link, $query)){

    $row1 = mysqli_fetch_array($rslt);
    $userID = $row1['userId'];
    }

   echo '
   
   <h1>This is the profile page of <span style="color:red">'.$user.'</span></h1>

   <h3>These are their listings:</h3>

   ';

   //? Getting the whole table from MySQL database
$query = "SELECT * FROM items WHERE `userId` = ".$userID;

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

                    <form method="post">
                        Enter your email here: <input type="text" name="senderEmail">
                        <input type="submit" name="contactUser" value="Send Contact Request" class="button primary" id="userProf" />
                    </form>

                    </div><!-- product buttons /-->

                </div><!-- product meta /-->
            </div>
        </div><!-- Product /-->'; 
        }
    }
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
        header("Location: send_email.php");
    }
}

?>