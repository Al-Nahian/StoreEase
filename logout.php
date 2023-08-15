<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    $_SESSION['loggedin'] = false;
    setcookie('firstName', $firstName, time() - (60*60*24*365));
    setcookie("lastName", $lastName,time() - 60*60*24*365);
    header("location:login.php");
?>