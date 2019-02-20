<?php

  $error = "";
  $password = "";
  $email = "";

  if ($_POST){

    //! Checking if the email field is empty
    if(!$_POST['email']){

      $error .= "An email address is required.<br>";
    
    }
    else
      $email = $_POST['email'];

    //! Checking if the password field is empty
    if(!$_POST['password']){

      $error .= "The password is required.<br>";
    }
    else{
        $password = $_POST['password'];
        //echo "Reaches here!";
        //echo $password;
    }

    //! Checking the validity of the email
    if($_POST['email'] && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false){

      $error .= "The email address is invalid.<br>";
      $email = "";
    }

    //! Checking if the error message is empty. If not run the main code
    if($error != ""){

      $error = '<div class="signin-error" style="color:red;"><strong>Error:</strong><br>'.$error.'</div>';
    }
    else{

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

        //? Generate the query command/code
        $query = "SELECT password FROM users WHERE `email` = '".$email."'";

        //? Query the database
        $result = mysqli_query($link, $query);

        //? Get the row from database as an array
        $row = mysqli_fetch_array($result);

        //? Single out the hashed password from the row array
        $hashed_password = $row['password'];
        //echo "<br/>";
        //echo $hashed_password;

        if(password_verify($password, $hashed_password)) {
            // If the password inputs matched the hashed password in the database
            // Log them in.
            echo "Login sucess!";
        }else{
            echo "Login failure!";
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
    
    <title>MyUniMarket - Sign In</title>
	
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
                
                <div class="medium-6 small-12 columns hide-for-small-only">

                </div><!-- Right Ends /-->
                
            </div><!-- row /-->
        </div>
        <!-- top Bar Ends here /-->
        

        <div class="content-container module">
			
            <!-- Title Section -->
            <div class="title-section">
                <div class="row">
                    <div class="small-12 columns">
                        <h1>Welcome</h1>
                    </div> <!-- title /-->
                </div><!-- row /-->
            </div>
            <!-- Title Section End -->
            
           <div class="spacer module"></div>
           <div class="row">
               <!-- sidebar Ends -->
            	
                <div class="medium-7 small-12 columns sidebar">
					
                    <div class="widget">
                        <h2>About MyUniMarket</h2>
                        
                        <div class="widget-content">
                        	
                                <strong>Bold Text Here</strong> 	
                            </label>
                                <p>Regular Text Here</p>
						</div><!-- widget content /-->
                    </div><!-- widget ends -->

                </div>
                <!-- left area ends -->
                <div class="medium-5 small-12 columns form-container">

                        <h2>Sign In to start browing</h2>

                        <div class="err"><?php echo $error; ?></div>
                        <form method="post">
    
                            <label>
                                Your Email address
                                <input type="text" value="" placeholder="Your Email Address ..." name="email"/>
                            </label>
                            
                            <label>
                                Your Password
                                <input type="password" value="" placeholder="Enter password ..." name="password"/>
                            </label>
                            <input type="submit" value="Sign In" class="button primary" />                         	<a href="login.html">Forgot password?</a>
    
                        </form>
                        <div>
                            Don't have an account?
                        </div>
                        <div>
                            <input type="submit" value="Register" class="button primary" />
                        </div>
        
        </div>
            </div><!-- row ends /-->
   
        
            
        </div> <!-- content-container /-->
        

        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-5 small-12 columns">
                    <h4> InsertTextHere</h4>
                </div>
                <div class="medium-7 small-12 columns signup-form">
                </div>
           </div><!-- row -->
         </div>
        <!-- Call to Action End -->
        
        <!-- Footer -->
	   <div class="footer">

        
        <!-- Footer bottom -->
        <div class="footerbottom">
        	<div class="row">
            	<div class="medium-6 small-12 columns">
                    <div class="clearfix"></div>
                    <div class="copyrightinfo">2019 © <a href="#">MyUniMarket</a> All Rights Reserved.</div>
                </div><!--left side-->
            </div>
        </div><!-- footer Bottom -->
   </div>
	   <!-- Footer Ends here -->

	</div>
    <!-- MAIN Container Ends here. -->
	<a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	<!-- Page Preloader 
    <div class="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
	</div>
    	-->
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