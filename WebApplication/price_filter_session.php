<?php
    session_start();
    $_SESSION['min'] = $_GET['min'];
    $_SESSION['max'] = $_GET['max'];
    header("Location: market.php");
?>