<?php
  //? DB Connection
  include 'DatabaseConnection.php';

  //? Session start && variable
  session_start();
  $testerID = "";
  $bookmarksArr = "";

  //? Check session
  if(!$_SESSION['email']){

    header('Location: signin.php'); 
  }
  else{

    $testerID = $_SESSION['email'];
  }

  //? Database Connect
  $dbConnection = DatabaseConnection::getInstance()->getConnection();

  $query = "SELECT bookmarks FROM users WHERE `isConfirmed` = 1 AND `email` = '".$testerID."'";

  if($result = mysqli_query($dbConnection, $query)){

    $row = mysqli_fetch_array($result);

    if(!empty($row['bookmarks']))
      $bookmarksArr = str_split($row['bookmarks']);
  }

  //! Display ***$bookmarksArr*** variable

?>