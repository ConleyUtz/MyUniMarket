<?php

  //? DB Connection
  include 'DatabaseConnection.php';

  //? Session start && variable
  session_start();
  $testerID = "";
  $ratingArr = "";
  $ratingNum = "";

  //? Check session
  if(!$_SESSION['email']){

    header('Location: signin.php'); 
  }
  else{

    $testerID = $_SESSION['email'];
  }

  //? Database Connect
  $dbConnection = DatabaseConnection::getInstance()->getConnection();

  //! Input field rating
  $newRating = $_GET['rating'];

  //TODO HAS TO CHANGE FOR PROFILE PAGES
  $query = "SELECT * FROM users WHERE `email` = '".$testerID."'";

  if($result = mysqli_query($dbConnection, $query)){

    $row = mysqli_fetch_array($result);

    //? Setting rating calculation variables
    if($row['ratingAmount'] != 0){

      $ratingSum = $row['ratingTotal'];
      $ratingNum = $row['ratingAmount'];
    }
  }

  //? Appendding the new rating
  $ratingNum++;
  $ratingSum += $newRating;

  //? Update the total rankings
  $query = "UPDATE users SET ratingTotal= ".$ratingSum.",ratingAmount= ".$ratingNum." WHERE `email` = '".$testerID."'";

  mysqli_query($link, $query);
  mysqli_close($link);
?>