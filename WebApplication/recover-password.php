<?php
    include 'DatabaseConnection.php';
    $dbConnection = DatabaseConnection::getInstance()->getConnection();
    $error = "";
    $newPass = "";
    $email = $_GET['user'];
    if ($_POST){
        if(!$_POST['newPass']){
          $error .= "Please enter a new password.<br>";
        }else{
            $newPass = $_POST['newPass'];
        }
        if(!$_POST['newPassRe']){
            $error .= "Please re-enter the new password.<br>";
        }
        if($_POST['newPassRe'] != $_POST['newPass']){
            $error .= "The passwords do not match.<br>";
        }else{
            $newPass = $_POST['newPass'];
        }
        if($error != ""){
          $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
        }else{
            $password_hash = password_hash($newPass, PASSWORD_DEFAULT);
            $query = "UPDATE `users` SET password='".$password_hash."' WHERE email='".$email."'";
            if(mysqli_query($dbConnection, $query)){
                header("Location: signin.php");
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

    <title>MyUniMarket - Update Password</title>

    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="icon" type="image/x-icon" href="../MockUp/favicon.ico" />

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

<body class="inner-page">
    <!-- MAIN Container Start here. -->
    <div class="container">

        <!-- Top Bar Starts Here -->
        <div class="top-info-bar">
            <div class="row">
                <div class="logo float-left">
                    <img alt="" src="../MockUp/MyUniMarket.png" />
                </div>
                <!-- Logo /-->

                <div class="medium-6 small-12 columns hide-for-small-only">

                </div>
                <!-- Right Ends /-->

            </div>
            <!-- row /-->
        </div>
        <!-- top Bar Ends here /-->

        <div class="content-container module">

            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>Update Password</h1>
                    </div>
                    <!-- title /-->
                </div>
                <!-- row /-->
            </div>
            <!-- Title Section End -->

            <div class="spacer module"></div>
            <div class="row">
                <!-- sidebar Ends -->

                <!-- left area ends -->
                <div class="medium-5 small-12 columns form-container">

                    <h2>Create a new password for your account</h2>

                    <div class="err">
                        <?php echo $error; ?>
                    </div>

                    <form method="post">
                        <label>
                            New Password
                            <input type="password" name="newPass" id="userName" value="" placeholder="Your New Password ..." />
                        </label>

                        <label>
                            Re-enter New Password
                            <input type="password" name="newPassRe" value="" placeholder="Confirm New Password ..." />
                        </label>
                        <input type="submit" value="Update" class="button primary" id="submitButton" />
                        <a href="signin.php"></a>
                    </form>
                </div>

                <div class="medium-7 small-12 columns sidebar">

                    <div class="widget">
                        <h2>Instructions for Updating Password</h2>

                        <div class="widget-content">

                            <strong>The updated password will be used for future logins.</strong>
                          
                        </div>
                        <!-- widget content /-->
                    </div>
                    <!-- widget ends -->

                </div>
            </div>
            <!-- row ends /-->

        </div>
        <!-- content-container /-->

        <!-- Footer -->
        <div class="footer">

            <!-- Footer bottom -->
            <div class="footerbottom">
                <div class="row">
                    <div class="medium-6 small-12 columns">
                        <div class="clearfix"></div>
                        <div class="copyrightinfo">2019 © <a href="#">MyUniMarket</a> All Rights Reserved.</div>
                    </div>
                    <!--left side-->
                </div>
            </div>
            <!-- footer Bottom -->
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