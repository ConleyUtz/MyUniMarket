<?php
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
    $user = $_GET['user'];
    $query = "UPDATE `users` SET isConfirmed=true WHERE email='".$user."'";
    mysqli_query($link, $query);
    header("Location: signin.php");
?>
