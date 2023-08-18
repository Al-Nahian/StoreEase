<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    unset($_SESSION['loggedin']);
    setcookie('number', $number, time() - (60*60*24*365));
    setcookie("password", $password, time() - 60*60*24*365);
    header("location:login.php");
?>