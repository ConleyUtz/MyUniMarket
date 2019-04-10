<?php

  //? DB Connection
  include 'DatabaseConnection.php';

  //? Session start && variable
  session_start();
  $testerID = "";
  $bookmarksArr = "";
  $bookmarsString = "";

  //? Check session
  if(!$_SESSION['email']){

    header('Location: signin.php'); 
  }
  else{

    $testerID = $_SESSION['email'];
  }

  //? Database Connect
  $dbConnection = DatabaseConnection::getInstance()->getConnection();

  //? Checking if the button is pressed
  if(isset($_GET['bookmark'])){

    //? Generate the query command/code
    $query = "SELECT bookmarks FROM users WHERE `email` = '".$testerID."'";

    if($result = mysqli_query($dbConnection, $query)){

      $row = mysqli_fetch_array($result);
  
      if(!empty($row['bookmarks']))
        $bookmarksArr = explode( ',' , $row['bookmarks']);
    }

    array_push($bookmarksArr, $_GET['bookmark']);

    $bookmarsString = implode(',' , $bookmarksArr);

    $query = "UPDATE users SET bookmarks= '".$bookmarsString."' WHERE `email` = '".$testerID."'";

    mysqli_query($dbConnection, $query);
    mysqli_close($dbConnection);

  }

?>