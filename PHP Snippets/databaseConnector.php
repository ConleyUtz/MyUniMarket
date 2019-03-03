<?php

  //! Define the connection details
  $host = "localhost";
  $uname = "root";
  $pwd = "";
  $database = "my_uni_market";

  //! Run the connect code
  $link = mysqli_connect($host, $uname, $pwd, $database);

  //! Check if connected successfully
  if(mysqli_connect_error()){
    exit("There was an error connecting to the database");
  }else{
          //echo "Database connection successful!";
  }
?>