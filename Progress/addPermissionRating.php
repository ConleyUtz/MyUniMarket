<?php

  //? DB Connection
  include 'DatabaseConnection.php';

  //? Session start && variable
  session_start();
  $testerID = "";
  $permissionArr = "";
  $permissionString = "";

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

  if(isset($_GET['soldEmail'])){

    //? Generate the query command/code
    $query = "SELECT ratePermission FROM users WHERE `email` = '".$_GET['soldEmail']."'";

    if($result = mysqli_query($dbConnection, $query)){

      $row = mysqli_fetch_array($result);
  
      if(!empty($row['ratePermission']))
        $permissionArr = explode( ',' , $row['ratePermission']);
    }

    array_push($permissionArr, $_GET['soldEmail']);

    $permissionString = implode(',' , $permissionArr);

    $query = "UPDATE users SET ratePermission= '".$permissionString."' WHERE `email` = '".$testerID."'";

    mysqli_query($dbConnection, $query);
    mysqli_close($dbConnection);
  }

?>
