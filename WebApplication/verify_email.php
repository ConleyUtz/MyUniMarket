<?php
    include 'DatabaseConnection.php';
    $dbConnection = DatabaseConnection::getInstance()->getConnection();
    $user = $_GET['user'];
    $query = "UPDATE `users` SET isConfirmed=true WHERE email='".$user."'";
    if(mysqli_query($dbConnection, $query)){
        header("Location: signin.php");
    }
?>
