<?php
    $userID = "";
    $query = "SELECT userId FROM users WHERE `email` = '".$_SESSION['email']."'";
    if($result = mysqli_query($dbConnection, $query)){
      $row = mysqli_fetch_array($result);
      $userID = $row['userId'];
    }
    $query = "SELECT * FROM items WHERE `userId` = ".$userID;
    if($result = mysqli_query($dbConnection, $query)){
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $query = "SELECT username FROM users WHERE `userId` = '".$row['userId']."'";
                    if($result2 = mysqli_query($dbConnection, $query)){
                        $row2 = mysqli_fetch_array($result2);
                        $user = $row2['username'];
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
                                    By: <a href="store-front.html">'.$user.'</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="product-detail">
                            <p>'.$row['description'].'</p>
                        </div><!-- product detail /-->
    
                        <div class="product-detail">
                                <p>Location: '.$row['location'].'</p>
                            </div><!-- product location /-->
    
                        <div class="cart-menu">
                            <form method="post" onsubmit="return confirm("Do you really want to delete this listing?");">
                                <input type="submit" name="edit-listing" value="Edit Listing" class="button primary" id="edListing" />
                                <input type="submit" name="unmark" value="Unmark" class="button primary" id="unmarkSold" />
                            
                                <input type="submit" name="deleteListing" value="Delete" class="button third" id="deleteListing" />
                                <input type="submit" name="markAsSold" value="Mark As Sold" class="button third" id="markAsSold" />
                                <input  style="display:none;" type="text" name="listingName" value="'.$row['name'].'">
                            </form>
    
                        </div><!-- product buttons /-->
    
                    </div><!-- product meta /-->
            </div><!-- Product /-->';
            }
        }
    }
