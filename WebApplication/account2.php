<?php

    session_start();
    $testerID = "";
    if(!$_SESSION['email']){

        header('Location: signin.php'); 
    }
    else{

        $testerID = $_SESSION['email'];
    }

    //? Variables that will be used
    $oldPassword = "";
    $newPassword = "";
    $newPasswordConfirm ="";
    $newUsername = "";
    $confirmNewUsername = "";
    $currentUsername = "";
    $currentPassword = "";
    $error = "";

    //? Connecting to the mysql server
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
    
    //? Main Script
    if ($_POST){

        //? Script for changing password
        if(isset($_POST['changePassword'])){

            //! Checking if old username field is empty
            if(!$_POST['oldPassword']){

                $error .= "Your current password is required.<br>";
            }
            else
                $oldPassword = $_POST['oldPassword'];

            //! Checking if new password field is empty
            if(!$_POST['newPassword']){

                $error .= "A new password is required.<br>";
            }
            else
                $newPassword = $_POST['newPassword'];

            //! Checking if confirm password field is empty
            if(!$_POST['newPasswordConfirm']){

                $error .= "Confirmation is required.<br>";
            }
            else
                $newPasswordConfirm = $_POST['newPasswordConfirm'];

            //! Checking if the new passwords match
            if(($_POST['newPasswordConfirm'] && $_POST['newPassword']) && $_POST['newPasswordConfirm'] != $_POST['newPassword']){

                $error .= "Passwords do not match.<br>";
            }

            //! Checking if the old and the new password are the same
            if(($_POST['oldPassword'] && $_POST['newPassword']) && $_POST['oldPassword'] == $_POST['newPassword']){

                $error .= "The new password has to be different from the old one.<br>";
            }

            if($_POST['oldPassword']){

                //TODO NEEDS SESSION VARIABLE OF THE ID TO BE IMPLEMENTED CORRECTLY
                //$tempID = $testerID;  //! Temporary solution for testing

                //? Generate the query command/code
                $query = "SELECT password FROM users WHERE `email` = '".$testerID."'";

                //? Query the database
                $result = mysqli_query($link, $query);

                //? Get the row from database as an array
                $row = mysqli_fetch_array($result);

                $hashed_password = $row['password'];

                if(!password_verify($oldPassword, $hashed_password)) {
                    
                    $error .= "Current password is incorrect.<br>";
                }
            }

            //! Displaying the error message if its not empty or executing main code if it is
            if($error != ""){

            $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
            }
            else{

                //TODO NEEDS SESSION VARIABLE OF ID TO CORRECTLY UPDATE
                //$tempID = $testerID; //! Temporary solution for testing

                //? Hashing the new password
                //! Comment out the line after this comment and uncomment the one after that to test this without hashed password
                $password_hash = password_hash($newPassword, PASSWORD_DEFAULT);
                #$password_hash = $newPassword;

                //? Creating a query and sending it to the database
                $query = 'UPDATE users SET password="'.$password_hash.'" WHERE `email`="'.$testerID.'"';

                mysqli_query($link, $query);
            }
        }

        //? Script for changing username
        if(isset($_POST['changeUsername'])){

            //! Checking if new username field is empty
            if(!$_POST['newUsername']){

                $error .= "New username field is required.<br>";
            }
            else
                $newUsername = $_POST['newUsername'];

            //! Checking if confirm field is empty
            if(!$_POST['confirmNewUsername']){

                $error .= "Confirmation for the new username is required.<br>";
            }
            else
                $confirmNewUsername = $_POST['confirmNewUsername'];

            //! Checking if the fields match
            if(($_POST['newUsername'] && $_POST['confirmNewUsername']) && $_POST['confirmNewUsername'] != $_POST['newUsername']){

                $error .= "Username fields do not match.<br>";
            }

            //TODO IFF THE USERNAMES ARE UNIQUE NEED TO CHECK IF ALREADY EXISTS

            //! Displaying the error message if its not empty or executing main code if it is
            if($error != ""){

            $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
            }
            else{

                //TODO NEEDS SESSION VARIABLE OF ID TO CORRECTLY UPDATE
                //$tempID = "1"; //! Temporary solution for testing
                
                //? Creating a query and sending it to the database
                $query = 'UPDATE users SET username="'.$newUsername.'" WHERE `email`="'.$testerID.'"';
                
                mysqli_query($link, $query);
            }                
        }

        //? Script for deleting the account
        if(isset($_POST['deleteAccount'])){

            //! Checking if current username field is empty
            if(!$_POST['currentUsername']){

                $error .= "Username is required.<br>";
            }
            else{

                $currentUsername = $_POST['currentUsername'];

                //TODO NEEDS SESSION VARIABLE OF THE ID TO BE IMPLEMENTED CORRECTLY
                //$tempID = $testerID;  //! Temporary solution for testing

                //? Generate the query command/code
                $query = "SELECT username FROM users WHERE `email` = '".$testerID."'";

                //? Query the database
                $result = mysqli_query($link, $query);

                //? Get the row from database as an array
                $row = mysqli_fetch_array($result);

                //? Checking if the usesrname is correct
                if($row['username'] != $currentUsername){

                    $error .= "Incorrect username.<br>";
                }
            }

            //! Checking if current password field is empty
            if(!$_POST['currentPassword']){

                $error .= "Current password is required.<br>";
            }
            else{

                $currentPassword = $_POST['currentPassword'];

                //TODO NEEDS SESSION VARIABLE OF THE ID TO BE IMPLEMENTED CORRECTLY
                //$tempID = $testerID;  //! Temporary solution for testing

                //? Generate the query command/code
                $query = "SELECT password FROM users WHERE `email` = '".$testerID."'";

                //? Query the database
                $result = mysqli_query($link, $query);

                //? Get the row from database as an array
                $row = mysqli_fetch_array($result);

                $hashed_password = $row['password'];

                if(!password_verify($currentPassword, $hashed_password)) {
                    
                    $error .= "Incorrect password.<br>";
                }
            }

            //! Displaying the error message if its not empty or executing main code if it is
            if($error != ""){

            $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
            }
            else{

                //TODO NEEDS SESSION VARIABLE OF ID TO CORRECTLY UPDATE
                //$tempID = $testerID; //! Temporary solution for testing

                //? Creating a query and sending it to the database
                $query = 'DELETE FROM users WHERE `email`="'.$testerID.'"';
                                
                mysqli_query($link, $query);

                header('Location: logout.php'); 
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
                        <h1>Account Page - Settings</h1>
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
                                <li><a href="account.php">My Listings</a></li>
                                <li><a href="account3.php">Bookmarked Items</a></li>
                                <li><a href="account2.html">Account Settings</a></li>
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
                            </div> <a href="#">User Since: 2/5/2019</a></a>
                        </div><!-- user detail /-->
                        <div class="clearfix"></div>
                        <br>
                        <div class="row">
                            <div style="text-align: center">

                                <a class="button primary" title="Account" id="passButton">Change Password</a>
                                <a class="button primary" id="useButton" title="Account">Change Username</a>
                                <a id="deleteButton" class="button third" title="Account">Delete Account</a>
                            </div>
                        </div>

                        <div class="err">
                            <?php echo $error; ?>
                        </div>

                        <div id="passBlock" style="text-align: center; display: none">

                            <h2>Change Your Password</h2>
                            <form method="post">
                                <label>
                                    Your Old Password
                                    <input type="password" name="oldPassword" value="" placeholder="Enter old password ..." />
                                </label>

                                <label>
                                    Your New Password
                                    <input type="password" name="newPassword" value="" placeholder="Enter new password ..." />
                                </label>
                                <label>
                                    Confirm New Password
                                    <input type="password" name="newPasswordConfirm" value="" placeholder="Confirm new password ..." />
                                </label>
                                <input type="submit" name="changePassword" value="Confirm" class="button primary" />
                            </form>
                        </div>

                        <div id="useBlock" style="text-align: center; display: none">

                            <h2>Change Your Username</h2>
                            <form method="post">
                                <label>
                                    New Username
                                    <input type="text" name="newUsername" value="" placeholder="Enter new username ..." />
                                </label>

                                <label>
                                    Confirm New Username
                                    <input type="text" name="confirmNewUsername" value="" placeholder="Confimr new username ..." />
                                </label>
                                <input type="submit" name="changeUsername" value="Confirm" class="button primary" />
                            </form>
                        </div>

                        <div id="deleteBlock" style="text-align: center; display: none">

                            <h2 style="color: rgb(255, 0, 0)">Delete Account</h2>
                            <form method="post">
                                <label>
                                    Enter Username
                                    <input type="text" name="currentUsername" value="" placeholder="Enter your username ..." />
                                </label>

                                <label>
                                    Enter Password
                                    <input type="password" name="currentPassword" value="" placeholder="Enter your password ..." />
                                </label>
                                <input type="submit" name="deleteAccount" value="Confirm" class="button third" />
                            </form>
                        </div>

                        <script type="text/javascript">
                    
                            document.getElementById("passButton").onclick = function(){

                                document.getElementById("useBlock").style.display = "none";
                                document.getElementById("deleteBlock").style.display = "none";
                                document.getElementById("passBlock").style.display = "block";

                            }

                            document.getElementById("useButton").onclick = function(){

                                document.getElementById("useBlock").style.display = "block";
                                document.getElementById("deleteBlock").style.display = "none";
                                document.getElementById("passBlock").style.display = "none";

                            }

                            document.getElementById("deleteButton").onclick = function(){

                                document.getElementById("useBlock").style.display = "none";
                                document.getElementById("deleteBlock").style.display = "block";
                                document.getElementById("passBlock").style.display = "none";

                            }    
                    </script>

                    </div><!-- general info ends /-->

                    <!-- Information Boxes -->



                </div><!-- right ends /-->


            </div><!-- Row /-->
            <!--           <div class="header">
                    <div class ="row">
                            <div class="medium-9 small-12 columns float-right">
                                    <div class="widget-content">

                            <a href="account.html" class="button primary" title="Account">Change Password</a>
                                        </div>
                            </div> 

                            <div class="medium-9 small-12 columns float-right">
                                    <div class="widget-content">

                            <a href="account.html" class="button primary" title="Account">Change Name</a>
                        </div>

                            </div>
                            <div class="medium-9 small-12 columns float-right">
                            <a href="account.html" class="button primary" title="Account">Delete Account</a>
                                </div>
        
        
                    </div>
                </div>-->

        </div><!-- customer content /-->



        <!-- Footer -->
        <div class="footer">


            <!-- Footer bottom -->
            <div class="footerbottom">
                <div class="row inner-padding">
                    <div class="medium-6 small-12 columns">
                        <div class="clearfix"></div>
                        <div class="copyrightinfo">2019 © <a href="#">MyUniMarket</a> All Rights Reserved.</div>
                    </div>
                    <!--left side-->
                </div>
            </div><!-- footer Bottom -->
        </div>
        <!-- Footer Ends here -->

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
