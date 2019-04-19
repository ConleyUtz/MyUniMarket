<?php
    include 'DatabaseConnection.php';
    $dbConnection = DatabaseConnection::getInstance()->getConnection();
    require '../vendor/autoload.php';
    $error = "";
    if($_POST){
        if(!$_POST['emailInput']){
          $error .= "Please enter an email address.<br>";
        }else{
            $email = $_POST['emailInput'];
            $arr = explode('@',$email);
            if($arr[1] != "purdue.edu"){
                $error .= "The email must be a purdue email! <br>";
            }else{
                if($result = mysqli_query($dbConnection, "SELECT password FROM users WHERE `email` = '".$email."' AND `isConfirmed` = true")){
                    if(mysqli_num_rows($result) == 0){
                        $error .= "A user with the following email does not exist. <br>";
                    }
                }else{
                    $error .= "A user with the following email does not exist. <br>";
                }
            }
        }
        if($error != ""){
          $error = '<div class="signup-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
        }else{
            $link = "http://localhost/MyUniMarket/WebApplication/recover-password.php?user=".$email;
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = 'smtp-mail.outlook.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'myunimarket@outlook.com';
            $mail->Password = 'WebApplication@123';
            $mail->setFrom('myunimarket@outlook.com', 'MyUniMarket');
            $mail->addAddress($email, 'User');
            $mail->Subject = 'Verify your email - MyUniMarket';
            $mail->Body = "Please confirm your email address for MyUniMarket for password recovery by clicking on this: ".$link;
            if (!$mail->send()) {
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //echo 'Message sent!';
                $error = '<div class="signup-success" style="color:green;"><p>Email sent!</p></div>';
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

    <title>MyUniMarket - Recovery</title>

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
                        <h1>Password Recovery</h1>
                    </div>
                    <!-- title /-->
                </div>
                <!-- row /-->
            </div>
            <!-- Title Section End -->

            <div class="spacer module"></div>
            <div class="row">
                <!-- sidebar Ends -->

                <div class="medium-7 small-12 columns sidebar">

                    <div class="widget">
                        <h2>Instructions for Password Recovery</h2>

                        <div class="widget-content">
                            <ul>
                                <li> Provide your registered purdue email address.</li>
                                <li> A validation email will be sent to your purdue email and you will be redirected to a page where you can change your password.</li>
                                <li> You will be able to login using your new password. </li>
                            </ul>
                        </div>
                        <!-- widget content /-->
                    </div>
                    <!-- widget ends -->

                </div>
                <!-- left area ends -->
                <div class="medium-5 small-12 columns form-container">

                    <h2>Enter your credentials</h2>

                    <div class="err">
                        <?php echo $error; ?>
                    </div>

                    <form method="post">

                        <label>
                            Your MyUniMarket Email address
                            <input name="emailInput" type="text" value="" placeholder="Your Email Address ..." />
                        </label>

                        <input type="submit" value="Recover Password" class="button primary" />

                    </form>
                    <div>
                        Don't have an account?
                    </div>
                    <div>
                        <a href="./signup.php">
                            <input type="submit" value="Register" class="button primary" />
                        </a>
                    </div>

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