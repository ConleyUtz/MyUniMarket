<?php

  //? DB Connection
  include 'DatabaseConnection.php';

  //? Session start && variable
  session_start();
  $testerID = "";
  $permissionArr = "";
  $checkEmail = false;

  //! userID of the person whose profile is being viewed
  $ratedID = "";

  //? Check session
  if(!$_SESSION['email']){

    header('Location: signin.php'); 
  }
  else{

    $testerID = $_SESSION['email'];
  }

  //? Database Connect
  $dbConnection = DatabaseConnection::getInstance()->getConnection();

  //TODO HAS TO CHANGE FOR PROFILE PAGES
  $query = "SELECT ratePermission FROM users WHERE `userId` = ".$ratedID;

  if($result = mysqli_query($dbConnection, $query)){

    $row = mysqli_fetch_array($result);

    if(!empty($row['ratePermission']))
      $permissionArr = explode(',' , $row['ratePermission']);
  }

  for($i=0, $i < count($permissionArr), $i++){

    if($permissionArr[$i] == $_SESSION['email']){

      $checkEmail = true;
      break;
    }
  }

  if($checkEmail){

    //TODO Implement ability to rate
    //TODO Remove the person from the permission list
  }

?>